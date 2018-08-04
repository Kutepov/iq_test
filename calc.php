<?php 
require 'Calculator.php';
extract($_POST);

$calc = new Calculator($inputDate, $inputContribution, $inputDurationContribution, $inputSumAddcontribution);
echo $calc->calculateContribution();
?>