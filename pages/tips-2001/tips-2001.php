<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader(
    '
Random HTML Tips, 2001
'
);

?>
    <h1>Some HTML Tips, No-No's, In Random Order</h1>

    <P>Note: These are some comments and tips I provided to some of the team at
        my employer, <a href="http://www.AVENCOM.com/">AVENCOM</a>.
        <BR>
        Joe Crawford
        <BR>
        February, 2001
    </P>

    <pre>
===========================================================
-----------------------------------------------------------
CORRECT USE OF ALT TAG:
-----------------------------------------------------------

I have seen this use of the ALT tag...

     &lt;img ... alt="decorative line"&gt;

The proper use for things that are decorative or functional
would be ALT="". If an image is functioning as a bullet, 
ALT="*" would work well. A common error is to use
ALT="bullet".

Another common misuse of ALT I've seen (not here) is:
ALT="Firestone logo". When a graphic is a logotype, simply
ALT="Firestone" will do.

-----------------------------------------------------------
-----------------------------------------------------------
PROPER USE OF VALIGN
-----------------------------------------------------------
valign does NOT go into:
        &lt;span&gt;
        &lt;div&gt;
        &lt;p&gt;
        &lt;font&gt;
        &lt;table&gt;
valign WILL go into:
        &lt;tr&gt;
        &lt;td&gt;
COMMENT: To get vertical alignment, usually the way to do
that is in a table, in the &lt;tr&gt; and &lt;td&gt; tags. appropriate
values for valign are: top, bottom, middle. valign=center
is NOT valid.
-----------------------------------------------------------
-----------------------------------------------------------
PROPER USE OF VALIGN
-----------------------------------------------------------
In our code I have seen some odd attributes in &lt;table&gt;
some baddies.
        valign=top
        align=center
        align=left
Avoid these as much as possible. If we're moving toward
modular code consistency is best. If we want to center a
table it is best to use:
&lt;div align="center"&gt;
  &lt;table ...&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;
&lt;/div&gt;

for tables inside tables, use as follows:
&lt;table ...&gt;
  &lt;tr&gt;
    &lt;td align="center"&gt;
        &lt;table ...&gt;
          &lt;tr&gt;
            &lt;td&gt;...&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/table&gt;
    &lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
-----------------------------------------------------------
-----------------------------------------------------------
&amp;, &gt;, and &lt;
-----------------------------------------------------------
The ampersand, greater than, and less than symbols SHOULD
NOT be left bare in a file, they should be encoded as
entities. They have special meaning in HTML and this is
required.
        &amp;  &gt;  &lt;

        

Other common entities include
        &nbsp;  &lt;--non-breaking space
        &copy;  &lt;--copyright symbol
-----------------------------------------------------------
-----------------------------------------------------------
FONT SIZE
-----------------------------------------------------------
In the &lt;font&gt; tag, it's best to use "relative" sizing.
plus or minus the default.

These are bad:
        &lt;font size="1"&gt;
        &lt;font size="2"&gt;
These are good:
        &lt;font size="-2"&gt;
        &lt;font size="-1"&gt;
        &lt;font size="+1"&gt;
        &lt;font size="+2"&gt;
The principal here is that size="2" may mean different
things on different platforms. When you say "+1", you're
saying, increase the size some factor greater than the
default. It's more flexible for people who have changed
their font sizes in their browsers.
-----------------------------------------------------------
-----------------------------------------------------------
SELECT tags
-----------------------------------------------------------
&lt;select&gt; must have corresponding &lt;/select&gt; tags - most
browsers will know when you're done, but it's always best
practice to close all tags.
-----------------------------------------------------------
-----------------------------------------------------------
OPTION TAGS
&lt;option&gt; should have corresponding &lt;/option&gt; - same as above.

Also, inside an &lt;option tag, no markup or extra tags are
allowed. I spotted this in some of our code:

  &lt;select&gt;
    &lt;option&gt;hello&lt;br&gt;
    &lt;option&gt;world&lt;br&gt;
  &lt;/select&gt;

I'm not sure what the intent here was, but those &lt;br&gt; don't
do anything and will probably misinterpreted down into the
page.

If the desired effect is a space, the way to do the above
would be:

  &lt;select&gt;
    &lt;option&gt;hello&lt;/option&gt;
    &lt;option&gt;&lt;/option&gt;    
    &lt;option&gt;world&lt;/option&gt;
    &lt;option&gt;&lt;/option&gt;    
  &lt;/select&gt;
...which would leave blank spaces probably intended. This
would have to be accounted for in the form processing, of
course.
-----------------------------------------------------------
-----------------------------------------------------------
IMG TAG
-----------------------------------------------------------
The required tags for IMG are:
&lt;img&gt;
        src
        height
        width
        border
        alt
And optional are:
        hspace
        vspace
        name
I advise against leaving off a height or a width for
spacers where you only care about height or width. Use
height="1" or width="1" if there is no necessary value
in your mind.
-----------------------------------------------------------
-----------------------------------------------------------
OPTIMIZING CLASS, VALIGN ATTRIBUTES
-----------------------------------------------------------
Simple is better when applying class.

For example:
  &lt;p&gt;&lt;span class="body"&gt;Four score and seven...&lt;/span&gt;&lt;/p&gt;
Would be simpler as:
  &lt;p class="body"&gt;Four score and seven...&lt;/p&gt;

And this:
  &lt;table cellpadding="0" cellspacing="0" border="0"&gt;
    &lt;tr&gt;
      &lt;td&gt;&lt;p&gt;&lt;span class="body"&gt;Four score and seven...&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;

Would be better as:
  &lt;table cellpadding="0" cellspacing="0" border="0"&gt;
    &lt;tr&gt;
      &lt;td class="body"&gt;Four score and seven...&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;

The idea is to minimize the number of tags and attributes
you have.

On that note - this:
  &lt;tr&gt;
    &lt;td valign="top"&gt;&lt;/td&gt;
    &lt;td valign="top"&gt;&lt;/td&gt;
    &lt;td valign="top"&gt;&lt;/td&gt;
    &lt;td valign="top"&gt;&lt;/td&gt;
  &lt;/tr&gt;

Is easier as:
  &lt;tr valign="top"&gt;
    &lt;td&gt;&lt;/td&gt;
    &lt;td&gt;&lt;/td&gt;
    &lt;td&gt;&lt;/td&gt;
    &lt;td&gt;&lt;/td&gt;
  &lt;/tr&gt;

-----------------------------------------------------------
===========================================================
</PRE>

<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);
