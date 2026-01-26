8.- Haz un programa que declare una frase y reemplace una palabra por otra.

<?php

echo("<br><br><br>");

$frase = "super sigma";
$nueva_frase = str_replace("super", "ultra", $frase);
echo $nueva_frase;

?>