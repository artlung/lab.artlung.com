<h1>What's in the Navigator object?</h1>

<script type="text/javascript">
    document.write('<pre>');
    for (var i in navigator) {
        document.writeln('navigator.' + i + ' = ' + navigator[i]);
    }
    document.write('</pre>');
</script>
