VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8081
   #Etherpad
  config.vm.network "forwarded_port", guest:9703, host: 9703
   #Mailcatcher
  config.vm.network "forwarded_port", guest:1080, host: 9704

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
