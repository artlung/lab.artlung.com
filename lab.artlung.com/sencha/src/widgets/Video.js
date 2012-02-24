/**
 * @class Ext.Video
 * @extends Ext.Panel
 *
 * Provides a simple Container for HTML5 Video.
 *
 * <pre><code>
var pnl = new Ext.Panel({
    fullscreen: true,
    items: [{
        floating: true,
        x: 600,
        y: 300,
        width: 175,
        height: 98,
        xtype: 'video',
        url: "porsche911.mov",
        poster: 'porsche.png'
    }]
});</code></pre>
 * @xtype video
 */
Ext.Video = Ext.extend(Ext.Container, {
    /**
     * @constructor
     * @param {Object} config
     * Create a new Video Panel.
     */

    /**
     * @cfg {String} url
     * Location of the video to play. This should be in H.264 format and in a
     * .mov file format.
     */
    url: '',

    /**
     * @cfg {String} poster
     * Location of a poster image to be shown before showing the video.
     */
    poster: '',

    /**
     * @cfg {Boolean} enableControls
     * Set this to false to turn off the native controls
     * the video. (Defaults to true)
     */
    enableControls: true,
    cmpCls: 'x-video',

    autoPlay: false,
    autoPause: true,

    afterRender : function() {
        var cfg = {
            tag: 'video',
            src: this.src || this.url,
            preload: 'true',
            width: '100%',
            height: '100%'
        };
        if (this.loop) {
            cfg.loop = "loop";
        }
        if (this.enableControls) {
            cfg.controls = 'controls';
        }
        this.video = this.el.createChild(cfg);
        this.video.hide();

        if (this.poster) {
            this.ghost = this.el.createChild({
                cls: 'x-video-ghost',
                style: 'width: 100%; height: 100%; background: #000 url(' + this.poster + ') center center no-repeat; -webkit-background-size: 100% auto;'
            });
            this.ghost.on('tap', function() {
                this.video.show();
                this.ghost.hide();
                this.video.dom.play();
            }, this);
        }

        this.on('activate', function(){
            if (this.autoPlay) {
                this.play();
            }
        });

        this.on('deactivate', function(){
            if (this.autoPause) {
                this.pause();
            }
        })

        Ext.Video.superclass.afterRender.call(this);
    },

    play : function() {
        this.video.dom.play();
    },

    pause : function() {
        this.video.dom.pause();
    }
});

Ext.reg('video', Ext.Video);