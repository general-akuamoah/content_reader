
<?php
$filename = "reader.txt"; //this is the text file to be worked on 
$fp = fopen($filename, "r"); // this function is to open and read the file.

$content = fread($fp, filesize($filename)); // here it read the content of the file and also check the file size 
fclose($fp); // after the content has been read the file is closed read also means getting the content of the file 

// now the the variable $content is holding the opened file
echo $content; // then we display the raw content here 

preg_match_all("/\[[^\]]*\]/", $content, $matches); // this is were we find all the strings in square brackets 
var_dump($matches[0]);     // we finally display all the strings with the square brackets

 ?>