/**
 * @class Ext.data.MemoryProxy
 * @extends Ext.data.ClientProxy
 * @ignore
 * In-memory proxy. This proxy simply uses a local variable for data storage/retrieval, so its contents are
 * lost on every page refresh.
 */
Ext.data.MemoryProxy = Ext.extend(Ext.data.ClientProxy, {
    constructor: function(config) {
        Ext.data.MemoryProxy.superclass.constructor.call(this, config);

        this.data = {};
    }
});