<?php
$file='book/oos.pdf';
$filename='oos.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .$filename . '"');
header('Content-transfer-encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>