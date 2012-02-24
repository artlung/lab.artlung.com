/**
 * @class Ext.data.Writer
 * @extends Object
 * Base Writer class. Just strips out the data from the model and returns it as a JavaScript
 * object. Used in the MemoryProxy, but in other cases a Writer subclass should be used.
 * @constructor
 * @param {Object} config Optional config object
 */
Ext.data.Writer = Ext.extend(Object, {

    constructor: function(config) {
        Ext.apply(this, config);
    },

    /**
     * Prepares a Proxy's Ext.data.Request object
     * @param {Ext.data.Request} request The request object
     * @return {Ext.data.Request} The modified request object
     */
    write: function(request) {
        return request;
    }
});

Ext.data.WriterMgr.registerType('base', Ext.data.Writer);