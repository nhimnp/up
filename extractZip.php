<?php
include 'functions.php';
if(unzip('sc.zip','unziped/myNewZip'))
    echo 'Success!';
else
    echo 'Error';
?>
