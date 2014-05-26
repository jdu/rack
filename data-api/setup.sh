#!/bin/sh

echo "Installing Ubuntu Dependencies";
sudo apt-get update > /dev/null || true
sudo apt-get install -y python-dev > /dev/nul || true
sudo apt-get install -y build-essential > /dev/null || true
sudo apt-get install -y libpq-dev > /dev/null || true
sudo apt-get install -y python-pip > /dev/null || true
sudo apt-get install -y sloccount > /dev/null || true

echo "Fixing Setuptools";
curl https://bitbucket.org/pypa/setuptools/raw/bootstrap/ez_setup.py | python

echo "Installing Python Dependencies";
sudo pip install --upgrade setuptools
sudo pip install --upgrade distribute
sudo pip install --upgrade nose coverage psycopg2 flask pymongo nosexcover pylint pep8 clonedigger;
