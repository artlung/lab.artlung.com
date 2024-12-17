<?php
/**
 * If they want new windows, give it to them!
 * php version 7.2
 *
 * @category PHP
 * @package  Java_Tags
 * @author   Joe Crawford <joe@artlung.com>
 * @license  GPL 2.0+ - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version  GIT: $Id$
 * @link     https://artlung.com/
 * @since    2024-12-03
 */
?><a href="https://java.sun.com/products/jdk/1.1/docs/guide/misc/applet.html">https://java.sun.com/products/jdk/1.1/docs/guide/misc/applet.html</a>

JDK Contents
--------------------------------------------------------------------------------

The APPLET Tag
Here is an example of a simple APPLET tag:


&lt;applet code="MyApplet.class" width=100 height=140&gt;&lt;/applet&gt;


This tells the viewer or browser to load the applet whose
compiled code is in MyApplet.class (in the same directory as
the current HTML document), and to set the initial size of
the applet to 100 pixels wide and 140 pixels high.

Here's a more complex example of an APPLET tag:


&lt;applet codebase="https://java.sun.com/applets/NervousText/1.1"
code="NervousText.class" width=400 height=75&gt;
&lt;param name="text" value="Welcome to HotJava!"&gt;
&lt;hr&gt;
If you were using a Java-enabled browser such as HotJava,
you would see dancing text instead of this paragraph.
&lt;hr&gt;
&lt;/applet&gt;


This tells the viewer or browser to load the applet whose
compiled code is at the URL
https://java.sun.com/applets/NervousText/1.1/NervousText.
class, to set the initial size of the applet to 400x75
pixels. The viewer/browser must also set the applet's "text"
attribute (which customizes the text this applet displays)
to be "Welcome to HotJava!" If the page is viewed by a
browser that can't execute Java applets, then the browser
will ignore the APPLET and PARAM tags, displaying only the
HTML between the &lt;param&gt; and &lt;/applet&gt; tags (the
alternate HTML).

Here's the result of putting the above example in your HTML
file. (The first time you load this page, you may have to
wait for the applet to be loaded.)


Here is another example of an APPLET tag:


&lt;applet code=A21 width=256 height=256 archive="toir.jar"&gt;
&lt;param name=img value=test.gif&gt;
&lt;hr&gt;
We need to convert some of the standard applets to use
archive.  Any volunteers?
&lt;hr&gt;
&lt;/applet&gt;


In this example, the applet class is A21. Its bytecodes
(may) reside in the archive "toir.jar". This archive may
also contain the image resource (see resources
documentation) with name test.gif.

Here's the complete syntax for the APPLET tag. Required
elements are in bold. Optional elements are in regular
typeface. Elements your specify are in italics.

&lt;APPLET
CODEBASE = codebaseURL
ARCHIVE = archiveList
CODE = appletFile ...or...  OBJECT = serializedApplet
ALT = alternateText
NAME = appletInstanceName
WIDTH = pixels  HEIGHT = pixels
ALIGN = alignment
VSPACE = pixels  HSPACE = pixels
&gt;
&lt;PARAM NAME = appletAttribute1 VALUE = value&gt;
&lt;PARAM NAME = appletAttribute2 VALUE = value&gt;
. . .
alternateHTML
&lt;/APPLET&gt;

CODE, CODEBASE, and so on are attributes of the applet tag;
they give the browser information about the applet. The only
mandatory attributes are CODE, WIDTH, and HEIGHT. Each
attribute is described below.

CODEBASE = codebaseURL
This OPTIONAL attribute specifies the base URL of the
applet--the directory that contains the applet's code. If
this attribute is not specified, then the document's URL is
used.

ARCHIVE = archiveList
This OPTIONAL attribute describes one or more archives
containing classes and other resources that will be
"preloaded". The classes are loaded using an instance of an
AppletClassLoader with the given CODEBASE. The archives in
archiveList are separated by ",". NB: in JDK1.1, multiple
APPLET tags with the same CODEBASE share the same instance
of a ClassLoader. This is used by some client code to
implement inter-applet communication. Future JDKs *may*
provide other mechanisms for inter-applet communication.

CODE = appletFile
This REQUIRED attribute gives the name of the file that
contains the applet's compiled Applet subclass. This file is
relative to the base URL of the applet. It cannot be
absolute. One of CODE or OBJECT must be present.

OBJECT = serializedApplet
This attribute gives the name of the file that contains a
serialized representation of an Applet. The Applet will be
deserialized. The init() method will *not* be invoked; but
its start() method will. Attributes valid when the original
object was serialized are *not* restored. Any attributes
passed to this APPLET instance will be available to the
Applet; we advocate very strong restraint in using this
feature. An applet should be stopped before it is
serialized. One of CODE or OBJECT must be present.

ALT = alternateText
This OPTIONAL attribute specifies any text that should be
displayed if the browser understands the APPLET tag but
can't run Java applets.

NAME = appletInstanceName
This OPTIONAL attribute specifies a name for the applet
instance, which makes it possible for applets on the same
page to find (and communicate with) each other.

WIDTH = pixels HEIGHT = pixels
These REQUIRED attributes give the initial width and height
(in pixels) of the applet display area, not counting any
windows or dialogs that the applet brings up.

ALIGN = alignment
This OPTIONAL attribute specifies the alignment of the
applet. The possible values of this attribute are the same
as those for the IMG tag: left, right, top, texttop, middle,
absmiddle, baseline, bottom, absbottom.

VSPACE = pixels HSPACE = pixels
These OPTIONAL attributes specify the number of pixels above
and below the applet (VSPACE) and on each side of the applet
(HSPACE). They're treated the same way as the IMG tag's
VSPACE and HSPACE attributes.
&lt;PARAM NAME = appletAttribute1 VALUE = value&gt;
&lt;PARAM NAME = appletAttribute2 VALUE = value&gt; . . .
This tag is the only way to specify an applet-specific
attribute. Applets access their attributes with the
getParameter() method.

--------------------------------------------------------------------------------
Copyright &copy; 1996 Sun Microsystems, Inc., 2550 Garcia
Ave., Mtn. View, CA 94043-1100 USA. All rights reserved.

