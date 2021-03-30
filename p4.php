<?php
echo "please enter the following information so i can sell it for a profit!\n";
$name1=readline("first name:\n");
$name2=readline("second name:\n");
$grade=readline("Grade (9-12):\n");
$id=readline("student id:\n");
$log =readline("login:\n");
$ok=readline("GPA(0.0-4.4):\n");
echo "your information:\n";
echo " login: $log\n";
echo " id: $id\n";
echo " Name: $name1, $name2\n";
echo " GPA:  $ok\n";
echo " grade: $grade\n";
?>