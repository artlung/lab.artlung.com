<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('iTunes Error: "The iTunes Music Library file cannot be read because it does not appear to be a valid library file"');

?>
    <p class="date-attribution">Created January 2003. Updated February 2004.</p>

    <div style="max-width: 80ch">

        <h1>iTunes Error</h1>
        <h2>The iTunes Music Library file cannot be read because it does not appear to be a valid library file</h2>

        <img src="itunes-troubleshoot.gif"
             style="width: 100%;height: auto"
             alt="The iTunes Music Library file cannot be read because it does not appear to be a valid library file">


        <h3>The Problem</h3>

        <p>
            AAAAAAIGH! I had been doing some advanced
            software installs (XDarwin) and did some
            royal system messing-with. Somehow, I managed
            to corrupt my iTunes. Terrible. Awful. I have
            3376 mp3 files in my iTunes. Losing them
            would suck.
        </p>
        <p>
            iTunes would simply not run.
        </p>
        <p>
            *whimper*
        </p>
        <p>
            But wait! Maybe there's a fix. But I couldn't find anything on the web.
        </p>

        <h3>XML Saved My Music</h3>

        <p>
            Here's what I did in my iTunes Folder:<br>
            <img src="itunes-location.gif"
                 alt="Macintosh HD &gt; Users &gt; user &gt; Music &gt; iTunes"
                 style="width: 100%;height: auto"
            >
        </p>
        <p>
            I made a new folder: <b>(Apple-Shift-N)</b>
        </p>
        <p>
            <b>Backup</b>
        </p>
        <p>

            Move:
        </p>
        <blockquote><b>
                iTunes 3 Music Library<br>
                iTunes Music Library.xml<br>
                iTunes Music Library (2)<br>
            </b></blockquote>
        <p>
            ...to the new Backup folder
        </p>
        <p>
            <b>(( NOTE: SEVERAL RESPONSES I HAVE GOTTEN INDICATE REINSTALLING ITUNES IS *NOT* NECESSARY. Consider this
                step optional. If your recovery fails, reconsider adding it back))</b>
            <br>
            Reinstall iTunes afresh &lt;<a href="http://www.apple.com/itunes/">http://www.apple.com/itunes/</a>&gt;
        </p>
        <p>

            Then do:
            <b>File &gt; Import...</b>
        </p>
        <p>
            Import your library back:
            <b>Backup/iTunes Music Library.xml</b>
        </p>
        <p>
            If you have a lot of music, it will take some time
            But this solved my problem. I got my music and my playlists back.
        </p>

        <hr>

        <blockquote style="color: #666; background-color: #FFF;">
            <a href="http://calyxa.pandromeda.com/">Calyxa</a> suggested I show the path to the files, and I did. Thanks
            Calyxa!
        </blockquote>


        <hr>

        <p>
            On 27 November 2003 Mike Conlen sent in this suggestion, for iTunes for Windows:
        </p>

        <blockquote>
            In Windows to do the same look under <br>
            <b>My Documents -&gt; My Music -&gt; iTunes</b><br>
            Move the files <b>iTunes Music Library.xml</b> and <b>iTunes 4 Music Library.itl</b> to the Desktop<br>
            Run iTunes<br>
            File -&gt; Import<br>
            Change file type to XML and select the iTunes Music Library from your desktop<br>
            Wait while the files are imported.
        </blockquote>

        <p><i>Thanks Mike!</i></p>

    </div>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
