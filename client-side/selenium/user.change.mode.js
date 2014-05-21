var wd = require('wd'),
    assert = require('assert'),
    chai = require("chai"),
    expect = chai.expect,
    _ = require('underscore'),
    fs = require('fs'),
    path = require('path'),
    uuid = require('uuid-js');

var VARS = {};

// This assumes that selenium is running at http://127.0.0.1:4444/wd/hub/
var noop = function() {},
    b = wd.remote(
      "localhost",
      4445,
      "twineapp",
      "716705b5-53fe-4345-b9b7-ac16526fcd70"
    );

b.on('status', function(info){
  console.log('\x1b[36m%s\x1b[0m', info);
});

b.on('command', function(meth, path){
  console.log(' > \x1b[33m%s\x1b[0m: %s', meth, path);
});

var desired = {
  browserName: 'chrome'
  , version: '27'
  , platform: 'Mac 10.8'
  , tags: ["examples"]
  , name: "This is an example test"
}

b.init(desired, function() {
  b.get("http://192.168.50.4/siv-v3/login.php", function() {
    b.title(function(err, title) {
      assert.ok(~title.indexOf('I am a page title - Sauce Labs'), 'Wrong title!');
      b.elementById('submit', function(err, el) {
        b.clickElement(el, function() {
          b.eval("window.location.href", function(err, href) {
            assert.ok(~href.indexOf('guinea'), 'Wrong URL!');
            b.quit()
          })
        })
      })
    })
  })
})

b.init(desired, function(){

    //this.timeout(60000);

    b.chain(function(err) {
      done(err);
    })
    .get("http://192.168.50.4/siv-v3/login.php")
    .elementById("sign-in-user", function(err, el) {
      b.next('clear', el, function(err) {
        b.next('type', el, "mark", noop);
      });
    })
    .elementById("sign-in-password", function(err, el) {
      b.next('clear', el, function(err) {
        b.next('type', el, "dev", noop);
      });
    })
    .elementById("loginBtn", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .elementByCssSelector("span.caret", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .elementById("siv-user-mode", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .elementByXPath("//div[@id='control_form_field_4']/select//option[2]", function(err, el) {
      b.next('isSelected', el, function(err, isSelected) {
        if (!isSelected) {
          b.next('clickElement', el, noop);
        }
      });
    })
    .elementById("submit_6", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .elementByXPath("//div[@id='user_controls']/div/a[2]", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .elementById("siv-user-logout", function(err, el) {
      b.next('clickElement', el, noop);
    })
    .close(function(err) {
      done(err);
    });


  afterEach(function() {
    b.quit();
  });
});
