<?php

use League\Csv\Reader;
use League\Csv\Statement;

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$csv = Reader::createFromPath($argv[1]);
$stmt = Statement::create()->limit(10);
$records = $stmt->process($csv);

foreach ($records as $csvRow) {
    try {
        $httpResponse = $client->get($csvRow[0]);
        if ($httpResponse->getStatusCode() >= 400)
            throw new \Exception();
    } catch (\Throwable $th) {
        echo $csvRow[0] . PHP_EOL;
    }
}
