# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile para Inventory
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "educar/laravel-base"
  config.vm.box_url = "http://packages.educ.gov.ar/educar-boxes/laravel-base/last/laravel-base.json"

  config.vm.provider "virtualbox" do |v|
   v.memory = 1024
  end

  config.vm.synced_folder ".", "/vagrant", disabled: true

  #OBLIGATORIO - Path del directorio en el host a montar en la virtual
  #Puede ser absoluto o relativo
  config.unificar.local_dir = "."

  #OBLIGATORIO - Path absoluto del punto de montaje en la virtual
  config.unificar.remote_mountpoint = "/vagrant"

  #redireccion de apache
  config.vm.network "forwarded_port", guest: 80, host: 8080

  #redireccion de postgres
  config.vm.network "forwarded_port", guest: 5432, host: 54322
end
