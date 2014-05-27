var wd = require('wd'),
    assert = require('assert'),
    chai = require("chai"),
    chaiAsPromised = require("chai-as-promised"),
    expect = chai.expect,
    _ = require('underscore'),
    fs = require('fs'),
    path = require('path'),
    uuid = require('uuid-js');

chai.use(chaiAsPromised);
chai.should();
chaiAsPromised.transferPromiseness = wd.transferPromiseness;

var VARS = {
    username: "mark",
    password: "dev"
};

var noop = function () {
    },
    browser;

var desired = {
    browserName: 'chrome', version: '', platform: 'Mac 10.8', tags: ["ui"], name: "General Test"
}

browser = wd.promiseChainRemote(
    "localhost",
    4445,
    "twineapp",
    "716705b5-53fe-4345-b9b7-ac16526fcd70"
)

browser.on("status", function (info) {
    console.log(info);
});

browser.on("command", function (eventType, command, response) {
    console.log(" > " + eventType, command, (response || ""));
});

browser.on("http", function (meth, path, data) {
    console.log(" > " + meth, path, (data || ""));
});

module.exports.browser = browser;
module.exports.desired = desired;
module.exports.CONFIG = VARS;
