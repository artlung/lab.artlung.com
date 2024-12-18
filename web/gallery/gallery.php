<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader(
    '
PHP AutoMagic Gallery Thing
'
);

?>
    <p class="date-attribution">Created April 14 2001</p>
    <h1>PHP AutoMagic Gallery Listing</h1>

    <h2>Why?</h2>

    <p>This is a small project driven by my desire to have a simple page I could drop into a folder full of images and
        get a clean, simple listing of the images, plus links to the images in a way that was somewhat attractive.</p>


    <p>See it in action at <a href="https://artlung.com/images/">https://artlung.com/images/</a></p>

    <p><strong>Feel free to use it --</strong> just copy and paste the source below. use a filename that's the default
        file format that processes php. Usually index.php or index.php3. The script doesn't care either way.</p>

    <p><a href="https://artlung.com/feedback/">What do you think?</a></p>

    <pre class="html">
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
                "https://www.w3.org/TR/REC-html40/loose.dtd"&gt;
&lt;html&gt;
&lt;head&gt;
   &lt;title&gt;a picture is worth a thousand words&lt;/title&gt;
&lt;/head&gt;
&lt;body bgcolor="#ffffff"&gt;
&lt;!-- I'm sorry, I include the height attribute in the table tag.       --&gt;
&lt;!-- it is the only thing which will prevent this page from validating --&gt;
&lt;!-- @ <a href="https://validator.w3.org/">https://validator.w3.org/</a>                                        --&gt;
&lt;table width="100%" height="94%" border="0" cellspacing="0" cellpadding="0"&gt;
   &lt;tr&gt;
      &lt;td align="center"&gt;
<span class="php">&lt;?php
if (!isset($i)) { <span class="comment">// this first bit determines if the page got passed $i</span>
   $directory = "./"; <span class="comment">// this decides what directory we want to work on</span>
   exec("ls -r $directory*.jpg", $contents); <span class="comment">// list the jpegs (modify as appropriate)</span>
   $i = 0;
   while (($contents[$i])) <span class="comment">// this bit makes links for all the images</span>
      {
       echo "&lt;a href='./?i=$directory$contents[$i]'&gt;$contents[$i]&lt;/a&gt;&lt;br&gt;\n";
       $i++;
      }
   $noback=1; <span class="comment">// if we're listing images, we don't want to go back</span>
} elseif (is_file($i)) { <span class="comment">// is $i an image in the filesystem? this is important!</span>
   $size = GetImageSize($i); <span class="comment">// grabs the height and width tags, providing an html</span>
                             <span class="comment">// fragment we will use later. best web practice is to </span>
                             <span class="comment">// include height and width tags in your images</span>
                             <span class="comment">// <a href="https://www.php.net/manual/en/function.getimagesize.php">https://www.php.net/manual/en/function.getimagesize.php</a></span>
?&gt;</span>
<span class="php">&lt;?php <span class="comment">// and we finally write the html for the image. First the src,
      // then the height and width, and a pretty border. Season to taste.</span> ?&gt;</span>
&lt;img src="<span class="php">&lt;?php echo $i; ?&gt;</span>" <span class="php">&lt;?php echo $size[3]; ?&gt;</span> alt="" border="5"&gt;
<span class="php">&lt;?php <span class="comment">// if $i is not a file, we may have url hacking, or a broken URL,
      // maybe from an emailed link? In any case, the [ main ] link
      // will take them the main directory listing where they
      // can get at your pictures. so maybe it's not as stupid
      // a program as it claims to be.</span> ?&gt;</span>
<span class="php">&lt;?php } else { ?&gt;</span>
         &lt;p&gt;
            there's something wrong here.&lt;br&gt;
            unfortunately i'm a stupid program&lt;br&gt;
            and i don't know what the problem is.&lt;br&gt;
            &lt;br&gt;
            sorry.
         &lt;/p&gt;
<span class="php">&lt;?php } ?&gt;</span>
      &lt;/td&gt;
   &lt;/tr&gt;
<span class="php">&lt;?php if ($noback==0) { ?&gt;</span>
   &lt;tr&gt;
      &lt;td valign="bottom" align="center"&gt;
         &lt;small&gt;
            &lt;a href="./"&gt;[ main ]&lt;/a&gt;
         &lt;/small&gt;
      &lt;/td&gt;
   &lt;/tr&gt;
<span class="php">&lt;?php }; ?&gt;</span>
&lt;/table&gt;

&lt;!-- this by Joe Crawford, April 2001 <a href="https://www.artlung.com/">https://www.artlung.com/</a> --&gt;
&lt;/body&gt;
&lt;/html&gt;

</pre>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);


