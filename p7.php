<?php
$height=readline("your height in meter:\n");
$weight=readline("your weight in meter:\n");
$bmi=$height*$height;
$emi=$bmi/$weight;
echo "your bmi is ...",$emi;
?>