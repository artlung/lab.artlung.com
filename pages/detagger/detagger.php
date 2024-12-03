<?php
require_once __DIR__ . '/../../loader.php';
$lab = new Lab();
$lab->printHeader('Fun Detagger Script');

?>

    <h1>Fun Detagger Script in PHP</h1>

    <h2>Question:</h2>

    <blockquote>
        Anyone know of any free/shareware utility that will strip out
        *all* the tags from HTML *other* than the table structure ?
        <br><br>
        I keep needing to cut stuff out of web pages
        (e.g. my overture results pages)
        and paste them into ms Excel or CSV or basic, basic
        HTML.
    </blockquote>


    <h2>Answer: Sure! With PHP:</h2>
    <pre>
<b>&lt;?php</b>

// a fun detagger script
// lives at: <a href="https://artlung.com/lab/php/detagger/">https://artlung.com/lab/php/detagger/</a>
// created by Joe Crawford
// feel free to use and modify
// December 18 2002
// <a href="https://artlung.com/">https://artlung.com/</a>

// main functions used:
// <a href="http://www.php.net/manual/en/function.strip-tags.php">http://www.php.net/manual/en/function.strip-tags.php</a>
// <a href="http://www.php.net/manual/en/function.file-get-contents.php">http://www.php.net/manual/en/function.file-get-contents.php</a>



/* **************************************** */
// this is a version of file_get_contents()
// that older versions of PHP can understand
// may need to be removed.
<b>function file_get_contents($filename) {
   $fp = @fopen($filename, "r");
   if (!($fp)) {
      return 0;
   }
   while (!feof($fp)) {
      $temp .= fread($fp, 4096);
   }
   return $temp;
}</b>
/* **************************************** */



/* **************************************** */
// what url or file do we want to parse?
<b>$url = "http://www.google.com/";</b>

// what tags do we want to save?
<b>$tags_to_keep = "&lt;table&gt;&lt;tr&gt;&lt;td&gt;&lt;th&gt;";</b>

// grab the url
<b>$string = file_get_contents ($url);</b>

// strip the tags
<b>$cleaned_string = strip_tags ($string, $tags_to_keep);</b>

// print the results
<b>print $cleaned_string;</b>
/* **************************************** */

<b>?&gt;</b>
</pre>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
