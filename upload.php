<?php

var_dump($_FILES);
die();

$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'FILES';

if (!empty($_FILES))
{
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
    $targetFile =  $targetPath. $_FILES['file']['name'];
    move_uploaded_file($tempFile,$targetFile);
}