<html>
<head>
    <title>window.webkitNotifications</title>
    <style>
        body {
            font-family: 'helvetica neue', helvetica, roboto, arial, sans-serif;
        }

        p {
            padding: 1em;
        }

        p.yes {
            color: green;
            background: lightgreen;
        }

        p.no {
            color: red;
            background: pink;
        }
    </style>
</head>
<body>

<h1>window.webkitNotifications</h1>

<script>
    // check for notifications support
    // you can omit the 'window' keyword

    if (window.webkitNotifications) {
        document.write("<p class=yes>window.webkitNotifications are supported.</p>");
    } else {
        document.write("<p class=no>window.webkitNotifications are not supported for this browser.</p>");
    }
</script>
<noscript>
    <p>JavaScript is currently disabled.</p>
</noscript>

<p><a href="https://www.html5rocks.com/en/tutorials/notifications/quick/">Using the Notifications API</a></p>

</body>
</html>
