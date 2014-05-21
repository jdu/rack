#!/bin/sh

echo "Installing Mocha, Should, Mocha-Sauce..."
sudo npm install mocha
sudo npm install should
sudo gem install chemistrykit
sudo npm install git://github.com/pbakaus/mocha-sauce.git
sudo npm install wd
sudo npm install chai
sudo npm install underscore
sudo npm install uuid-js
sudo npm install describe

echo "Installing Sauce Connect...";
cd /tmp;
wget https://d2nkw87yt5k0to.cloudfront.net/downloads/sc-latest-linux.tar.gz
tar -xvf sc-latest-linux.tar.gz
sudo ln -s /tmp/sc-4.2-linux/bin/sc /usr/bin/sc
