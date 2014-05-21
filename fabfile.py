#/usr/bin/python

from __future__ import with_statement

import os

from fabric.api import *


def clean():
    """
    Cleans the build directory away
    """
    if os.path.isdir(os.path.join(os.path.dirname(__file__), "build")):
        local("rm -R build")


def test():
    """
    runs the tests for this item
    """
    local("nosetests twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive")


def setup():
    """
    Sets up the requirements for the Python API tests
    """
    local("sudo pip install nose coverage nosexcover pep8 pyflakes pylint clonedigger sphinx")
    local("sudo apt-get install -y git")
    local("sudo apt-get install -y sloccount")


def docs():
    """
    Generates documentation
    """
    if os.path.isdir(os.path.join(os.path.dirname(__file__), "docs")):
        local("rm -R docs")
    local("sphinx-apidoc -Ff -o docs twine")
    local("echo 'sys.path.append(\"/var/www/siv-v3/api-data\")' >> docs/conf.py")
    with lcd("docs"):
        local("make html")


def deploy_docs(git_user=None, git_pass=None):
    docs()
    with lcd("docs"):
        local("git clone https://github.com/webhis/documentation.git")
        local("rm -R documentation/api/Python")
        with lcd("documentation"):
            local("git remote set-url origin https://jdu@github.com/webhis/documentation.git")
            local("cp -R ../_build/html api/Python")
            local("git add -A")
            local("git commit -am 'Python documentation updated by Jenkins'")
            local("git push")


def compile():
    clean()
    local("mkdir build")
    local("sloccount --duplicates --wide --details twine | fgrep -v .git > build/sloccount.sc || :")
    local("clonedigger --cpd-output twine || :")
    local("pep8 --max-line-length=120 twine > build/pep8.log | true")
    # local("pyflakes twine | awk -F\: `{printf '%s:%s: [E]%s\n', $1, $2, $3}` > build/pyflakes.log")
    local(
        "nosetests twine --exe --with-xcoverage --with-xunit --cover-package=twine --cover-inclusive --xunit-file=build/xunit.xml --xcoverage-file=build/coverage.xml")
    local("pylint --msg-template='{path}:{line}: [{msg_id}({symbol}), {obj}] {msg}' twine > build/pylint.out || :")
    # Generate documentation
    docs()

