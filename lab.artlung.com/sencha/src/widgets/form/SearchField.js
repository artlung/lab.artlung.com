/**
 * @class Ext.form.SearchField
 * @extends Ext.form.Field
 * @xtype searchfield
 * Wraps an HTML5 search field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.SearchField = Ext.extend(Ext.form.Field, {
    inputType: 'search'
});

Ext.reg('searchfield', Ext.form.SearchField);
