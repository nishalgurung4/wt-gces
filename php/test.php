<?php
$c = "App\Http\Controllers\Controller";

// var_dump(end(array_slice(explode("\\", $class), 0, -1)));
$string = "App\Http\Controllers\Controller";
$pieces = explode('\\', $string);
$last_word = array_pop($pieces);

echo $last_word;


$string = 'App\Http\Controllers\Controller';
$last_word_start = strrpos($string, '\\') + 1; // +1 so we don't include the space in our result
$last_word = substr($string, $last_word_start); // $last_word = PHP.
echo $last_word;