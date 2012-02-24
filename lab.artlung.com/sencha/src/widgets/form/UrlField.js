/**
 * @class Ext.form.UrlField
 * @extends Ext.form.TextField
 * @xtype urlfield
 * Wraps an HTML5 url field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.UrlField = Ext.extend(Ext.form.TextField, {
    inputType: 'url'
});

Ext.reg('urlfield', Ext.form.UrlField);
