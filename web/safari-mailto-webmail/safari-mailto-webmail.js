let links = document.querySelectorAll('a[href^="m"], a[href^="M"]');
let key, value, i, j, params, param, parts;
for (i = 0; i < links.length; i++) {
    if (links[i].getAttribute('href').toLowerCase().indexOf('mailto:') !== 0) {
        continue;
    }
    let link = links[i];
    // mailto:someone@example.com?subject=SUBJECT&body=BODY&bcc=someone.else@example.com
    // https://mail.google.com/mail/?view=cm&fs=1&to=someone@example.com&su=SUBJECT&body=BODY&bcc=someone.else@example.com
    const gmail_url = 'https://mail.google.com/mail/';
    let gmail_url_parts = {
        'view': 'cm',
        'fs': 1,
        'to': '',
        'su': '',
        'body': '',
        'bcc': ''
    };
    const gmail_parameter_mapping = {
        'to': 'to',
        'subject': 'su',
        'cc': 'cc',
        'bcc': 'bcc',
        'body': 'body'
    };

    let full_href = link.getAttribute('href');
    let href = full_href.replace('mailto:', '');
    let parts = href.split('?');
    gmail_url_parts['to'] = parts[0];
    if (parts.length > 1) {
        let params = parts[1].split('&');
        for (j = 0; j < params.length; j++) {
            param = params[j].split('=');
            if (param.length === 2) {
                key = decodeURIComponent(param[0]);
                value = decodeURIComponent(param[1]);
                if (gmail_parameter_mapping[key]) {
                    gmail_url_parts[gmail_parameter_mapping[key]] = value;
                } else {
                    gmail_url_parts[key] = value;
                }
            }
        }
    }
    // Construct the new href
    let newHref = gmail_url + '?';
    for (key in gmail_url_parts) {
        if (gmail_url_parts[key] !== '') {
            newHref += key + '=' + encodeURIComponent(gmail_url_parts[key]) + '&';
        }
    }
    newHref = newHref.slice(0, -1); // Remove last '&'
    link.setAttribute('href', newHref);
    const style = 'box-shadow: 0 0.1rem, 0 -0.1rem;';
    if (link.getAttribute('style')) {
        link.setAttribute('style', link.getAttribute('style') + ';' + style);
    } else {
        link.setAttribute('style', style);
    }
}