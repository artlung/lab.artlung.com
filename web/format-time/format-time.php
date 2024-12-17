<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Date Formatting')

?>


    <p class="date-attribution">
        Created: June 1998; modified: August 1999; Updated October 2002
    </p>

    <h1>JavaScript Date Formatting Demo</h1>

<?php ob_start(); ?>
    <script type="text/javascript">
        /* JavaScript originally by David Turley <dturley@pobox.com> */
        function makeArray() {
            for (i = 0; i < makeArray.arguments.length; i++)
                this[i] = makeArray.arguments[i];
        }

        function getFullYear(d) {
            var y = d.getYear();
            if (y < 1000) {
                y += 1900
            }

            return y;
        }

        var days = new makeArray("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        var months = new makeArray("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

        function format_time(t) {
            var Day = t.getDay();
            var Date = t.getDate();
            var Month = t.getMonth();
            var Year = getFullYear(t);
            timeString = "";
            timeString += days[Day];
            timeString += " ";
            timeString += months[Month];
            timeString += " ";
            timeString += Date;
            timeString += ", ";
            timeString += Year;
            return timeString;
        }
    </script>
    <script type="text/javascript">
        m = new Date(document.lastModified);
        d = new Date();
        document.write("<p>The normal <i>document.lastModified\</i> string: " + m + "<br>");
        document.write("The modification date after formatting: " + format_time(m) + "</p>");
    </script>

<?php $html = ob_get_clean(); ?>
<?php print $html; ?>


    <h2>Source Code</h2>
<?php
$lab->printCodeBlock($html);
?>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
