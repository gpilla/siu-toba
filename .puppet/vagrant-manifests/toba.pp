node default {

	Exec {
		path => [ '/bin/', '/sbin/' , '/usr/bin/', '/usr/sbin/' ]
	}

	exec { "apt-update":
	    command => 'apt-get update',
	    onlyif  => "bash -c 'exit $(( $(( $(date +%s) - $(stat -c %Y /var/lib/apt/lists/$( ls /var/lib/apt/lists/ -tr1|tail -1 )) )) <= 604800 ))'"
	}

	Exec["apt-update"] -> Package <| |>

	class { 'postgresql::globals':
	  manage_package_repo => true,
	  version             => '9.1',
	}->
	class { 'postgresql::server':
		ip_mask_deny_postgres_user => '0.0.0.0/32',
		ip_mask_allow_all_users    => '0.0.0.0/0',
		listen_addresses           => '*',
		ipv4acls                   => ['host all all 192.168.0.0/24 trust'],
		manage_firewall            => true,
		postgres_password          => 'postgres',
	}

	# Me aseguro de que esten los siguientes paquetes.
	$enhancers = [
					'apache2',
					'libapache2-mod-php5',
					'php5',
					'php5-cli',
					'php5-pgsql',
					'php5-gd',
					'php5-curl',
					'graphviz',
					'curl',
					'subversion',
					'unzip',
					'postgresql-contrib-9.1'
				]

	# Cargo un mensaje de bienvenida. (Cosmetico!)
	file { '/etc/motd':
		ensure => present,
		source => "/vagrant/.puppet/data/etc/motd"
	}

	# Copio un archivo que va a cargar el entorno de SIU-Toba
	# cuando cualquier usuario se loguee.
	file { '/etc/profile.d/cargar_toba.sh':
	    	ensure => present,
    		source => "/vagrant/.puppet/data/etc/profile.d/cargar_entorno_toba.sh"
	}

	# Cargo configuraciones de PHP necesarias para el correcto
	# funcionamiento de SIU-Toba
	file { '/etc/php5/conf.d/toba.ini':
			ensure => present,
			source => '/vagrant/.puppet/data/etc/php5/conf.d/toba.ini'
	}

	package {$enhancers: ensure => installed}->
	exec { 'instalar_toba':
		command => '/bin/bash /vagrant/.puppet/instalar_toba.sh',
	}


	file_line { 'Cambiar usuario de Apache':
		ensure => present,
		line    => 'APACHE_RUN_USER=vagrant',
		path    => '/etc/apache2/envvars',
		require => Package['apache2']
	}

	file_line { 'Cambiar grupo de Apache':
		ensure => present,
		line    => 'APACHE_RUN_GROUP=vagrant',
		path    => '/etc/apache2/envvars',
		require => Package['apache2']
	}

	# Cambios de permisos y owners a "vagrant"
	file { '/var/log/apache2':
    	ensure  => 'present',
    	mode    => '0644',
		require => Package['apache2'],
	}

	file { '/var/lock/apache2':
		owner   => 'vagrant',
		group   => 'vagrant',
		require => Package['apache2'],
	}

	file { '/var/lib/php5':
		owner   => 'vagrant',
		group   => 'vagrant',
		require => Package['php5'],
	}

}
