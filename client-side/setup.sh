#!/bin/sh

echo "Installing Mocha, Should, Mocha-Sauce..."
sudo npm install -g mocha
sudo npm install -g should
sudo npm install -g wd
sudo npm install -g chai
sudo npm install -g underscore
sudo npm install -g uuid-js
sudo npm install -g describe

echo "Installing Sauce Connect...";
cd /tmp;
sudo wget https://d2nkw87yt5k0to.cloudfront.net/downloads/sc-latest-linux.tar.gz
sudo tar -xvf sc-latest-linux.tar.gz
sudo ln -s /tmp/sc-4.2-linux/bin/sc /usr/bin/sc
