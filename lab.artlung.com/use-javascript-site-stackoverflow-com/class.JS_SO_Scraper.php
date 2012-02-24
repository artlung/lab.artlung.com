<?php

class JS_SO_Scraper {

	function todayFileName() {
		return 'data/'  . date('Y-m-d') . ".json";
	}
	
	function todayFileExists() {
		return is_file($this->todayFileName());
	}
	
	function searchUrl($searchterm) {
		// http://www.google.com/search?client=safari&rls=en&q=jquery%22use+jquery%22+site:stackoverflow.com
		$escaped_searchterm = rawurlencode($searchterm);
		return "http://www.google.com/search?rls=en&q={$escaped_searchterm}&ie=UTF-8&oe=UTF-8";
	}
	
	function showOldData() {
		print "";
	}
	
	function showDisclaimer() {
		print "<p>You should know that these results are scraped from google's site and the numbers are approximate. These results were gathered on " . date('Y-m-d') . ".</p>";
		
		
	}
	
	function showTodayData() {
		$this->results = json_decode(file_get_contents($this->todayFileName()), true);
		// print "<pre>";
		// print_r($this->results);
		// print "</pre>";
		$massaged = array();
		foreach($this->results as $key => $data) {
			$massaged[] = array_merge(array(
				'framework' => $key,
			), $data);
		}
		
		foreach ($massaged as $key => $row) {
		    $result_count[$key]  = $row['result_count'];
		    $framework[$key] = $row['framework'];
		}
		array_multisort($result_count, SORT_DESC, $framework, SORT_ASC, $massaged);
		
		// array_multisort($massaged, SORT_DESC, 'result_count');
		// array_multisort($massaged, SORT_DESC,'result_count' );
		
		// print "<pre>";
		// print_r($massaged);
		// print "</pre>";
		print "<table id='bigTable' cellspacing=0 cellpadding=0 border=0>";
		print "<tr><th>Framework</th><th>Google Query</th><th>Results</th></tr>";
		foreach($massaged as $row) {
			// print_R($row);
			print "<tr><td>{$row['framework']}</td><td><a href='{$row['url']}'>{$row['basic_search']}</a></td><td align='right'>{$row['result_count']}</td></tr>";
		}
		print "</table>";
		
		

		
	}
	
	function saveTodayData() {
		$filename = $this->todayFileName();
		$somecontent = json_encode($this->results);
		
	    if (!$handle = fopen($filename, 'w')) {
	         echo "Cannot open file ($filename)";
	         exit;
	    }

	    // Write $somecontent to our opened file.
	    if (fwrite($handle, $somecontent) === FALSE) {
	        echo "Cannot write to file ($filename)";
	        exit;
	    }
	    // echo "Success, wrote ($somecontent) to file ($filename)";

	    fclose($handle);
		
		
	}
	
	function scrapeGoogleForData() {
		$frameworkAliases = array(

			'javascript' => array(
				'"use javascript"',
			),
			'jquery' => array(
				'"use jquery"',
			),
			'prototype' => array(
				'"use prototype"',
				'"use prototypejs"',
			),
			'mootools' => array(
				'"use mootools"',
			),
			'dojo' => array(
				'"use dojo"',
			),
			'extjs' => array(
				'"use extjs"',
				'"use ext js"',
				'"use ext core"',
			),
		);

		$results = array();

		$suffix = "site:stackoverflow.com";

		foreach ($frameworkAliases as $framework => $searches) {
			
			$results[$framework]['basic_search'] = implode(" OR ", array_merge($searches));
			$results[$framework]['composed_search'] = $results[$framework]['basic_search'] . " " . $suffix;
			$results[$framework]['url'] = $this->searchUrl($results[$framework]['composed_search']);
			$results[$framework]['result_count'] = 0;
			// print $results[$framework]['url'];
			sleep(2);
			$html = file_get_dom($results[$framework]['url']);
			$x = 0;
			foreach($html->find('p[id=resultStats] b') as $element) {
				// 0 // 1
				// 1 // 10
				// 2 // 6,410
				// 3 // stackoverflow.com
				// 4 // "use jquery"
				// 5 // 0.07
				if ($x == 2) {
					$results[$framework]['result_count'] = (int)str_replace(',','',$element->plaintext);
				}
				$x++;
			}
		}

		$this->results = $results;
		return $results;
	}
	
	
	
}