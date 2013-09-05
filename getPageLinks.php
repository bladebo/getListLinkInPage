<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
$url = 'http://yourUrl'; // URI with a page of folder links
$file = file_get_contents($url);

$resultsFile = array();
preg_match_all('#<a.+href="(.*[.].{3})">.+</a>#', $file, $resultsFile);
//ECHO 'FILES IN '.$url. '<br />';
foreach($resultsFile[1] as $dataFile){
    echo $url.$dataFile . '<br />';
}

$results = array();
preg_match_all('#<a.+href="(.*)">.+</a>#', $file, $results);   
//ECHO 'FOLDER'. '<br />';
foreach($results[1] as $data){
    echo $url.$data . '<br />';
}    
    
foreach($results[1] as $data)    
{
	$FolderUrl = $url.$data;
	$file2 = file_get_contents($FolderUrl);
	$results2 = array();
	preg_match_all('#<a.+href="(.*[.].{3})">.+</a>#', $file2, $results2);
	//ECHO 'FILES IN FOLDER '.$FolderUrl. '<br />';
	foreach($results2[1] as $data2)
    	echo $FolderUrl.$data2 . '<br />';
}
