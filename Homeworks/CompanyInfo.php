<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

class CompanyInfo {
    private $client;
    private $resource_id;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'https://data.gov.lv/dati/lv/api/3/action/',
            'verify' => false,
        ]);
        $this->resource_id = '25e80bf3-f107-4ab4-89ef-251b5b9374e9';
    }

    public function getCompanyInfo($regcode) {
        $url = "datastore_search?q=$regcode&resource_id=$this->resource_id";
        $response = $this->client->get($url);
        $json = json_decode($response->getBody(), true);

        if ($json && $json['success']) {
            $records = $json['result']['records'];
            if (count($records) > 0) {
                return $records[0];
            }
        }

        return null;
    }
}
