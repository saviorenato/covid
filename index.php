<?php
	$filename = "https://www.worldometers.info/coronavirus/country/brazil/";
	$content = file_get_contents($filename);

	$pattern ='/<div class="maincounter-number".*?>\s<span.*?>\s?([0-9,]+)\s?<\/span>\s?<\/div>/';
	preg_match_all($pattern, $content, $match);

	echo "================Coronavirus stats BR================" . PHP_EOL;
	echo "Cases........: " . $match[1][0] . PHP_EOL;
	echo "Deaths.......: " . $match[1][1] . PHP_EOL;
	echo "Recovered....: " . $match[1][2] . PHP_EOL;
	echo "============================================";
?>