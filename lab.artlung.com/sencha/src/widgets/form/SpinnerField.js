/**
 * @class Ext.form.SpinnerField
 * @extends Ext.form.Field
 * @xtype spinnerfield
 * Wraps an HTML5 number field. See {@link Ext.form.FormPanel FormPanel} for example usage.
 */
Ext.form.SpinnerField = Ext.extend(Ext.form.NumberField, {

    cmpCls: 'x-spinner',

    /**
     * @cfg {Number} minValue The minimum allowed value (defaults to Number.NEGATIVE_INFINITY)
     */
    minValue: Number.NEGATIVE_INFINITY,
    /**
     * @cfg {Number} maxValue The maximum allowed value (defaults to Number.MAX_VALUE)
     */
    maxValue: Number.MAX_VALUE,
    /**
     * @cfg {Number} incrementValue Value that is added or subtracted from the current value when a spinner is used
     */
    incrementValue: 1,
    /**
     * @cfg {Boolean} accelerate True if autorepeating should start slowly and accelerate.
     */
    accelerate: true,
    /**
     * @cfg {Number} defaultValue Value for the spinnerField
     */
    defaultValue: 0,

    cycle: false,
    disableInput: false,

    renderTpl: new Ext.XTemplate(
    '<div <tpl if="id">id="{id}" </tpl>class="{baseCls} {cls} {cmpCls}<tpl if="ui"> {uiBase}-{ui}</tpl> <tpl if="label">{labelAlign}</tpl>" <tpl if="style"> style="{style}"</tpl>>',
        '<tpl if="label"><label <tpl if="fieldEl">for="{inputId}"</tpl>>{label}</label></tpl>',
        '<tpl if="fieldEl">',
            '<div class="{cmpCls}-body">',
                '<div class="{cmpCls}-down"><span>-</span></div>',
                '<input id="{inputId}" type="number" name="{name}" class="{fieldCls}"',
                    '<tpl if="disableInput">disabled </tpl>',
                    '<tpl if="tabIndex">tabIndex="{tabIndex}" </tpl>',
                    '<tpl if="placeholder">placeholder="{placeholder}" </tpl>',
                    '<tpl if="style">style="{style}" </tpl>',
                    '<tpl if="autocomplete">autocomplete="{autocomplete}" </tpl>',
                '/>',
                '<div class="{cmpCls}-up"><span>+</span></div>',
            '</div>',
        '</tpl>',
        '<div class="x-field-mask"></div>',
    '</div>', { compiled: true }
    ),

    // @private
    onRender: function(ct, position) {
        this.renderData.disableInput = this.disableInput;

        Ext.applyIf(this.renderSelectors, {
            spinUpEl: '.x-spinner-up',
            spinDownEl: '.x-spinner-down'
        });

        Ext.form.SpinnerField.superclass.onRender.call(this, ct, position);

        this.downRepeater = new Ext.util.TapRepeater(this.spinDownEl, {
            accelerate: this.accelerate
        });
        this.upRepeater = new Ext.util.TapRepeater(this.spinUpEl, {
            accelerate: this.accelerate
        });

        this.mon(this.downRepeater, {
            tap: this.onSpinDown,
            touchstart: this.onTouchStart,
            touchend: this.onTouchEnd,
            preventDefault: true,
            scope: this
        });

        this.mon(this.upRepeater, {
            tap: this.onSpinUp,
            touchstart: this.onTouchStart,
            touchend: this.onTouchEnd,
            preventDefault: true,
            scope: this
        });
    },

    // @private
    onSpinDown: function() {
        if (!this.disabled) {
            this.spin(true);
        }
    },

    // @private
    onSpinUp: function() {
        if (!this.disabled) {
            this.spin(false);
        }
    },

    // @private
    onTouchStart : function(btn) {
        btn.el.addClass('x-button-pressed');
    },

    // @private
    onTouchEnd : function(btn) {
        btn.el.removeClass('x-button-pressed');
    },

    // @private
    spin: function(down) {
        var value = parseFloat(this.getValue()),
            incr = this.incrementValue;

        down ? value -= incr: value += incr;

        value = (isNaN(value)) ? this.defaultValue: value;
        if (value < this.minValue) {
            value = this.cycle ? this.maxValue : this.minValue;
        }
        else if (value > this.maxValue) {
            value = this.cycle ? this.minValue : this.maxValue;
        }
        this.setValue(value);
    },

    // @private
    destroy : function() {
        Ext.destroy(this.downRepeater, this.upRepeater);
        Ext.form.SpinnerField.superclass.destroy.call(this, arguments);
    }
});

Ext.reg('spinnerfield', Ext.form.SpinnerField);
