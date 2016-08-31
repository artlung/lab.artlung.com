<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="jquery.masonry.min.js"></script>
<script>
$(function(){
	$('#screens').masonry({
		itemSelector : 'div'
		, columnWidth : 100
	}).delegate('div', 'click', function(){
		$(this).find('ul').slideDown();
	});
});
</script>
<style>
body {
	font-family: sans-serif;
	font-size: x-small;
	background-color: #666;
}
h2 {
	font-family: sans-serif;
	font-size: small;
	font-weight: normal;
	margin: 0;
	padding: 4px;
}
ul {
	list-style-type: none;
	margin: 0;
	padding: 4px;
}
li {
	margin: 0;
	padding: 0 0 1px 0;
}
.screen ul {
/*	display: none;*/
}
</style>

<div id="screens">
<?php
require 'resolution.php';

$str = $display_resolutions;

function li($s){
	return "<li>" . $s . "</li>"; 
}
function proper_key($width, $height) {
	$format= "%1$06d_%2$06d";
	return sprintf($format, $width, $height);
}
function correctPadding($paddedNum) {
	$return = "";
	$flag = false;
	for($i=0;$i<strlen($paddedNum);$i++){
		if ($paddedNum[$i] != "0" && !$flag){
			$flag = true;
		}
		if ($flag) {
			$return .= $paddedNum[$i];
		}
	}
	return $return;
}

//print_r();

$width_height_and_data = array();

//Code	Name	Aspect ratio	Width	Height	 % of Steam users
$i = 0;
foreach (explode("\n", $str) as $line) {
	if ($i!=0):
		list($code, $name, $aspect_ratio, $width, $height, $percent_steam_users) = explode("\t", $line);
		
		$width_height_and_data[proper_key($width, $height)][] = array(
			'shortname' => $code,
			'description' => $name,
			'width' => $width,
			'height' => $height,
			'major' => true,
		);
	
	endif;
	$i++;
}

$dom = new DomDocument();
if (!$dom->loadHTML($cell_resolutions)){
	exit('Failed to load html');
}
$i = 0;
foreach($dom->getElementsByTagName('tr') as $tr):
	if ($i!=0):
		$tdIndex = 0;
		foreach($tr->getElementsByTagName('td') as $td):
			switch($tdIndex):
				case 0:
					if ($td->textContent != '') {
						$brand = $td->textContent;
					}
				break;
				case 1:
					$model = $td->textContent;
				break;
				case 2:
					list($width, $height) = explode(' x ', $td->textContent);
				break;
			endswitch;
			$shortname = "{$model}";
			$description = "{$brand} {$model}";
			$tdIndex++;
		endforeach;
		$width_height_and_data[proper_key($width, $height)][] = array(
			'shortname' => $shortname,
			'description' => $description,
			'width' => $width,
			'height' => $height,
			'major' => false,
		);
	endif;
	$i++;
endforeach;

// print "<pre>";
// print_r($width_height_and_data);




ksort($width_height_and_data);

$top = 0;
$left = 0;
$red = 254;
$green = 254;
$blue = 254;
foreach($width_height_and_data as $width_height => $data):
	list($width, $height) = explode('_', $width_height);
	$width = correctPadding($width);
	$height = correctPadding($height);
	$cssAttributes = array(
		'width' => "{$width}px",
		'height' => "{$height}px",
		'background-color' => "rgb({$red},{$green},{$blue})",
		'overflow' => "auto",
		// 'position' => "absolute",
		// 'top' => "{$top}px",
		// 'left' => "{$left}px",
		// 'opacity' => '0.5',
		'float' => 'left',
		'margin' => '5px',
		
	);
	$count = count($data);
	if ($data['major'][0] == true) {
		$cssAttributes['background-color'] = 'red';
	} else if ($count == 1) {
		$cssAttributes['background-color'] = '#eee';
	} else if (in_array($count, range(2, 10))) {
		$cssAttributes['background-color'] = 'yellow';
	} else if (in_array($count, range(11, 50))) {
		$cssAttributes['background-color'] = 'orange';
	} else if (in_array($count, range(51, 100))) {
		$cssAttributes['background-color'] = 'pink';
	} else {
		$cssAttributes['background-color'] = 'red';
	}
	// print count($data);
	// print "<br>";
	$css = "";
	foreach($cssAttributes as $key => $val) {
		$css .= "{$key}:{$val};";
	}
	
	print "<div style=\"{$css}\" title=\"width {$width} pixels by height {$height} pixels\" class=\"screen\">";
	print "<h2>{$width} &times; {$height}</h2>";
	$items = array();
	foreach($data as $item):
		$items[] = $item['description'];
	endforeach;
	$items = array_map("li", $items);
	print "<ul>".implode("\n", $items)."</ul>";
	print "</div>\n\n";
	$color_increment = 2;
	if ($red > 0) {
		$red = $red - $color_increment;
	} else if ($green > 0) {
		$green = $green - $color_increment;
	} else if ($blue > 0) {
		$blue = $blue - $color_increment;
	}
//	$red = ($red - 51 > 0);
	// $top+=1;
	// $left+=1;
endforeach;


?>
</div>
