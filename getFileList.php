<?php

$directoryName = 'cow';

// scandir pull list of files from $directoryName into array
$files = scandir($directoryName);

// handle hidden files - search in $files array and then remove from array with unset 
if(($key = array_search('.', $files)) !== false) {
    unset($files[$key]);
}

if(($key = array_search('..', $files)) !== false) {
    unset($files[$key]);
}

if(($key = array_search('.DS_Store', $files)) !== false) {
    unset($files[$key]);
}

// reset array keys so they are consecutively numbered
$files = array_values($files);


// loop and echo list
for ($i=0; $i<=10 ; $i++) { 
	
echo $files[$i] . '<br />';

}

?>