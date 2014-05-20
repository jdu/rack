#/bin/bash

rm -R "$WORKSPACE/build" | true

mkdir "$WORKSPACE/build"
mkdir "$WORKSPACE/build/api"
mkdir "$WORKSPACE/build/coverage"
mkdir "$WORKSPACE/build/logs"
mkdir "$WORKSPACE/build/pdepend"
mkdir "$WORKSPACE/build/phpdox"

phploc --count-tests --log-csv "$WORKSPACE/build/logs/phploc.csv" --log-xml "$WORKSPACE/build/logs/phploc.xml" --exclude "$WORKSPACE/api/application/third_party" "$WORKSPACE/api/application" "$WORKSPACE/api/tests"

pdepend --jdepend-xml="$WORKSPACE/build/logs/jdepend.xml" --jdepend-chart="$WORKSPACE/build/pdepend/dependencies.svg" --overview-pyramid="$WORKSPACE/build/pdepend/overview-pyramid.svg" --ignore="$WORKSPACE/api/application/third_party" "$WORKSPACE/api/application"

phpmd "$WORKSPACE/api/application" text "$WORKSPACE/build/phpmd.xml" --exclude "$WORKSPACE/api/application/third_party"
