<?php

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

$city = readline("Hello and welcome to the simplest weather report! Enter city: ");
$apiKey = "3b93430fef65e8eddf6d676047d68e7f";
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";

$client = new Client();
$response = $client->get($url);
$data = json_decode($response->getBody(), true);

if ($data) {
    echo "Weather for " . $city . "\n";
    echo "Temperature: " . round($data["main"]["temp"]) . "°C\n";
    echo "Weather: " . $data["weather"][0]["main"] . "\n";
    echo "Description: " . $data["weather"][0]["description"] . "\n";
    echo "Humidity: " . $data["main"]["humidity"] . "%\n";
    echo "Wind speed: " . $data["wind"]["speed"] . " m/s\n";
} else {
    echo "Error: Could not retrieve weather data for " . $city . "\n";
}

