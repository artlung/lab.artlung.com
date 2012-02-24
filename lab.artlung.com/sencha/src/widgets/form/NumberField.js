/**
 * @class Ext.form.NumberField
 * @extends Ext.form.Field
 * @xtype numberfield
 * Wraps an HTML5 number field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.NumberField = Ext.extend(Ext.form.Field, {
    inputType: 'number',
    ui: 'number',
    maskField: true
});

Ext.reg('numberfield', Ext.form.NumberField);
