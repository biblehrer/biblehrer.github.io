<?php
$txtcontent = $_REQUEST['json'];
$fp = fopen('SaveFile.json', w);
fwrite($fp, $txtcontent);
fclose($fp);
?>
