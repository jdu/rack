define([
    "Twine",
    "chai"
], function(Twine, chai) {

    var assert = chai.assert;

    describe("Twine", function(){
        describe("Twine Utilities", function(){
            it("should have property 'Config'", function(){
                Twine.should.have.property("utils");
            });

            it("Twine.utils.isNum('test') should return false", function(){
                var test = Twine.utils.isNum("test");
                test.should.equal(false);
            });

            it("Twine.utils.isNum(3) should return true", function(){
                var test = Twine.utils.isNum(3);
                test.should.equal(true);
            });

//            it("Twine.utils.aTo([['test', 'test']]) should return object", function(){
//                var data = [["test","test"]];
//                var expected = {"test": "test"};
//                var result = Twine.utils.aTO(data)
//                result.should.equal(expected);
//            });

            it("Twine.utils.unanimous() should return true", function(){
                var result = Twine.utils.unanimous({
                    "test": true,
                    "test2": true
                });
                result.should.equal(true);
            });

            it("Twine.utils.unanimous() should return false", function(){
                var result = Twine.utils.unanimous({
                    "test": true,
                    "test2": false
                });
                result.should.equal(false);
            });

            it("Twine.utils.keyPath(<path>, <obj>) should return value", function(){
                var obj = {
                    nested: {
                        val: {
                            here: true
                        }
                    }
                };
                var result = Twine.utils.keyPath("nested.val.here", obj);
                result.should.equal(true);
            });
        });

    });



});
