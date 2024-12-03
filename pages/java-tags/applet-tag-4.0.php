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
?><a href="https://www.w3.org/TR/REC-html40/struct/objects.html#h-13.4">https://www.w3.org/TR/REC-html40/struct/objects.html#h-13.4</a>

13.4 Including an applet: the APPLET element

APPLET is deprecated (with all its attributes) in favor of OBJECT.

See the Transitional DTD for the formal definition.

Attribute definitions

codebase = uri [CT]
This attribute specifies the base URI for the applet.
If this attribute is not specified, then it defaults
the same base URI as for the current document. Values
for this attribute may only refer to subdirectories of
the directory containing the current document.
code = cdata [CS]
This attribute specifies either the name of the class
file that contains the applet's compiled applet
subclass or the path to get the class, including the
class file itself. It is interpreted with respect to
the applet's codebase. One of code or object must be
present.
name = cdata [CS]
This attribute specifies a name for the applet
instance, which makes it possible for applets on the
same page to find (and communicate with) each other.
archive = uri-list [CT]
This attribute specifies a comma-separated list of URIs
for archives containing classes and other resources
that will be "preloaded". The classes are loaded using
an instance of an AppletClassLoader with the given
codebase. Relative URIs for archives are interpreted
with respect to the applet's codebase. Preloading
resources can significantly improve the performance of
applets.
object = cdata [CS]
This attribute names a resource containing a serialized
representation of an applet's state. It is interpreted
relative to the applet's codebase. The serialized data
contains the applet's class name but not the
implementation. The class name is used to retrieve the
implementation from a class file or archive.

When the applet is "deserialized" the start() method is
invoked but not the init() method. Attributes valid
when the original object was serialized are not
restored. Any attributes passed to this APPLET instance
will be available to the applet. Authors should use
this feature with extreme caution. An applet should be
stopped before it is serialized.

Either code or object must be present. If both code and
object are given, it is an error if they provide
different class names.

width = length [CI]
This attribute specifies the initial width of the
applet's display area (excluding any windows or dialogs
that the applet creates).
height = length [CI]
This attribute specifies the initial height of the
applet's display area (excluding any windows or dialogs
that the applet creates).

Attributes defined elsewhere

id, class (document-wide identifiers)
title (element title)
style (inline style information)
alt (alternate text)
align, hspace, vspace (visual presentation of objects,
images, and applets)

This element, supported by all Java-enabled browsers, allows
designers to embed a Java applet in an HTML document. It has
been deprecated in favor of the OBJECT element.

The content of the APPLET acts as alternate information for
user agents that don't support this element or are currently
configured not to support applets. User agents must ignore
the content otherwise.
DEPRECATED EXAMPLE:
In the following example, the APPLET element includes a
Java applet in the document. Since no codebase is supplied,
the applet is assumed to be in the same directory as the
current document.

&lt;APPLET code="Bubbles.class" width="500" height="500"&gt;
Java applet that draws animated bubbles.
&lt;/APPLET&gt;


This example may be rewritten as follows with OBJECT as follows:

&lt;P&gt;&lt;OBJECT codetype="application/java"
classid="java:Bubbles.class"
width="500" height="500"&gt;
Java applet that draws animated bubbles.
&lt;/OBJECT&gt;

Initial values may be supplied to the applet via the PARAM element.
DEPRECATED EXAMPLE:
The following sample Java applet:

&lt;APPLET code="AudioItem" width="15" height="15"&gt;
&lt;PARAM name="snd" value="Hello.au|Welcome.au"&gt;
Java applet that plays a welcoming sound.
&lt;/APPLET&gt;

may be rewritten as follows with OBJECT:

&lt;OBJECT codetype="application/java"
classid="AudioItem"
width="15" height="15"&gt;
&lt;PARAM name="snd" value="Hello.au|Welcome.au"&gt;
Java applet that plays a welcoming sound.
&lt;/OBJECT&gt;
