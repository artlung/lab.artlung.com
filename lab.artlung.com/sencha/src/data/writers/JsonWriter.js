/**
 * @class Ext.data.JsonWriter
 * @extends Ext.data.Writer
 * Writer that outputs model data in JSON format
 */
Ext.data.JsonWriter = Ext.extend(Ext.data.Writer, {
    /**
     * @cfg {String} root The key under which the records in this Writer will be placed. Defaults to 'records'.
     * Example generated request:
<pre><code>
{'records': [{name: 'my record'}, {name: 'another record'}]}
</code></pre>
     */
    root: 'records',

    //inherit docs
    write: function(request) {
        return this.writeRecords(request);
    },

    //inherit docs
    writeRecords: function(request) {
        var operation = request.operation,
            action    = operation.action,
            records   = operation.records || [],
            data      = [];

        for (var i = 0, length = records.length; i < length; i++) {
            data.push(records[i].data);
        }

        if (this.encode === true) {
            data = Ext.encode(data);
        }

        request.jsonData = request.jsonData || {};
        request.jsonData[this.root] = data;

        return request;
    }
});

Ext.data.WriterMgr.registerType('json', Ext.data.JsonWriter);
