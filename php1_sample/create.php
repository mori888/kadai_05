<?php

$gender = $_GET['gender'];
$age = $_GET['age'];
$A1 = $_GET['answer1'];
$A2 = $_GET['answer2'];
$A3 = $_GET['answer3'];

$array = array($gender, $age, $A1, $A2, $A3);

$file = fopen('data/data.csv', 'a');
flock($file, LOCK_EX);
fputcsv($file, $array);
flock($file, LOCK_UN);
fclose($file);

header("input.php");