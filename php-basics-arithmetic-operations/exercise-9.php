<?php

$bodyWeight = readline("Please enter your body weight in kg:");

$bodyHeight = readline("Please enter your body height in cm:");

calculateBMI($bodyWeight, $bodyHeight);

function calculateBMI ($weight, $height){
    $weightInPounds = $weight * 2.20462262;
    $heightInInches = $height * 0.393700787;
    $bmi = $weightInPounds * 703 / pow($heightInInches,2);
    if ($bmi < 18.5) {
        echo 'Your BMI is considered low. You should eat some cake and hit the gym!';
    }
    else if ($bmi > 25) {
        echo 'Your BMI is considered high. You should stop eating and hit the gym, you fat f*ck!';
    }
    else {
        echo 'Your BMI is considered optimal. You can choose to eat cake or not, but probably still should go to gym!';
    }
}