var base = require("./base");

describe("Logging into the application", function () {


    it("should be there", function () {
        return assert(true == True);
    });

    it("Should be able to login", function () {
        browser.get("http://192.168.50.4/siv-v3/login.php", 10000);
        browser.elementById("sign-in-user", function(el){
            el.type("mark");
        })
        browser.elementById("sign-inp")
        var result = false;

        return result;
    })
});

