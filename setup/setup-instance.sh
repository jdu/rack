#/bin/bash

sudo rm -R ~/Projects/twine
mkdir ~/Projects/twine
mkdir ~/Projects/twine/instances

git clone <siv-v3> ~/Projects/twine/siv-v3
git clone <api-data> ~/Projects/twine/siv-v3/api-data
git clone <vagrant> ~/Projects/twine/instances/instance-unhcr
