require.config({
  baseUrl: '/siv-v3/app',
  paths: {
    'jquery' : 'vendor/jquery',
    'mocha' : '/twine-jenkins-scripts/client-side/node_modules/mocha/mocha',
    'chai' : '/twine-jenkins-scripts/client-side/node_modules/chai/chai',
    'chai-jquery' : '/twine-jenkins-scripts/client-side/node_modules/chai-jquery/chai-jquery',
    'assert': '/twine-jenkins-scripts/client-side/node_modules/assert/assert',
    'util': '/twine-jenkins-scripts/client-side/node_modules/util/util',
    jqueryui: "vendor/jquery-ui-1.9.1.custom.min",
    bootstrap: "vendor/bootstrap.min",
    underscore: "vendor/underscore-min",
    moment: "vendor/moment",
    numeral: "vendor/numeral",
    d3: 'vendor/d3.v3.min',
    hexbin: 'vendor/d3.hexbin.v0.min',
    leaflet: 'vendor/leaflet/leaflet',
    twineBaseMap: 'plugins/leaflet/leaflet.twinebasemap',
    twineGeolevels: 'plugins/leaflet/leaflet.twinegeolevels',
    twineLocations: 'plugins/leaflet/leaflet.twinelocations',
    twinePoint: 'plugins/leaflet/leaflet.twinepoint',
    twineSelection: 'plugins/leaflet/leaflet.twineselection',
    twineHexMap: 'plugins/leaflet/leaflet.twinehexmap',
    markercluster: 'vendor/leaflet/leaflet.markercluster-src',
    draw: 'vendor/leaflet/leaflet.draw',
    heatmap: 'vendor/leaflet/leaflet.heatmap',
    twineHeatMap: 'plugins/leaflet/leaflet.twineheatmap',
    i18next: "vendor/i18next.amd-1.7.2.min",
    validate: "vendor/validate",
    redactor: "vendor/redactor/redactor.min",
    datetimepicker: "vendor/jquery.datetimepicker.min",
    async: "vendor/async",
    validator: "vendor/validator.min"
  },
  shim: {
    jquery: {
        exports: "$"
    },
    datetimepicker: {
        deps: ["jquery", "jqueryui"]
    },
    jqueryui: {
        deps: ['jquery']
    },
    validate: {
        deps: ['jquery']
    },
    underscore: {
        exports: "_"
    },
    redactor: {
        deps: ['jquery']
    },
    bootstrap: {
        deps: ["jquery"]
    },
    i18next: {
        exports: "i18n"
    },
    d3: {
        exports: 'd3'
    },
    hexbin: {
        deps: ['d3']
    },
    leaflet: {
        exports: 'L'
    },
    twineBaseMap: {
        deps: ['leaflet']
    },
    twinePoint: {
        deps: ['leaflet']
    },
    twineGeolevels: {
        deps: ['leaflet']
    },
    twineLocations: {
        deps: ['leaflet']
    },
    twineSelection: {
        deps: ['d3', 'leaflet']
    },
    twineHexLayer: {
        deps: ['d3', 'hexbin', 'leaflet']
    },
    markercluster: {
        deps: ['leaflet']
    },
    draw: {
        deps: ['leaflet']
    },
    heatmap: {
        deps: ['leaflet']
    },
    twineHeatMap: {
        deps: ['leaflet']
    },
    validator: {
        exports: "Validator"
    },
    'chai-jquery': ['jquery', 'chai']
  },
  urlArgs: 'bust=' + (new Date()).getTime()
});

require(['require', 'chai', 'chai-jquery', 'mocha', 'jquery'], function(require, chai, chaiJquery){

  // Chai
  var should = chai.should();
  chai.use(chaiJquery);

  /*globals mocha */
  mocha.setup('bdd');
  mocha.checkLeaks();

  require(
    [
      'tests/test.Twine',
      'tests/test.Twine.utils',
      'tests/test.IndicatorSelector'
    ], function(require) {
      if (window.mochaPhantomJS) {
        mochaPhantomJS.run();
      } else {
        mocha.run();
      }
    }
  );

});
