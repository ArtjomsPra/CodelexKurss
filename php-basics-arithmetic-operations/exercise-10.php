<?php

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$usersChoice = trim(readline("Enter your choice (1-4) : "));

while ($usersChoice != 1 && $usersChoice != 2 && $usersChoice != 3 && $usersChoice != 4) {
    $usersChoice = trim(readline('Please enter your choice. Choose between 1,2,3 or 4. Thank you!:'));
}
switch ($usersChoice) {
    case 1:
        $radius = trim(readline('Please enter a radius of a circle in cm:'));
        while (!is_numeric($radius)) {
            $radius = trim(readline('Please enter a radius of a circle in cm:'));
        }
        $circleArea = pi() * pow($radius, 2);
        echo "The circle area of a circle with a radius of $radius cm is $circleArea cm.";
        break;
    case 2:
        $length = trim(readline('Please enter a length of a rectangle in cm:'));
        while (!is_numeric($length)) {
            $length = trim(readline('Please enter a length of a rectangle in cm:'));
        }
        $width = trim(readline('Please enter a width of a rectangle in cm:'));
        while (!is_numeric($width)) {
            $width = trim(readline('Please enter a length of a rectangle in cm:'));
        }
        $rectangleArea = $length * $width;
        echo "The area of a rectangle with length of $length cm and width of $width cm is $rectangleArea cm.";
        break;
    case 3:
        $base = trim(readline('Please enter a length of a base a triangle in cm:'));
        while (!is_numeric($base)) {
            $base = trim(readline('Please enter a length of a base a triangle in cm:'));
        }
        $height = trim(readline('Please enter a height of a triangle in cm:'));
        while (!is_numeric($height)) {
            $height = trim(readline('Please enter a height of a triangle in cm:'));
        }
        $triangleArea = $base * $height * 0.5;
        echo "The are of a triangle with a length of $base cm of a base and a height of $height cm is $triangleArea cm";
        break;
    case 4:
        echo "Thanks of visiting the greatest mathematical formula calculator ever! See you soon!";
        break;
}