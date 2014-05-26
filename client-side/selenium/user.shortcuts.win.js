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
.then(function () { return b.elementByXPath("//div[@id='user_controls']/div/a[2]"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("twine-shortcuts"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.hasElement(Id,"ShortcutsWin"); })
.then(function (el) {
if (!bool) {
  b.quit(null);
  throw new Error('assertElementPresent failed');
}
})
.then(function () { return b.elementById("close_ShortcutsWin"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementByXPath("//div[@id='user_controls']/div/a[2]"); })
.then(function (el) { return b.clickElement(el); })
.then(function () { return b.elementById("siv-user-logout"); })
.then(function (el) { return b.clickElement(el); })
.fin(function () {
b.quit();
}).done();
