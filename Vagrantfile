VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "forwarded_port", guest:9001, host: 9001

  config.vm.synced_folder "./", "/vagrant", id: "vagrant-root",
    owner: "www-data",
    group: "www-data",
    mount_options: ["dmode=775,fmode=664"]

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "playbook.yml"
  end
end
