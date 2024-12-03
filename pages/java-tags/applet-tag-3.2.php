<a href="https://www.w3.org/TR/REC-html32.html#applet">https://www.w3.org/TR/REC-html32.html#applet</a>

APPLET (Java Applets)

&lt;!ELEMENT APPLET - - (PARAM | %text)*&gt;
&lt;!ATTLIST APPLET
codebase %URL     #IMPLIED   -- code base --
code     CDATA    #REQUIRED  -- class file --
alt      CDATA    #IMPLIED   -- for display in place of applet --
name     CDATA    #IMPLIED   -- applet name --
width    %Pixels  #REQUIRED  -- suggested width in pixels --
height   %Pixels  #REQUIRED  -- suggested height in pixels --
align    %IAlign  #IMPLIED   -- vertical or horizontal alignment --
hspace   %Pixels  #IMPLIED   -- suggested horizontal gutter --
vspace   %Pixels  #IMPLIED   -- suggested vertical gutter --
&gt;

&lt;!ELEMENT PARAM - O EMPTY&gt;
&lt;!ATTLIST PARAM
name    NMTOKEN   #REQUIRED  -- The name of the parameter --
value   CDATA     #IMPLIED   -- The value of the parameter --
&gt;

Requires start and end tags. This element is supported by
all Java enabled browsers. It allows you to embed a Java
applet into HTML documents. APPLET uses associated PARAM
elements to pass parameters to the applet. Following the
PARAM elements, the content of APPLET elements should be
used to provide an alternative to the applet for user agents
that don't support Java. It is restricted to text-level
markup as defined by the %text entity in the DTD.
Java-compatible browsers ignore this extra HTML code. You
can use it to show a snapshot of the applet running, with
text explaining what the applet does. Other possibilities
for this area are a link to a page that is more useful for
the Java-ignorant browser, or text that taunts the user for
not having a Java-compatible browser.

Here is a simple example of a Java applet:

&lt;applet code="Bubbles.class" width=500 height=500&gt;
Java applet that draws animated bubbles.
&lt;/applet&gt;

Here is another one using a PARAM element:

&lt;applet code="AudioItem" width=15 height=15&gt;
&lt;param name=snd value="Hello.au|Welcome.au"&gt;
Java applet that plays a welcoming sound.
&lt;/applet&gt;

codebase = codebaseURL
This optional attribute specifies the base URL of the
applet -- the directory or folder that contains the
applet's code. If this attribute is not specified, then
the document's URL is used.

code = appletFile
This required attribute gives the name of the file that
contains the applet's compiled Applet subclass. This
file is relative to the base URL of the applet. It
cannot be absolute.

alt = alternateText
This optional attribute specifies any text that should
be displayed if the browser understands the APPLET tag
but can't run Java applets.

name = appletInstanceName
This optional attribute specifies a name for the applet
instance, which makes it possible for applets on the
same page to find (and communicate with) each other.

width = pixels
height = pixels
These required attributes give the initial width and
height (in pixels) of the applet display area, not
counting any windows or dialogs that the applet brings
up.

align = alignment
This attribute specifies the alignment of the applet.
This attribute is defined in exactly the same way as
the IMG element. The permitted values are: top, middle,
bottom, left and right. The default is bottom.

vspace = pixels
hspace = pixels
These optional attributes specify the number of pixels
above and below the applet (VSPACE) and on each side of
the applet (HSPACE). They're treated the same way as
the IMG element's VSPACE and HSPACE attributes.

The PARAM element is used to pass named parameters to applet:

&lt;PARAM NAME = appletParameter VALUE = value&gt;

PARAM elements are the only way to specify applet-specific
parameters. Applets read user-specified values for
parameters with the getParameter() method.

name = applet parameter name
value = parameter value

SGML character entities such as &eacute; and &#185; are
expanded before the parameter value is passed to the applet.
To include an &amp; character use &amp;.

Note: PARAM elements should be placed at the start of the
content for the APPLET element. This is not specified as
part of the DTD due to technicalities with SGML mixed
content models.
