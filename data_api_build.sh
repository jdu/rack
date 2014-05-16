#/bin/bash

echo "1. Installing Ubuntu Dependencies";
sudo apt-get update >> /dev/null;
sudo apt-get install -y python-dev >> /dev/null;
sudo apt-get install -y build-essential >> /dev/null;
sudo apt-get install -y libpq-dev >> /dev/null;
sudo apt-get install -y python-pip >> /dev/null;
sudo apt-get install -y sloccount >> /dev/null;

echo "2. Installing Python Devpendencies";
sudo pip install --upgrade nose coverage psycopg2 flask pymongo nosexcover pylint pep8 clonedigger >> /dev/null;

echo "3. Running CI Tasks";
rm -R ../build
mkdir ../build
cd ../
sloccount --duplicates --wide --details twine | fgrep -v .git > build/sloccount.sc || :
clonedigger --cpd-output twine || :
pep8 --max-line-length=120 twine > build/pep8.log | true
pyflakes twine | awk -F\: `{printf '%s:%s: [E]%s\n', $1, $2, $3}` > build/pyflakes.log
nosetests twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive --xunit-file=build/xunit.xml --xcoverage-file=build/coverage.xml
pylint --msg-template='{path}:{line}: [{msg_id}({symbol}), {obj}] {msg}' twine > build/pylint.out || :
