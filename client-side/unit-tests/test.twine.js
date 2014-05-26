define([
    "Twine",
    "plugins/Config",
    "plugins/Language",
    "chai"
], function(Twine) {

    describe("Twine", function(){
        describe("Twine Namespaces", function(){
            it("window should have property 'Twine'", function(){
                window.should.have.property("Twine");
            });

            it("should have property 'Config'", function(){
                Twine.should.have.property("Config");
            });

            it("Should have property 'Data'", function(){
                Twine.should.have.property("Data");
            });

            it("Should have property 'ui'", function(){
                Twine.should.have.property('ui');
            });

            it("Should have property 'State'", function(){
                Twine.should.have.property("State");
            });

            it("Should have property 'data'", function(){
                Twine.should.have.property("data");
            });

            it("Should have property 'utils'", function(){
                Twine.should.have.property("utils");
            });

        });

    });

    describe("Twine.Config", function(){
        describe("Config Parameters", function(){
            it("Should exist in Twine namespace", function(){
                Twine.should.have.property("Config");
            });

            it("Should have explore configuration.", function(){
                Twine.Config.should.have.property("locations");
            });

            it("Should have base Configuration", function(){
                Twine.Config.should.have.property("app_path");
            })
        })
    });

});
