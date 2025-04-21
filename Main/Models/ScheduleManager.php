

<?php 

require  '../../vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheet for schedule');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig('../../credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetID = "1q8P33RtFz-A1963pJ_wqPAsK4AcSA4WyefqOO4AChbs";

$range = "ContactInfo!A2:D";

$values = [
    $_POST['name'],  $_POST['phone'], $_POST['email'], $_POST['message']
];

try{
    $body = new Google_Service_Sheets_ValueRange([
    'values' => [$values]
    ]);
    $params = [
    'valueInputOption' => 'RAW'
    ];
    $insert = [
        "insertDataOption" => "INSERT_ROWS"
    ];
        //executing the request
        $result = $service->spreadsheets_values->append(
            $spreadsheetID, 
            $range, 
            $body, 
            $params,
            $insert);
        header("location:../index.php");
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}


?>
