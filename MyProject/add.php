<?php
session_start();

$title=$_POST['title'];
$options = $_POST['options'];
$correct_answer= $_POST['correct_answer'];


$data=array();
$data['title']=$title;
$data['options'] =$options;

$textArea = json_encode($data,JSON_UNESCAPED_UNICODE ). PHP_EOL;

$f = fopen('questions.txt', 'a');
fwrite($f, $textArea);


$_SESSION['success']=1;
header("Location: fopen.php");

?>