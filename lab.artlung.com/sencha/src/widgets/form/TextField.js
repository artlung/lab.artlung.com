/**
 * @class Ext.form.TextField
 * @extends Ext.form.Field
 * @xtype textfield
 * Simple text input class
 */
Ext.form.TextField = Ext.extend(Ext.form.Field, {
    type: 'text',
    maskField: true
});

Ext.reg('textfield', Ext.form.TextField);
