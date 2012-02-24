/**
 * @class Ext.form.PasswordField
 * @extends Ext.form.Field
 * @xtype passwordfield
 * Wraps an HTML5 password field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.PasswordField = Ext.extend(Ext.form.Field, {
    maskField: true,
    inputType: 'password'
});

Ext.reg('passwordfield', Ext.form.PasswordField);
