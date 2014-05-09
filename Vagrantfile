#
# Archivo de configuración de Vagrant
#

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # Inicio la maquina virtual de Guarani3
  config.vm.define :toba do |toba_config|
    toba_config.vm.box = "precise64"
    toba_config.vm.box_url = "hashicorp/precise64"
    toba_config.vm.network :private_network, ip: "192.168.33.10"
    toba_config.vm.synced_folder "./", "/usr/local/src/toba"
    config.vm.provider "virtualbox" do |v|
	  v.name = "toba-vagrant-vm"
	end
	toba_config.vm.provision "shell", path: ".puppet/install-modules.sh"
	toba_config.vm.provision :puppet do |puppet|
      puppet.manifests_path = ".puppet/vagrant-manifests"
      puppet.manifest_file  = "toba.pp"
      puppet.module_path = ".puppet/modules"
    end
  end
end
