<?php
session_start();

// retrieve storage directory name from session cookie 
$storeFolder =$_SESSION['nameOfFolder'];

// this inserts back / forward slash as appropriate
$ds = DIRECTORY_SEPARATOR;  

// $_FILES is a superglobal array of files  
 
if (!empty($_FILES)) {
     
// S_FILES['file']['tmp_name'] is the temporary filename given to the uploaded file     
$tempFile = $_FILES['file']['tmp_name'];                     
    
// get the path to the directory where the images are stored    
$currentDirectory = realpath();

$targetPath = $storeFolder. $ds .$currentDirectory;

// change the temporary filename to the actual name of the file 
$targetFile =  $targetPath. $_FILES['file']['name'];  
 
// move uploaded file named $tempfile to $targetFile location http://php.net/manual/en/function.move-uploaded-file.php  
move_uploaded_file($tempFile,$targetFile); 

}
?>     
