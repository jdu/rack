var wd = require('wd')
  , _ = require('underscore')
  , fs = require('fs')
  , path = require('path')
  , uuid = require('uuid-js');
var VARS = {};

var b = wd.promiseRemote();

b.on('status', function(info){console.log('[36m%s[0m', info);});b.on('command', function(meth, path, data){  console.log(' > [33m%s[0m: %s', meth, path, data || '');});
b.init({
  browserName:'firefox'
})
.then(function () { return b.get("http://192.168.50.4/siv-v3/login.php"); })
.then(function () { return b.elementById("sign-in-user"); })
.then(function (el) { return b.clear(el)
  .then(function () { return b.type(el, "mark"); });
})
.then(function () { return b.elementById("sign-in-password"); })
.then(function (el) { return b.clear(el)
  .then(function () { return b.type(el, "dev"); });
})
.then(function () { return b.elementById("loginBtn"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementByCssSelector("span.caret"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("siv-user-location"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementByXPath("//div[@class='form-location-sel-toolbar']//button[.='Change Location']"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("49558a30-3d3f-4faa-bef2-6e1a9f5fa624"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("86b07f42-77fd-4baf-98df-a297328e42d8"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("1197f33c-2eb8-4d25-af71-e18418caf6a9"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementByXPath("//div[@class='form-location-sel-toolbar']//button[.='Accept']"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("submit_5"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementByXPath("//div[@id='user_controls']/div/a[2]"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("siv-user-logout"); })
.then(function (el) { return b.clickElement(el); })
.fin(function () {
b.quit();
}).done();
