<?php
echo "Enter a word:";
$input = rtrim(fgets(STDIN));
$strlength = strlen($input);
$strreverse = strrev($input);
echo "Your word is {$strlength} letters long\n";
if ($strlength > 5) {
echo "{$strreverse}\n";
}else {
echo "{$input}\n";
}
?>

