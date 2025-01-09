var els = document.getElementsByTagName('link');
feeds = '';
for (i = 0; i < els.length; i++) {
    ty = (els[i].getAttribute('type') || '').toLowerCase();
    url = els[i].getAttribute('href');
    if (url && (ty == 'application/rss+xml' || ty == 'text/xml' || ty == 'text/x-opml')) {
        if (window.confirm('Go to the RSS Feed: ' + url + '?')) {
            feeds += url + ',';
        }
    }
}

if (!feeds) {
    window.alert('No subscriptions made');
} else {
    feeds = feeds.substr(0, feeds.length - 1);
    window.location = feeds;
}