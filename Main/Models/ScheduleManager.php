<?php 

require __DIR__ . 'vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheet for schedule');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetID = "1q8P33RtFz-A1963pJ_wqPAsK4AcSA4WyefqOO4AChbs";

$range = "WebsiteInfo!A2:E";
$response = $service->spreadsheets_values->ge

?>