document.addEventListener('DOMContentLoaded', function () {
    var sampleText = 'Artlung Rosetta with Vanilla JavaScript with no library.';
    document.querySelectorAll("section ul li:nth-child(4n-3)").forEach(function (el) {
        el.classList.add("start");
    })
    document.querySelectorAll("section ul li:nth-child(4n)").forEach(function (el) {
        el.classList.add("end");
    });
    document.querySelector('h1').classList.add('active');
    document.querySelectorAll('p').forEach(function (el) {
        el.classList.add('bad');
    });
    var testIdentifier = document.getElementById('testIdentifier');
    testIdentifier.style.border = '1px solid #000';
    testIdentifier.style.backgroundColor = '#ccc';
    testIdentifier.textContent = sampleText;
    document.querySelectorAll('#interactionExperiments button').forEach(function (button) {
        button.addEventListener('click', function () {
            this.style.display = 'none';
            return false;
        });
    });
    document.querySelectorAll('#interactionExperiments a').forEach(function (link) {
        link.addEventListener('click', function () {
            var parent = this.parentElement;
            // show all the buttons that are siblings of this link
            Array.from(parent.children).forEach(function (sibling) {
                if (sibling.tagName === 'BUTTON') {
                    sibling.style.display = 'inline-block';
                }
            });
            return false;
        });
    });
    document.querySelectorAll('#nav a:has(img)').forEach(function (link) {
        link.addEventListener('mouseover', function () {
            var img = this.querySelector('img');
            if (img) {
                img.src = img.src.replace('-off', '-over');
            }
        });
        link.addEventListener('mouseout', function () {
            var img = this.querySelector('img');
            if (img) {
                img.src = img.src.replace('-over', '-off');
            }
        });
    });
    document.getElementById('addRandomString').addEventListener('click', function () {
        if (Rosetta.mayIncrement()) {
            this.insertAdjacentHTML('afterend', ' World' + Rosetta.getIndex());
            Rosetta.increment();
        }
        return false;
    });
    document.querySelectorAll('#loginArea h2').forEach(function (header) {
        header.addEventListener('click', function () {
            var span = this.querySelector('span');
            var loginForm = document.getElementById('loginForm');
            if (loginForm.style.display === 'none' || loginForm.style.display === '') {
                span.textContent = '-';
                loginForm.style.display = 'block';
            } else {
                span.textContent = '+';
                loginForm.style.display = 'none';
            }
        });
    });
    document.getElementById('ajaxloadHtml').addEventListener('click', function () {
        fetch('ajax/chunk.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('ajaxOutput').innerHTML = data;
            });
        return false;
    });

    document.getElementById('ajaxloadText').addEventListener('click', function () {
        fetch('ajax/chunk.txt')
            .then(response => response.text())
            .then(data => {
                document.getElementById('ajaxOutput').textContent = data;
            });
        return false;
    });
    document.getElementById('ajaxloadJson').addEventListener('click', function () {
        fetch('ajax/chunk.json')
            .then(response => response.json())
            .then(json => {
                var textVal = JSON.stringify(json) + '<br />' + json.txt;
                document.getElementById('ajaxOutput').innerHTML = textVal;
            });
        return false;
    });
    document.getElementById('ajaxloadXml').addEventListener('click', function () {
        fetch('ajax/chunk.xml')
            .then(response => response.text())
            .then(xmlString => {
                var parser = new DOMParser();
                var xml = parser.parseFromString(xmlString, 'application/xml');
                var textNode = xml.querySelector('text').textContent;
                document.getElementById('ajaxOutput').textContent = textNode;
            });
        return false;
    });
    var sourceCode = document.querySelectorAll('script')[4].textContent;
    document.getElementById('code').textContent = sourceCode;
});