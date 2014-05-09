node default {
	exec { "apt-update":
	    command => "/usr/bin/apt-get update", 	
	    onlyif => "/bin/bash -c 'exit $(( $(( $(date +%s) - $(stat -c %Y /var/lib/apt/lists/$( ls /var/lib/apt/lists/ -tr1|tail -1 )) )) <= 604800 ))'"
	}	
	
	Exec["apt-update"] -> Package <| |>
	
	file { "/etc/php5/conf.d/toba.ini":
	    	ensure => present,
    		source => "/vagrant/.puppet/data/etc/php5/conf.d/toba.ini"
	}
	
	file { "/etc/profile.d/instalacion_toba.sh":
	    	ensure => present,
    		source => "/vagrant/.puppet/data/etc/profile.d/instalacion_toba.sh"
	}
	
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
  	$enhancers = [ "apache2", "libapache2-mod-php5", "php5", "php5-cli", "php5-pgsql", "php5-gd", "php5-curl", "graphviz", "curl", "subversion", "unzip", "postgresql-contrib-9.1" ]
	package { $enhancers: ensure => "installed" }
	
  	file { '/etc/motd':
  		ensure => present,
		source => "/vagrant/.puppet/data/etc/motd"
	}

}
