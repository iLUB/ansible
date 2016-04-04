VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"

  #Single vagrant machine
  config.vm.network "forwarded_port", guest: 80, host: 8081
   #Etherpad
  config.vm.network "forwarded_port", guest:9703, host: 9703
   #Mailcatcher
  config.vm.network "forwarded_port", guest:1080, host: 9704

  #Machine for php7 and default in parrallel
  #config.vm.define "php7" do |php7|
  #  php7.vm.network "forwarded_port", guest: 80, host: 8090
  #Mailcatcher
  #  php7.vm.network "forwarded_port", guest:1080, host: 9705
  #end
  #config.vm.define "default" do |default|
  #  default.vm.network "forwarded_port", guest: 80, host: 8081
  #Etherpad
  #   default.vm.network "forwarded_port", guest:9703, host: 9703
  #Mailcatcher
  #  default.vm.network "forwarded_port", guest:1080, host: 9704
  #end



  config.vm.synced_folder "./", "/vagrant", id: "vagrant-root",
    owner: "www-data",
    group: "www-data",
    mount_options: ["dmode=775,fmode=664"]

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "playbook.yml"
  end

  config.vm.provider "virtualbox" do |v|
    v.memory = 1024
    v.cpus = 2
  end
end
