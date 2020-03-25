<?php
ini_set('memory_limit', '512M');

if (file_exists('Library.xml')) {
	$xml = simplexml_load_file('Library.xml');

    $json = json_encode($xml);
    
    // $library = json_stringify($json);

    $file = fopen('Library.txt', 'w');
    fwrite($file, $json);
    fclose($file);
}
else {
    exit('Unable to open XML File');
}
?>