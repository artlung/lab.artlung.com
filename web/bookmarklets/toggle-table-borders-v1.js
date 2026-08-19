var i = 0;
if (document.styleSheets.length > 0) {
    cs = !document.styleSheets[0].disabled;
    for (i = 0; i < document.styleSheets.length; i++) {
        document.styleSheets[i].disabled = cs;
    }
}
void (cs = true);