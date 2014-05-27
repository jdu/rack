/**
 * Take screenshots of major pages in the application
 * @param browser
 * @param desired
 * @param config
 */

var fs = require("fs");
var base = require("./base");
var browser = base.browser;


function run() {

    var screen_saver = function (data, name) {
        var base64Data = data.replace(/^data:image\/png;base64,/, "")
        fs.writeFile(name, base64Data, "base64", function (err) {
            if (err) console.log(err);
        })
    }

    browser.init(base.desired)
        .sauceJobUpdate({tags: ['login']})
        .get("http://192.168.50.4/siv-v3/login.php")
        .waitForElementById("sign-in-user", 5000)
        .then(function () {
            return browser.elementById("sign-in-user");
        })
        .then(function (el) {
            return browser.clear(el)
                .then(function () {
                    return browser.type(el, "mark")
                })
        })
        .then(function(){
            return browser.elementById("sign-in-password");
        })
        .then(function(el){
            return browser.clear(el)
                .then(function(){
                    return browser.type(el, "dev")
                })
        })
        .then(function(){
            return browser.elementById("loginBtn");
        })
        .then(function(el){
            browser.clickElement(el);
        })
        .waitForElementById("toolselector", 5000)
        .takeScreenshot()
        .then(function (data) {
            screen_saver(data, "screen.tools.png");
        })
        .then(function(){
            return browser.quit();
        })
        .done()
}

module.exports.run = run;