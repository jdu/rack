#/bin/bash

sudo apt-get update
sudo apt-get install -y python-dev
sudo apt-get install -y build-essential
sudo apt-get install -y libpqdev

sudo pip install --upgrade nose coverage psycopg2 flask pymongo nosexcover pylint pep8

