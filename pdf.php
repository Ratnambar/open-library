<?php
$file='book/c.pdf';
$filename='c.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .$filename . '"');
header('Content-transfer-encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>