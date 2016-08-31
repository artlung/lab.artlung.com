<a href="http://developer.netscape.com/docs/manuals/htmlguid/tags14.htm#1237108">http://developer.netscape.com/docs/manuals/htmlguid/tags14.htm#1237108</a>

APPLET

(Java applet)

The APPLET tag specifies a Java applet that will run in a
web page. Applets can only be displayed by Java-enabled
browsers. Navigator 2.0

You build an applet using the Java language and compile it
with a Java compiler. It is beyond the scope of this
document to discuss how to write Java applets. However, an
excellent place to start learning about writing Java is the
Java Tutorial at:

<a href="http://java.sun.com/docs/books/tutorial/">http://java.sun.com/docs/books/tutorial/</a>

After writing and compiling a Java applet, you can display
it in a web page by using the APPLET tag. The CODE attribute
specifies the name of the Java applet to run. The CODEBASE
attribute specifies the subdirectory or folder containing
the Java applet. You can use PARAM tags between the
&lt;APPLET&gt; and &lt;/APPLET&gt; tags to provide
information about parameters, or arguments, to be used by
the Java applet.

Syntax

&lt;APPLET
  CODE="classFileName" 
  CODEBASE="classFileDirectory" 
  ARCHIVE="archiveFile" 
  ALT="altText"
  ALIGN="LEFT"|"RIGHT"|"TOP"|"ABSMIDDLE"|"ABSBOTTOM"|
    "TEXTTOP"|"MIDDLE"|"BASELINE"|"BOTTOM"
  HEIGHT="height" 
  WIDTH="width" 
  HSPACE="horizMargin" 
  VSPACE="vertMargin" 
  MAYSCRIPT 
  NAME="value" 
&gt;
&lt;PARAM ...&gt;
&lt;/APPLET&gt;

The CODE attribute is required (otherwise there is no applet
to run). Netscape Navigator 3 and Navigator 4 can display
applets if the WIDTH and HEIGHT attributes are omitted, but
some other browsers cannot, so for best results you should
always include the WIDTH and HEIGHT attributes.

CODE ="classFileName" 

     specifies the filename of the applet to load. All Java
     class files end with a .class extension (for example,
     myApplet.class). Many browsers will display the applet
     correctly even if you omit the .class extension in the
     filename. 

CODEBASE="classFileDirectory" 

     is the directory containing the applet class file and
     any resources the applet needs. The value is a URL for
     an absolute or a relative pathname. An absolute URL is
     used as is without modification and is not affected by
     the document's BASE tag. A relative CODEBASE attribute
     is relative to the document's base URL defined by the
     BASE tag. If the document does not define a BASE tag,
     it is relative to the directory containing the HTML
     file. 

ARCHIVE="archiveFile" 

     is a URL for a file in the CODEBASE directory to be
     downloaded to the user's disk. The suffix on the
     archive file must be .zip, but the file must not be
     compressed. The browser searches the archive file for
     the class file named in the CODE attribute. If the
     browser cannot find that class file in the archive
     file, it searches for it using the standard
     mechanism.Navigator 3.0 

ALT="altText" 

     specifies text to be displayed by browsers that do not
     support the APPLET tag. Navigator 3.0 

ALIGN 

     specifies the alignment for the applet. If you do not
     provide a value for ALIGN, Navigator uses BOTTOM as the
     default. 

          LEFT aligns the applet with the left margin.
          Content following the applet flows around the
          applet on the right. You can use &lt;BR CLEAR&gt;
          to make content appear below the applet. 
          RIGHT aligns the applet with the right margin.
          Content following the applet flows around the
          applet on the left. You can use &lt;BR CLEAR&gt;
          to make content appear below the applet. 
          TOP: The top of the applet is vertically aligned
          with the tallest item in the current line. Only
          one line of content is aligned with the applet.
          Subsequent lines of content in the same
          block-level element appear below the applet. If
          the applet is not surrounded by content in the
          same block-level element as the applet, then it is
          aligned on the left. 
          ABSMIDDLE: The middle of the applet is vertically
          aligned with the vertical middle of other content
          (such as text or images) in the current line. The
          content is moved down from its natural position in
          the page to accommodate the alignment. Only one
          line of content is aligned with the applet.
          Subsequent lines of content appear below the
          applet. If the applet is not surrounded by content
          in the same block-level element as the applet,
          then it is aligned on the left. Navigator 3.0 
          ABSBOTTOM : The bottom of the applet is vertically
          aligned with the bottom of other content (such as
          text or images) in the current line. The content
          is moved down from its natural position in the
          page to accommodate the alignment. Only one line
          of content is aligned with the applet. Subsequent
          lines of content appear below the applet. If the
          applet is not surrounded by content in the same
          block-level element as the applet, then it is
          aligned on the left. Navigator 3.0 
          TEXTTOP aligns the top of the applet with the top
          of the tallest text in the current line. If the
          current line contains no text, the top of the
          applet is aligned with the vertical middle of
          other content (such as images) in the line. If the
          applet is not surrounded by content in the same
          block-level element as the applet, then it is
          aligned on the left. Navigator 3.0 
          MIDDLE: The middle of the applet is vertically
          aligned with the bottom (or baseline) of other
          content (such as text or images) in the current
          line. The content is moved down from its natural
          position in the page to accomodate the alignment.
          Only one line of content is aligned with the
          applet. Subsequent lines of content appear below
          the applet. If the applet is not surrounded by
          content in the same block-level element as the
          applet then it is aligned on the left. Navigator
          3.0. 
          BASELINE -- The bottom of the applet is vertically
          aligned with the bottom (or baseline) of other
          content (such as text or images) in the current
          line. The content is moved down from its natural
          position in the page to accomodate the alignment.
          Only one line of content is aligned with the
          applet. Subsequent lines of content appear below
          the applet. If the applet is not surrounded by
          content in the same block-level element as the
          applet then it is aligned on the left. Navigator
          3.0. 
          BOTTOM is the same as BASELINE. 

HEIGHT="height" 

     specifies the height of the applet. An integer value
     (for example, "100") indicates the height in pixels. A
     percentage value (for example, "25%") indicates the
     height as a percentage of the height of the parent
     window, frame, or block of content. The applet is
     scaled to fit the specified height and width.You should
     provide a width and height to ensure that all
     Java-enabled browsers can display the applet. 

WIDTH="width" 

     specifies the width of the applet. An integer value
     (for example, "100") indicates the width in pixels. A
     percentage value, (for example, "25%") indicates the
     width as a percentage of the width of the parent
     window, frame, or block of content. The applet is
     scaled to fit the specified height and width. You
     should provide a width and height to ensure that all
     Java-enabled browsers can display the applet. 

HSPACE="horizMargin" 

     specifies the horizontal space, in pixels, between the
     applet and surrounding text. Give the value as an
     integer. 

VSPACE="vertMargin" 

     specifies the vertical space, in pixels, between the
     applet and surrounding text. Give the value as an
     integer. 

MAYSCRIPT 

     permits the applet to access JavaScript. Use this
     attribute to determine whether or not an applet can
     access JavaScript on a page. If an applet accesses
     JavaScript when the MAYSCRIPT attribute is not
     specified, an exception will be generated. Navigator
     3.0 

NAME ="value" 

     specifies the name of the applet, so that different
     applets in the same window can refer to (and
     communicate with) one another. The name can also be
     used by JavaScript functions and scripts. 

Applet Example

The following example runs the applet jumping.class. It has
two input parameters, message and speed, that affect the
results of the applet. When this applet runs, it displays
the words in the message, a few words at a time. The words
come and go, so they seem to jump around at the specified
speed.

&lt;P&gt;Here is an applet. It has two parameters -- speed and message. 
&lt;APPLET CODE="jumping.class" CODEBASE=jclasses 
    WIDTH=240 HEIGHT=400 
    ALIGN=ABSMIDDLE HSPACE=10 VSPACE=20&gt; 
  &lt;PARAM NAME=message 
      VALUE="Use Netscape Navigator to browse the world wide web."&gt; 
  &lt;PARAM NAME=speed VALUE="4"&gt; 
&lt;/APPLET&gt;

Its alignment is ABSMIDDLE. 
&lt;/P&gt;

The file jumping.htm shows this example in action in a separate window.
