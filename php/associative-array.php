<?php
include './helper.php';

$marks = [90, 45, 60, 80];

$students = ['Arun', 'Sahil', 'Aashish', 'Ujjwal'];


for($i=0; $i< count($students); $i++)
{
	echo "Student = $students[$i] and marks = $marks[$i]";
	echo "<br />";
}

$revisedStudents = ['Arun' => 90, 'Sahil' => 45, 'Aashish' => 60, 'Ujjwal' => 80]; // associative 

$revisedStudents['Arun'];
foreach($revisedStudents as $key => $value)
{
	echo $key;
	echo $value;
	echo "<br />";
}

