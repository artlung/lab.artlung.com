/**
 * @class Ext.data.ClientProxy
 * @extends Ext.data.Proxy
 * Base class for any client-side storage. Used as a superclass for Memory and ClientStorage proxies.
 * Do not use directly, use one of the subclasses instead.
 */
Ext.data.ClientProxy = Ext.extend(Ext.data.Proxy, {
    /**
     * Abstract function that must be implemented by each ClientProxy subclass. This should purge all record data
     * from the client side storage, as well as removing any supporting data (such as lists of record IDs)
     */
    clear: function() {
        throw new Error("The Ext.data.ClientProxy subclass that you are using has not defined a 'clear' function. See src/data/ClientProxy.js for details.");
    }
});