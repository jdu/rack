/**
 * Responsible for running the test suite using a single session.
 * @type {*}
 */

var glob = require("glob");
var base = require("./base");

var mocha = require("mocha");

glob("test.*.js", null, function(err, files){
    console.log(files);
    for(var i = 0; i < files.length-1; i++){
        require("./" + files[i]);
    }

    mocha.run();
})