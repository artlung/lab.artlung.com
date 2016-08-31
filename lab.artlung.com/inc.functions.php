<?php

$page_title = "default";


function newnavToggle2($my_url, $title, $linktext, $my_class) {
	global $REQUEST_URI;
	if ($REQUEST_URI != $my_url)
		{
			return "<a href=\"$my_url\" title=\"$title\" target=\"_top\" class=\"$my_class\">$linktext</a>";
		} else { 
			return "<span class=\"$my_class\" title=\"$title - YOU ARE HERE.\">" . $linktext . "</span>";
		} 
	};

function titleTag($inString)
{
	print $inString;
}

function buildLink($my_url, $title, $linktext, $target='_top') {
	global $REQUEST_URI;
	if ($REQUEST_URI != $my_url)
		{
			$out = "<a href=\"$my_url\" title=\"$title\" target=\"$target\">$linktext</a>";
		} else { 
			$out = "<span title=\"$title - You Are Here.\">" . $linktext . "</span>";
		} 
	print $out;

	};

/*
 *
 * establish the equivalents to the directory names
 *
 */


$bc_label = array(
	"scripting"=>"Scripting"
	,  "autocalc"=>"Auto-Calculator"
	,  "compare_fields"=>"Compare two text fields before submission"
	,  "detection_real"=>"RealAudio Detection 1999"
	,  "dropdown"=>"Dropdown Navigation"
	,  "dropdown_frames"=>"DropDown Navigation in Frames"
	,  "dropdown_focus"=>"Apply Focus to a Select Box"
	,  "dropdown-only-some-new-window"=>"Dropdown Navigation Where Only Some Links Open New Windows"
	,  "format_time"=>"Time Formatting"
	,  "frames_mouseover"=>"Cross-frame MouseOver"
	,  "history"=>"How to implement a Forward and Back Buttons"
	,  "mouseover_vote"=>"Mouseover / Text Input Interaction (for Voting System)"
	,  "mouseover_vote100"=>"Mouseover / Text Input Interaction II (for Voting System)"
	,  "slideshow"=>"SlideShow Implementation"
	,  "validate_checkbox"=>"Validate Checkboxes before submission"
	,  "validate_image"=> "Submit with an Image"
	,  "bug_mac_netscape_forms_update"=>"BUG: Netscape/Macintosh Changing Form Button"
	,  "pinkvalidation"=>"Changing the color of a form element when it's blank"
	,  "oncontextmenu"=>"Demonstration of oncontextmenu"
	,  "reverse_string_nums"=> "but only the digits"
	,  "multiple_select"=> "Hierarchical SelectBoxes"
	,  "change_all_links"=>"How can I change every link on a page to something new?"
	,  "bookmarklets"=>"Killer Bookmarklets I have Come Across"
	,  "the-problem-with-blur"=>"Why not to use blur() to make dotted lines go away in MSIE for Windows"
	,  "dropdown_submit_form"=>"Submit a form by selecting a dropdown item"
	,  "urlencode"=>"How to Encode URLs / An ASCII to URLEncoded JavaScript"
	,  "checkbox-validate"=>"Checkbox Validator"
	,  "onunload-window-open-evil"=>"onunload + window.open = evil"
	,  "outbound-link-confirmation"=>"Outbound Link Confirmation"
	,  "camel-selector"=>"camelCase &lt;-&gt; selector-case w/o Regex"
	,  "slideshow-plus"=>"slideshow plus! cleaner slideshow which can also move forward automatically"
	,  "self_refresh"=>"Page Self-Refresh"
	,  "invisible-unspiderable-link"=>"Invisible Unspiderable Link"
	,  "tr-onmouseover-style"=>"Onmouseover in a TR tag"
	,  "html"=>"HTML"
	,  "image_border"=>"Different Approaches to a colored image border (old)"
	,  "tips-2001"=>"Random HTML Tips"
	,  "ancient-tidy-tutorial"=>"Ancient HTML Tidy Tutorial"
	,  "html-2.0"=>"HTML 2.0 - An exploration!"
	,  "gettysburg"=>"Gettysburg Address in HTML Buttons"
	,  "input-direction"=>"Change Form Input Direction"
	,  "50states"=>"50 U.S. States Dropdown Box HTML Code Snippets"
	,  "css"=>"CSS"
	,  "border-style"=>"border-style experiment"
	,  "a-outline-none"=>"outline:none to affect IE5/Mac focus outline" 	
	,  "form-image-background"=>"background images in form elements"	
	,  "w3c-with-and-without-css"=>"How Powerful is CSS?"	
	,  "additive-font-size"=>"How font-size accumulates"
	,  "modify-the-box"=>"Modify The Box"
	,  "rounded-mozilla"=>"Mozilla CSS Extensions"
	,  "php"=>"PHP"
	,  "gallery"=>"AutoMagic Gallery Listing"
	,  "rtf"=>"Make an RTF Document with PHP"
	,  "countdown"=>"Simple Countdown"
	,  "echo_http_host"=>"HTTP_HOST environment variable."
	,  "interesting_date_layout"=>"Interesting Date Layout [broken]"
	,  "php-php3-mod-rewrite"=>"How to make .php files masquerade as .php3"
	,  "make-unique-id"=>"Make a Unique ID"
	,  "detagger"=>"Fun Detagger Script"
	,  "other"=>"Other"
	,  "windows_export_file_list"=>"How to Make a file with every file on a C:\ drive"
	,  "ws_ftp_password_decoder"=>"WS_FTP JavaScript Password Decoder"
	,  "email-submission-stinks"=>"Form action mailto: stinks"
	,  "asp"=>"ASP Hello World Script"
	,  "anti-cache"=>"Preventing Browser Cache"
	,  "unix-batch-file-rename"=>"Batch File Rename By File Extension in Unix"
	,  "java-tags"=> "Java Tags 1999"
	,  "misc-files"=>"Miscellaneous Web Files"
	,  "undocumented-linklint"=>"Undocumented Linklint JavaScript Feature"
	,  "not-valid-itunes-library"=>"iTunes Invalid Library"
	,  "coldfusion-break-db"=>"Ways to break a lock on an Access Database with Cold Fusion"
	,  "user-preference-for-new-windows"=>"Giving Users A Preference Widget for Opening New Windows"
	,  "three-char-combos"=>"Permutations of a set of characters"
	,  "navigation-function-vs-asp"=>"Navigation Function (in PHP and ASP)"
	,  "connect-to-remote-server"=>"Simple example connecting to a remote server"
	,  "random-content"=>"Random Content"
	,  "change-space-between-paragraphs"=>"Changing the spacing between paragraphs"
	,  "change-document-background-color"=>"Change document background color"
	,  "generic-validator"=>"Generic Validator"
	,  "image-hover"=>"Image Hover"
	,  "coldfusion-titlecase"=>"ColdFusion TitleCase Function"
	,  "coldfusion-force-download"=>"ColdFusion: Force Download of File"
	,  "asp-cdonts"=>"ASP: CDONTS snippet"
	,  "reverse_string_nums"=>"Reverse a string, but only the digits"
	,  "larger-checkbox-with-css"=>"Larger Checkbox with CSS"
	,  "copy-to-clipboard-javascript"=>"Copy to Clipboard JavaScript"
	,  "multiple_select_v2"=>"Multiple, Hierarchical SelectBoxes, version 2"
); 


/*
 *
 * breadcrumb_nav function
 *
 */

function breadcrumb_nav($basename = "lab.artlung.com") { 

	global $PHP_SELF, $bc_site, $bc_label; 

	$site = $bc_site; 
	$return_str = "<a href=\"/\">$basename</a>"; 
	$str = substr(dirname($PHP_SELF), 1); 

	$arr = split('/', $str); 
	$num = count($arr); 

	if ($num > 1){ 

		foreach($arr as $val) { 

			$return_str .= ' &raquo; <a href="/'.$site.$val.'/">'.$bc_label[$val].'</a>'; 
			$site .= $val.'/'; 

		} 

	} elseif($num == 1) { 

		$arr = $str; 
		$return_str .= ' &raquo; <a href="/'.$bc_site.$arr.'/">'.$bc_label[$arr].'</a>'; 

	} 

	return $return_str; 

} 
?>
