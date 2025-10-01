

<?php 

require  '../vendor/autoload.php';

$data = [];

$client = new \Google_Client();
$client->setApplicationName('Google Sheet for schedule');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig('/var/www/HouseToHomes_Website/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetID = "1LSTfVZs9lNUZMB5AOQP-DQMsDJlxOsk5Dqk1pJ53cNI";

$TopParagraphRange = "IndexPage!C3:C23";
$ServiceCardInfoRange = "IndexPage!E3:F23";
$TestimonialsRange = "IndexPage!H3:I23";

try {
    $ServiceCardResponse = $service->spreadsheets_values->get($spreadsheetID, $TopParagraphRange);
    $data['TopParagraph'] = $ServiceCardResponse->getValues() ?: ["No Data Found"];
} catch (Exception $e) {
    $data['error'] = $e->getMessage();
}
try {
    $ServiceCardResponse = $service->spreadsheets_values->get($spreadsheetID, $ServiceCardInfoRange);
    $data['ServiceCards'] = $ServiceCardResponse->getValues() ?: ["No Data Found"];
} catch (Exception $e) {
    $data['error'] = $e->getMessage();
}
try {
    $TestimonialsResponse = $service->spreadsheets_values->get($spreadsheetID, $TestimonialsRange);
    $data['Testimonials'] = $TestimonialsResponse->getValues() ?: ["No Data Found"];
} catch (Exception $e) {
    $data['error'] = $e->getMessage();
}

return $data;


?>
