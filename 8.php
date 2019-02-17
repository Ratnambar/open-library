<?php
$file='book/se.pdf';
$filename='se.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' .$filename . '"');
header('Content-transfer-encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>