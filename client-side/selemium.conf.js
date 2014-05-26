// Karma configuration
// Generated on Mon May 26 2014 12:31:41 GMT+0000 (UTC)
fs = require("fs");


module.exports = function (config) {

    if(!process.env.SAUCE_USERNAME){
        if(!fs.existsSync('sauce.json')){
            console.log("Create a sauce.json file with your Sauce Labs credentials in it.");
            process.exit();
        } else {
            process.env.SAUCE_USERNAME = require("./sauce").username;
            process.env.SAUCE_ACCESS_KEY = require("./sauce").accessKey;
        }
    }

    var customLaunchers = {
        SL_Chrome: {
            base: 'SauceLabs',
            browserName: 'chrome'
        }
    };

    config.set({

        // base path that will be used to resolve all patterns (eg. files, exclude)
        basePath: '',


        // frameworks to use
        // available frameworks: https://npmjs.org/browse/keyword/karma-adapter
        frameworks: ['mocha', 'requirejs', "chai"],


        // list of files / patterns to load in the browser
        files: [
            'test-main.js',
            {pattern: 'selenium/test.*.js', included: false}
        ],


        // list of files to exclude
        exclude: [

        ],


        // preprocess matching files before serving them to the browser
        // available preprocessors: https://npmjs.org/browse/keyword/karma-preprocessor
        preprocessors: {

        },

        reporters: ['progress'],


        // web server port
        port: 9876,


        // enable / disable colors in the output (reporters and logs)
        colors: true,
        autoWatch: true,


        logLevel: config.LOG_INFO,
        sauceLabs: {
            testName: "Web Application Selenium Tests",
            recordScreenshots: false,
            username: "twineapp",
            accessKey: "716705b5-53fe-4345-b9b7-ac16526fcd70",
            startConnect: true,
            recordVideo: false
        },
        captureTimeout: 120000,
        customLaunchers: customLaunchers,
        browsers: Object.keys(customLaunchers),
        singleRun: true
    });
};
