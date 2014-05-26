#!/bin/sh

rm -R build || true
rm output.xml || true
mkdir build || true
# sloccount --duplicates --wide --details /var/www/siv-v3/api-data/twine | fgrep -v .git > build/sloccount.sc || :
clonedigger --cpd-output /var/www/siv-v3/api-data/twine > /dev/null || :
pep8 --max-line-length=120 /var/www/siv-v3/api-data/twine > build/pep8.log || :
pyflakes /var/www/siv-v3/api-data/twine > build/pyflakes.log || :
nosetests /var/www/siv-v3/api-data/twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive --xunit-file=build/xunit.xml --xcoverage-file=build/coverage.xml
pylint /var/www/siv-v3/api-data twine > build/pylint.out || :
