<?php

$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);

// echo $fileContents;

// file_put_contents($contactFile, 'テストです');

// $addText = 'テストです' . "\n";

// file_put_contents($contactFile, $addText, FILE_APPEND);

$allDdata = file($contactFile);

foreach ($allDdata as $lineData) {
  $lines = explode(',', $lineData);
  echo $lines[0] . '<br>';
  echo $lines[1] . '<br>';
  echo $lines[2] . '<br>';
}
