<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Bookmarklets, Miscellaneous');

?>

    <h1 class="p-name">Bookmarklets, Miscellaneous</h1>

    <p>To use these, just drag them to your bookmarks file. I can't take credit for these, but I can never find where I
        found them, so I put copies here. <a href="/feedback/">Send me a note</a> if you know from whence they came.
    </p>

    <h2>Toggle Table Borders v.1:</h2>

    <p>
        <a href="javascript:for(i=0;i<document.all.length;i++)if(document.all[i].tagName=='TABLE')void(document.all[i].border=(document.all[i].border=='0')?'1':'0');">TogTable</a>
    </p>

    <h2>ToggleCSS v.1</h2>

    <p>
        <a href="javascript:var%20i=0;if(document.styleSheets.length%3E0){cs=!document.styleSheets[0].disabled;for(i=0;i%3Cdocument.styleSheets.length;i++)%20document.styleSheets[i].disabled=cs;}void(cs=true);">TogCSS</a>
    </p>

    <h2>Toggle Table Borders v.2 (new and improved, submitted by Reid)</h2>

    <p>
        <a href="javascript:for(i=0;i<document.getElementsByTagName('TABLE').length;i++)void(document.getElementsByTagName('TABLE')[i].border=(document.getElementsByTagName('TABLE')[i].border=='0')?'1':'0');">TogTable</a>
    </p>

    <h2>goToRSSFeed</h2>
    <p>
        <a href="javascript:els=document.getElementsByTagName('link');feeds='';for(i=0;i<els.length;i++){ty=(els[i].getAttribute('type')||'').toLowerCase();url=els[i].getAttribute('href');if(url&&(ty=='application/rss+xml'||ty=='text/xml'||ty=='text/x-opml')){if(window.confirm('Go to the RSS Feed: '+url+'?')){feeds+=url+',';}}}if(!feeds){window.alert('No subscriptions made');}else{feeds=feeds.substr(0,feeds.length-1);window.location=feeds;}">goToRSSFeed</a>
    </p>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
