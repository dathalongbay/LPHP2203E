<?php
// fopen(filename, mode)
$handle = fopen("data.txt", "r");

$content = fread($handle, filesize("data.txt"));

echo $content;