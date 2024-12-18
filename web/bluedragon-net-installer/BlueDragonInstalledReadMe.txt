BlueDragon 7.1 for the Microsoft .NET Framework
===============================================
May 13, 2009

Welcome to BlueDragon 7.1 for the Microsoft .NET Framework. This quick start covers the
minimum information you need to get started deploying CFML applications on Microsoft .NET
servers, including Windows 2000, Windows XP, Windows 2003, Windows Vista and Windows 2008.

 1. Starting IIS

If the installer prompted you to stop IIS then you will need to start it before
BlueDragon 7.1 for the Microsoft .NET Framework can be used.

 2. Placing Your CFML Templates Within IIS Directories

The BlueDragon installer has configured IIS and the Microsoft .NET Framework to natively
process CFML templates alongside other ASP.NET and static web resources (such as aspx
pages, HTML files, GIF/JPEG images, etc.). Simply place your CFML pages into the document
root directory (for example, "C:\Inetpub\wwwroot") or its sub-directories.

 3. Installing BD.NET globally

If BD.NET was installed globally then you must manually copy global.asax from the
installation directory to all of the IIS websites and virtual directories that will
contain CFML pages. If an IIS website or virtual directory already contains a global.asax
file then you must edit it to contain the following tag at the top:

  <%@ Application Inherits="NewAtlanta.BlueDragon.Global" %>

If this is not done then the Application.cfc onApplicationStart, onApplicationEnd and
onSessionEnd events will not work.

When BD.NET is uninstalled you will need to manually remove the global.asax files or remove
this Inherits attribute from the Application tag.

 4. Accessing the BlueDragon Administration Console 

With IIS7, BlueDragon is administered using the inetmgr.exe program.

With IIS6 and earlier, a BlueDragon administration console is available for each web site
configured during installation. Access the BlueDragon admin console via the following URL,
replacing "www.server.com" with the host name or IP address of the web site:

    http://www.server.com/bluedragon/admin.cfm 

Note that there's no "/bluedragon" directory installed (or needed) in the docroot of your
web site. Loading of the Admin console is handled through directives implemented in the
BlueDragon and Microsoft .NET Framework configuration files.

For additional information on integrating your CFML with ASP.NET, as well as taking
advantage of additional features when deploying CFML on .NET (such as session persistence
and enhanced authentication options), see the manuals, "Deploying CFML on ASP.NET" and
"Integrating CFML with ASP.NET". They also explain the technical details of the
implementation of BlueDragon 7.1 for the Microsoft .NET Framework.

 5. Installation Notes

The installer files BlueDragon_NET_71_xxx.exe and setup.exe have an execution level of
"requireAdministrator" because they need Administrator privileges in order to update the
applicationHost.config file.
 
The shared file ABCpdfCE6.dll is installed to the system folder. The installation location
for this file cannot be changed. 

The following unsigned third party files are installed by the BD.NET installer: ABCpdf.dll,
ABCpdfCE6.dll, AxInteropSHDocVw.dll and Interop.SHDocVw.dll.
