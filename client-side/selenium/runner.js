/**
 * Responsible for running the test suite using a single session.
 * @type {*}
 */

var glob = require("glob");
var _ = require("underscore");


var mocha = require("mocha");

glob("test.*.js", null, function(err, files){

    _.each(files, function(filer){
        var test_module = require("./" + filer);
        test_module.run();
    });

})