#!/bin/sh

echo "Starting Remote Connection to Sauce..."
nohup sc -u twineapp -k 716705b5-53fe-4345-b9b7-ac16526fcd70 &

node runner.js

echo "Shutting down Sauce Connection..."
while :; do killall sc; sleep 30; sc -u twineapp -k 716705b5-53fe-4345-b9b7-ac16526fcd70; done
