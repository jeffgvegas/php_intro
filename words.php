<?php
echo "Enter a word:";
$input = rtrim(fgets(STDIN));
$strlength = strlen($input);
echo "Your word is {$strlength} letters long\n";
