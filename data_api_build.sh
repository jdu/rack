#/bin/bash

sudo apt-get update
sudo apt-get install -y python-dev
sudo apt-get install -y build-essential
sudo apt-get install -y libpq-dev
sudo apt-get install -y python-pip
sudo apt-get install -y sloccount

sudo pip install --upgrade nose coverage psycopg2 flask pymongo nosexcover pylint pep8 clonedigger

rm -R ../build
mkdir ../build
cd ../
sloccount --duplicates --wide --details twine | fgrep -v .git > build/sloccount.sc || :
clonedigger --cpd-output twine || :
pep8 --max-line-length=120 twine > build/pep8.log | true
pyflakes twine | awk -F\: `{printf '%s:%s: [E]%s\n', $1, $2, $3}` > build/pyflakes.log
nosetests twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive --xunit-file=build/xunit.xml --xcoverage-file=build/coverage.xml
pylint --msg-template='{path}:{line}: [{msg_id}({symbol}), {obj}] {msg}' twine > build/pylint.out || :
