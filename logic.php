<?php

require('classes/Calculator.php');

use Elijah\AgeCalculate;

$AgeCalculate = new AgeCalculate();
$ageResult = '';
$leapYearResult = '';
$errors = '';

$day = isset($_GET['day']) ? $_GET['day'] : '';
$leapYears = isset($_GET['leapYears']) ? true : false;

if ($day) {
    $errors = $AgeCalculate->hasErrors($day);
    if (!$errors) {
        $ageResult = $AgeCalculate->calculate($_GET['timeScale']);
        if (isset($leapYears)) {
            $leapYearResult = $AgeCalculate->leapYearCalculator($day);
        }
    }
}