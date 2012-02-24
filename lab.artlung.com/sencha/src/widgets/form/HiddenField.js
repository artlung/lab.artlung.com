/**
 * @class Ext.form.HiddenField
 * @extends Ext.form.Field
 * @xtype hidden
 * Wraps a hidden field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.HiddenField = Ext.extend(Ext.form.Field, {
    inputType: 'hidden',
    ui: 'hidden',
    autoCreateField: false
});

Ext.reg('hidden', Ext.form.HiddenField);
