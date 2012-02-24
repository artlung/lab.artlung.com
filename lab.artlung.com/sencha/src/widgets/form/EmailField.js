/**
 * @class Ext.form.EmailField
 * @extends Ext.form.TextField
 * @xtype emailfield
 * Wraps an HTML5 email field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.EmailField = Ext.extend(Ext.form.TextField, {
    inputType: 'email'
});

Ext.reg('emailfield', Ext.form.EmailField);
