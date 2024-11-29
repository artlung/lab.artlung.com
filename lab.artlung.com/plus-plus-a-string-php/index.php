<?php include_once("../inc.functions.php"); ?>
<?php include_once("../inc.header1of2.php"); ?>
plusplus (++) a string in php
<?php include_once("../inc.header2of2.php"); ?>

<p align="right">Posted August 2016</p>

<h1>
plusplus (++) a string in php
</h1>

<p>This seems like an oddity to me, but it's kind of interesting.</p>

<p>Let's say you have a string. The word "dog," let's say. Let's see what happens if you increment it.</p>

<pre>
$str = "dog";
$str++;
echo $str;
</pre>
<p>
The output is <b>doh</b>.
</p>
<p>
So if we want the English alphabet output, we could set $str to "a" and print and increment 26 times and there's the alphabet.</p>
</p>
<pre>
$str = "a";
for ($i=0; $i&lt;26; $i++) {
	echo $str++;
}
</pre>

<p>The output is <b>abcdefghijklmnopqrstuvwxyz</b></p>

<p>So what happens if we let it run past single digits? Let's add newlines so we can see each entry. Let's do this 100 times.</p>
<pre>
$str = "a";
for ($i=0; $i&lt;100; $i++) {
	echo $str++;
	echo "\n";
}
</pre>

<p>We get:<br />
a<br />
b<br />
c<br />
d<br />
e<br />
f<br />
g<br />
h<br />
i<br />
j<br />
k<br />
l<br />
m<br />
n<br />
o<br />
p<br />
q<br />
r<br />
s<br />
t<br />
u<br />
v<br />
w<br />
x<br />
y<br />
z<br />
aa<br />
ab<br />
ac<br />
ad<br />
ae<br />
af<br />
ag<br />
ah<br />
ai<br />
aj<br />
ak<br />
al<br />
am<br />
an<br />
ao<br />
ap<br />
aq<br />
ar<br />
as<br />
at<br />
au<br />
av<br />
aw<br />
ax<br />
ay<br />
az<br />
ba<br />
bb<br />
bc<br />
bd<br />
be<br />
bf<br />
bg<br />
bh<br />
bi<br />
bj<br />
bk<br />
bl<br />
bm<br />
bn<br />
bo<br />
bp<br />
bq<br />
br<br />
bs<br />
bt<br />
bu<br />
bv<br />
bw<br />
bx<br />
by<br />
bz<br />
ca<br />
cb<br />
cc<br />
cd<br />
ce<br />
cf<br />
cg<br />
ch<br />
ci<br />
cj<br />
ck<br />
cl<br />
cm<br />
cn<br />
co<br />
cp<br />
cq<br />
cr<br />
cs<br />
ct<br />
cu<br />
cv
</p>

<p>So after "z" comes "aa" in the alphabet. Odd but strangely interesting.</p>

<p>So a person could get all the three letter word combinations by starting at <b>"zz"</b> and iterating as many times as there are 3 letter combinations. That's 17576 as it turns out. 26 to the power of 3. 26 &times; 26 &times; 26.

<pre>
$str = 'zz';
for ($n=0; $n&lt;17576; $n++) {
    echo ++$str . "\n";
}
</pre>

<p style="font-family: 'Courier New', Courier, fixed-width;"><b><?php
$str = "zz";
for ($n=0; $n<17576; $n++) {
    echo ++$str . " ";
}
?></b></p>

<p>PHP is a little weird.</p>








<?php include_once("../inc.footer.php"); ?>
