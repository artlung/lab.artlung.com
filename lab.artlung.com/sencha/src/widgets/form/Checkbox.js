/**
 * @class Ext.form.Checkbox
 * @extends Ext.form.Field
 * @xtype checkbox
 * Simple Checkbox class. Can be used as a direct replacement for traditional checkbox fields.
 * @constructor
 * @param {Object} config Optional config object
 */
Ext.form.Checkbox = Ext.extend(Ext.form.Field, {
    inputType: 'checkbox',
    ui: 'checkbox',

    /**
     * @cfg {Boolean} checked <tt>true</tt> if the checkbox should render initially checked (defaults to <tt>false</tt>)
     */
    checked : false,

    // @private
    constructor: function(config) {
        this.addEvents(
            /**
             * @event check
             * Fires when the checkbox is checked or unchecked.
             * @param {Ext.form.Checkbox} this This checkbox
             * @param {Boolean} checked The new checked value
             */
            'check'
        );

        Ext.form.Checkbox.superclass.constructor.call(this, config);
    },

    // @private
    onRender : function(ct, position) {
        Ext.form.Checkbox.superclass.onRender.call(this, ct, position);

        if (this.checked) {
            this.setValue(true);
        } else {
            this.checked = this.fieldEl.dom.checked;
        }
    },

    /**
     * Returns the checked state of the checkbox.
     * @return {Boolean} True if checked, else false
     */
    getValue : function(){
        if (this.rendered) {
            return this.fieldEl.dom.checked;
        }
        return this.checked;
    },

    /**
     * Sets the checked state of the checkbox and fires the 'check' event.
     * @param {Boolean/String} checked The following values will check the checkbox:
     * <code>true, 'true', '1', or 'on'</code>. Any other value will uncheck the checkbox.
     */
    setValue : function(v) {
        Ext.form.Checkbox.superclass.setValue.apply(this, arguments);

        var checked = this.checked;
        this.checked = (v === true || v === 'true' || v == '1' || String(v).toLowerCase() == 'on');

        if (this.rendered) {
            this.fieldEl.dom.checked = this.checked;
            this.fieldEl.dom.defaultChecked = this.checked;
        }

        if (checked != this.checked) {
            this.fireEvent('check', this, this.checked);
        }
    }
});

Ext.reg('checkbox', Ext.form.Checkbox);
