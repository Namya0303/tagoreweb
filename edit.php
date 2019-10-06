<?php 
$content = $_POST['text'];
$file = "content.txt";
$currentcontent = file_get_contents($file);
$currentcontent .= $content;
file_put_contents($file, $currentcontent);
?>