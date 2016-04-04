# Vagrant ILIAS installation Universität Bern

## Installation
1. Install vagrant
2. Install ansible
3. create an ilias-vagrant folder
4. "sudo git clone --recursive git@ilublx3.unibe.ch:vagrant/ilias-vagrant.git /folder"
5. make the folder your own with "chown -R you:staff ilias-vagrant"
6. add repo to sourcetree and checkout all the correct branches of submodules
7. adjust port forwarding in Vagrant.file
8. disable/enable correct DB
9. select the modules to be installed in the playbook

## Running
1. run 'vagrant up' inside ilias-vagrant
2. check localhost:8081 to see if ilias install has been successful
3  Optional: Check localhost:9704 to check mail sent from the server
4. if importDB is set to false in the playbook install DB through setup/setup.php
5. if importDB is set to true in the playbook no further installation steps are needed
    -> DO NOT FORGET TO SET THE importDB to false aftwerwards. (otherwise your db will be reset with the next
    vagrant provision command).
6. reload ansible changes with 'vagrant provision'
7. access via ssh with vagrant ssh


## Destroying VM
1. destroy with 'vagrant destroy'

##Timon Amstutz und Tomasz Kolonko
