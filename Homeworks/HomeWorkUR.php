<?php

require_once 'CompanyInfo.php';

$companyInfo = new CompanyInfo();
$regcode = readline("Please enter a regcode for a company:");

$info = $companyInfo->getCompanyInfo($regcode);
if ($info) {
    echo "Company Name: " . $info['name'] . PHP_EOL;
    echo "Registration Code: " . $info['regcode'] . PHP_EOL;
    echo "Address: " . $info['address'] . PHP_EOL;
    echo "Date of registration :" . $info['registered'] . PHP_EOL;
} else {
    echo "No information found for this regcode." . PHP_EOL;
};