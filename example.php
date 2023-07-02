<?php

require_once 'GoogleTranslateForFree.php';

echo "<pre>";
//Single
$source = 'en';
$target = 'fa';
$attempts = 5;
$text = isset($_REQUEST['text']) ? $_REQUEST['text'] : 'Hello';

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $text, $attempts);

print_r("$text  ===> $result\n\n");

//Array
$source = 'en';
$target = 'fa';
$attempts = 5;
$arr = ['hello', 'world',$text];

$tr = new GoogleTranslateForFree();
$result = $tr->translate($source, $target, $arr, $attempts);

print_r($arr);
echo "\n\n";
print_r($result);
