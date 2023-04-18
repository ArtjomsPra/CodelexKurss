<?php
class CompanyInfo {
    private $resource_id;

    public function __construct() {
        $this->resource_id = '25e80bf3-f107-4ab4-89ef-251b5b9374e9';
    }

    public function getCompanyInfo($regcode) {
        $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q=$regcode&resource_id=$this->resource_id";
        $data = file_get_contents($url);
        $json = json_decode($data, true);

        if ($json && $json['success']) {
            $records = $json['result']['records'];
            if (count($records) > 0) {
                return $records[0];
            }
        }

        return null;
    }
}

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
}