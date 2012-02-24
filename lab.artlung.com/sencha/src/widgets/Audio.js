/**
 * @class Ext.Audio
 * @extends Ext.Container
 * @xtype audio
 *
 * Provides a simple container for HTML5 Audio.
 * Recommended types: Uncompressed WAV and AIF audio, MP3 audio, and AAC-LC or HE-AAC audio
 *
 * <pre><code>
var pnl = new Ext.Panel({
    fullscreen: true,
    items: [{
        xtype: 'audio',
        url: "who-goingmobile.mp3"
    }]
});</code></pre>
 */
Ext.Audio = Ext.extend(Ext.Container, {
    /**
     * @constructor
     * @param {Object} config
     * Create a new Audio container.
     */

    /**
     * @cfg {String} url
     * Location of the audio to play.
     */
    url: '',

    /**
     * @cfg {Boolean} showControls
     * Set this to false to turn off the native media controls
     * the audio. (Defaults to true)
     */
    showControls: true,
    cmpCls: 'x-audio',

    /**
     * @cfg {Boolean} autoResume
     * Will automatically start playing the audio when the container is activated.
     * (Defaults to false)
     */
    autoResume: false,

    /**
     * @cfg {Boolean} autoPause
     * Will automatically pause the audio when the container is deactivated.
     * (Defaults to true)
     */
    autoPause: true,

    /**
     * @cfg {Boolean} preload
     * Will begin preloading audio immediately.
     * (Defaults to true)
     */
    preload: true,

    playing: false,

    // @private
    afterRender : function() {
        var cfg;

        if (Ext.platform.isPhone) {
            cfg = {
                tag: 'embed',
                type: 'audio/mpeg',
                target: 'myself',
                src: this.src || this.url,
                controls: 'true'
            };
        } else {
            cfg = {
                tag: 'audio',
                src: this.src || this.url
            };
        }

        if (this.loop) {
            cfg.loop = "loop";
        }

        if (this.showControls) {
            cfg.controls = 'controls';
            cfg.hidden = false;
        } else {
            cfg.hidden = true;
        }

        cfg.preload = this.preload;

        this.audio = this.el.createChild(cfg);

        this.on({
            activate: this.onActivate,
            beforedeactivate: this.onBeforeDeactivate,
            scope: this
        });

        Ext.Audio.superclass.afterRender.call(this);
    },

    // @private
    onActivate : function(){
        if (this.autoResume) {
            this.play();
        }
        if (Ext.platform.isPhone) {
            this.audio.show();
        }
    },

    // @private
    onBeforeDeactivate : function(){
        if (this.autoPause && this.playing) {
            this.pause();
        }
        if (Ext.platform.isPhone) {
            this.audio.hide();
        }
    },

    /**
     * Starts or resumes audio playback
     */
    play : function() {
        this.audio.dom.play();
        this.playing = true;
    },

    /**
     * Pauses audio playback
     */
    pause : function() {
        this.audio.dom.pause();
        this.playing = false;
    },

    /**
     * Toggles the audio playback state
     */
    toggle : function() {
        this[this.playing == true ? 'pause' : 'play']();
    }
});

Ext.reg('audio', Ext.Audio);
