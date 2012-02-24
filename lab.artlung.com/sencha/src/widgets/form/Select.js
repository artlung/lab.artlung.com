/**
 * @class Ext.form.Select
 * @extends Ext.form.Field
 * @xtype select
 * Simple Select field wrapper. Example usage:
<pre><code>
new Ext.form.Select({
    options: [
        {text: 'First Option',  value: 'first'},
        {text: 'Second Option', value: 'second'},
        {text: 'Third Option',  value: 'third'},
    ]
});
</code></pre>
 */
Ext.form.Select = Ext.extend(Ext.form.Field, {
    ui: 'select',

    valueField: 'value',
    displayField: 'text',

    // @private
    initComponent: function() {
        this.renderTpl = new Ext.XTemplate(
            '<div <tpl if="id">id="{id}" </tpl>class="{baseCls} {cls} {cmpCls}<tpl if="ui"> {uiBase}-{ui}</tpl> <tpl if="label">{labelAlign}</tpl>" <tpl if="style"> style="{style}"</tpl>>',
                '<tpl if="label"><label <tpl if="fieldEl">for="{inputId}"</tpl>>{label}</label></tpl>',
                '<tpl if="fieldEl"><select id="{inputId}" type="{type}" name="{name}" class="{fieldCls}"',
                    '<tpl if="tabIndex">tabIndex="{tabIndex}" </tpl>',
                    '<tpl if="placeholder">placeholder="{placeholder}" </tpl>',
                    '<tpl if="style">style="{style}" </tpl>',
                    '<tpl if="autocomplete">autocomplete="false" </tpl>',
                '>',
                '<tpl for="options">',
                    '<option value="{' + this.valueField + '}">{' + this.displayField + '}</option>',
                '</tpl>',
                '</select></tpl>',
            '</div>',
            { compiled: true }
        );

        Ext.form.Select.superclass.initComponent.call(this);
    },

    // @private
    onRender : function(ct, position) {
        Ext.applyIf(this.renderData, {
            options: this.options
        });

        Ext.form.Select.superclass.onRender.call(this, ct, position);
    }
});

Ext.reg('select', Ext.form.Select);
