<?php
$zip = new ZipArchive;
$res = $zip->open('sc.zip');
if ($res === TRUE) {
$zip->extractTo('./');
$zip->close();
echo 'Ok';
} else {
echo 'Cannot';
}
?>
