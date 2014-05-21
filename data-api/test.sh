#!/bin/sh

rm -R build || true
mkdir build || true
sloccount --duplicates --wide --details twine | fgrep -v .git > build/sloccount.sc || :
clonedigger --cpd-output twine || :
pep8 --max-line-length=120 twine > build/pep8.log || :
pyflakes twine | awk -F\: `{printf '%s:%s: [E]%s\n', $1, $2, $3}` > build/pyflakes.log || :
nosetests twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive --xunit-file=build/xunit.xml --xcoverage-file=build/coverage.xml
pylint --msg-template='{path}:{line}: [{msg_id}({symbol}), {obj}] {msg}' twine > build/pylint.out || :
