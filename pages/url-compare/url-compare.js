/*jslint sloppy: true, plusplus: true, vars: true, browser: true */
/*global ko, console */
/*member 'URL', 'allKeys', 'applyBindings', 'arrayFirst', 'arrayForEach', 'computed',
'concat', 'couplet', 'createElement', 'domain', 'dupeArray',
'getParameterByKey', 'getParametersByKey', 'getUrlParts', 'hasDoubleValue',
'hasDuplicateParamKey', 'hostname', 'href', 'indexOf', 'key', 'key1', 'key2',
'keysBothPresent', 'length', 'log', 'map', 'masterkey', 'matrix', 'matrixRow',
'observable', 'observableArray', 'parameterArray', 'parameterKeys', 'path',
'pathname', 'protocol', 'push', 'queryParam', 'removeAll', 'search', 'sort',
'split', 'substr', 'toJSON', 'url', 'url_1', 'url_2', 'utils', 'val', 'value1',
'value2', 'valuesBothPresent', 'valuesEqual' */
var sorterFunction = function (a, b) {
    return a.key() > b.key();
};
var uniques = function (arr) {
    var a = [], i, l;
    for (i = 0, l = arr.length; i < l; i++) {
        if (a.indexOf(arr[i]) === -1 && arr[i] !== '') {
            a.push(arr[i]);
        }
    }
    return a;
};
var ABSTRACT = {};

ABSTRACT.queryParam = function (couplet) {
    var here = this;
    here.couplet = ko.observable(couplet);
    here.key = ko.computed(function () {
        return String(here.couplet()).split("=")[0];
    });
    here.val = ko.computed(function () {
        return decodeURIComponent(String(here.couplet()).split("=")[1]);
    });
};
ABSTRACT.matrixRow = function (matrix) {
    var herein = this;
    herein.masterkey = ko.observable(matrix.masterkey);
    herein.key1 = ko.observable(matrix.key1);
    herein.value1 = ko.observable(matrix.value1);
    herein.key2 = ko.observable(matrix.key2);
    herein.value2 = ko.observable(matrix.value2);
    herein.keysBothPresent = ko.computed(function () {
        return herein.key1() && herein.key2();
    });
    herein.valuesBothPresent = ko.computed(function () {
        return herein.value1().length > 0 && herein.value2().length > 0;
    });
    herein.valuesEqual = ko.computed(function () {
        return herein.valuesBothPresent() && ko.toJSON(herein.value1()) === ko.toJSON(herein.value2());
    });
    herein.hasDoubleValue = ko.computed(function () {
        return herein.value1().length > 1 || herein.value2().length > 1;
    });

};
ABSTRACT.URL = function () {
    var that = this;
    that.url = ko.observable("");
    that.protocol = ko.observable();
    that.domain = ko.observable();
    that.path = ko.observable();
    that.hash = ko.observable();
    that.getUrlParts = ko.computed(function () {
        var a = document.createElement('a');
        a.href = String(that.url());
        if (that.url()) {
            that.protocol(a.protocol);
            that.domain(a.hostname); // = ko.observableArray([]);
            that.path(a.pathname); // = ko.observableArray([]);
            that.hash(a.hash);
        } else {
            that.protocol("");
            that.domain(""); // = ko.observableArray([]);
            that.path(""); // = ko.observableArray([]);
            that.hash("");
        }
        //debugger;
    });
    that.parameterArray = ko.computed(function () {
        var a = document.createElement('a');
        a.href = String(that.url());
        var arr = [];
        if (a.search && a.search.length > 1) {
            a.search.substr(1).split("&").map(function (couplet) {
                arr.push(new ABSTRACT.queryParam(couplet));
            });
        }
        arr.sort(sorterFunction);
        return arr;
    });
    that.parameterKeys = ko.computed(function () {
        var keys = [];
        that.parameterArray().map(function (item) {
            keys.push(item.key());
        });
        return keys;
    });

    that.dupeArray = ko.observableArray();
    that.hasDuplicateParamKey = ko.computed(function () {
        var keys = [];
        var dupe = false;
        that.dupeArray.removeAll();
        that.parameterArray().map(function (param) {
            if (keys.indexOf(param.key()) > -1) {
                console.log(param.key());
                that.dupeArray.push(param.key());
                dupe = true;
            } else {
                keys.push(param.key());
            }
        });
        that.dupeArray(uniques(that.dupeArray()));
        return dupe;
    });
    that.getParameterByKey = function (key) {
        var match = ko.utils.arrayFirst(that.parameterArray(), function (item) {
            return item.key() === key; //note the ()
        });
        return match || null;
    };
    that.getParametersByKey = function (key) {
        let out = [];
        ko.utils.arrayForEach(that.parameterArray(), function (item) {
            if (item.key() === key) {
                out.push(item);
            } //note the ()
        });
        return out;
    };

};

var APP = {};
APP.url_1 = new ABSTRACT.URL();
APP.url_2 = new ABSTRACT.URL();
APP.allKeys = ko.computed(function () {
    var keys = APP.url_1.parameterKeys().concat(APP.url_2.parameterKeys());
    return uniques(keys);
});
APP.matrix = ko.computed(function () {
    var matrix = [];
    matrix.push(new ABSTRACT.matrixRow({
        masterkey: null,
        key1: 'protocol',
        value1: [{
            val: APP.url_1.protocol()
        }],
        key2: 'protocol',
        value2: [{
            val: APP.url_2.protocol()
        }]
    }));
    matrix.push(new ABSTRACT.matrixRow({
        masterkey: null,
        key1: 'domain',
        value1: [{
            val: APP.url_1.domain()
        }],
        key2: 'domain',
        value2: [{
            val: APP.url_2.domain()
        }]
    }));
    matrix.push(new ABSTRACT.matrixRow({
        masterkey: null,
        key1: 'path',
        value1: [{
            val: APP.url_1.path()
        }],
        key2: 'path',
        value2: [{
            val: APP.url_2.path()
        }]
    }));
    matrix.push(new ABSTRACT.matrixRow({
        masterkey: null,
        key1: 'hash',
        value1: [{
            val: APP.url_1.hash()
        }],
        key2: 'hash',
        value2: [{
            val: APP.url_2.hash()
        }]
    }));
    APP.allKeys().map(function (elem) {
        matrix.push(new ABSTRACT.matrixRow({
            masterkey: elem,
            key1: APP.url_1.getParameterByKey(elem) ? APP.url_1.getParameterByKey(elem).key() : '',
            value1: APP.url_1.getParametersByKey(elem),
            key2: APP.url_2.getParameterByKey(elem) ? APP.url_2.getParameterByKey(elem).key() : '',
            value2: APP.url_2.getParametersByKey(elem)
        }));
    });
    return matrix;
});

ko.applyBindings(APP);

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('textarea').forEach(function (textarea) {
        textarea.addEventListener('mouseup', function () {
            var other = textarea === document.getElementById('url_1') ? document.getElementById('url_2') : document.getElementById('url_1');

            var thisHeight = textarea.scrollHeight;
            other.style.height = thisHeight + 'px';
        });
    });
});

var savePeriodically = setInterval(function () {
    localStorage.setItem('url_1', APP.url_1.url());
    localStorage.setItem('url_2', APP.url_2.url());
}, 5000);

document.addEventListener('DOMContentLoaded', function () {
    if (localStorage.getItem('url_1')) {
        APP.url_1.url(localStorage.getItem('url_1'));
    }
    if (localStorage.getItem('url_2')) {
        APP.url_2.url(localStorage.getItem('url_2'));
    }
});