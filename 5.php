<?php
$file='book/daa.pdf';
$filename='daa.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .$filename . '"');
header('Content-transfer-encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>