<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
Permutations of characters
'
);

?>
<p class="date-attribution">Created February 2006</p>
    <h1>Permutations of a set of characters</h1>

    <p>I forget why I did this, but given a set of characters, how many combinations of all those characters are there?
        This is code to figure it out for 3 character positions.</p>

<?php
$legal_chars = "ABCDEFGHIJ";

for ($i = 0; $i < strlen($legal_chars); $i++) {
    $char_arr[] = $legal_chars{$i};
}

foreach ($char_arr as $x) {
    foreach ($char_arr as $y) {
        foreach ($char_arr as $z) {
            $permutate_arr[] = $x . $y . $z;
        }
    }
}

print "<p style=\"font-family: courier, 'courier new',fixed-width;\">";
print "Number of permutations: " . sizeof($permutate_arr) . " 3^" . strlen($legal_chars);
print "</p>";

print "<p style=\"font-family: courier, 'courier new',fixed-width;\">";
foreach ($permutate_arr as $a) {
    print $a . " ";
    flush();
}
print "</p>";
?>

    <h2>Source</h2>

    <pre>
&lt;?php
    $legal_chars = "ABCDEFGH";

    for($i=0;$i&lt;strlen($legal_chars);$i++)
        $char_arr[] = $legal_chars{$i};
    
    foreach ($char_arr as $x)
      foreach ($char_arr as $y)
        foreach ($char_arr as $z)
          $permutate_arr[] = $x . $y . $z;

    print "&lt;p style=\"font-family: courier, 'courier new',fixed-width;\"&gt;";
    print "Number of permutations: " . sizeof($permutate_arr) . " 3^" . strlen($legal_chars);
    print "&lt;/p&gt;";

    print "&lt;p style=\"font-family: courier, 'courier new',fixed-width;\"&gt;";
    foreach ($permutate_arr as $a)
    {
        print $a . " ";
        flush();
    }
    print "&lt;/p&gt;";
?&gt;
</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);






