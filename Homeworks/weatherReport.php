<?php

$city = readline("Hello and welcome to the simplest weather report! Enter city: ");
$apiKey = "3b93430fef65e8eddf6d676047d68e7f";
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";
$data = file_get_contents($url);

if ($data) {
    $weatherData = json_decode($data, true);

    echo "Weather for " . $city . "\n";
    echo "Temperature: " . round($weatherData["main"]["temp"]) . "°C\n";
    echo "Weather: " . $weatherData["weather"][0]["main"] . "\n";
    echo "Description: " . $weatherData["weather"][0]["description"] . "\n";
    echo "Humidity: " . $weatherData["main"]["humidity"] . "%\n";
    echo "Wind speed: " . $weatherData["wind"]["speed"] . " m/s\n";
} else {
    echo "Error: Could not retrieve weather data for " . $city . "\n";
}

