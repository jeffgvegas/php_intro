<?php
echo "Enter a word:";
$input = rtrim(fgets(STDIN));
$strlength = strlen($input);
echo "Your word is {$strlength} letters long\n";
function checkword($word) {
	$len = strlen($word);
	if ($len > 5) {
	return strrev(substr($word,0,4));
}	else {
	return $word;
}
}

$result = checkWord($input);
echo $result;
?>

