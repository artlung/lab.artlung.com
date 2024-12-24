// Until Chromium supports getting custom properties via getComputedStyle
// https://issues.chromium.org/issues/41451306?pli=1
// Maybe we can do a workaround by fetching and then inspecting
// everything referred to in a link tag or style tag, then parsing all the CSS?
// This is a terrible idea.
var links = document.getElementsByTagName('link');

for (var i = 0; i < links.length; i++) {
    var rel_is_stylesheet = links[i].rel === 'stylesheet';
    var type_is_css = links[i].type === 'text/css';
    var href_exists = links[i].href;
    var href_contains_css = href_exists && links[i].href.indexOf('css') !== -1;
    if (rel_is_stylesheet || type_is_css || href_contains_css) {
        fetch(links[i].href).then(function (response) {
            return response.text();
        }).then(function (text) {
            console.log(text);
            // TODO find all the custom properties in the CSS and expose
        });
    }
}

var style_tags = document.getElementsByTagName('style');
for (var i = 0; i < style_tags.length; i++) {
    console.log(style_tags[i].textContent);
    // TODO find all the custom properties in the CSS and expose
}
