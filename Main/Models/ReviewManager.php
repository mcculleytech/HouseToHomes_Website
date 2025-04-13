<?php

require_once 'vendor/autoload.php'; 

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

/**
 * Submits a review to the specified Google Sheet
 *
 * @param string $spreadsheetId  The ID of the target Google Sheet
 * @param string $range          The range in the sheet to append data to (e.g., "Reviews!A1")
 * @param string $name           The reviewer's full name
 * @param string $email          The reviewer's email address
 * @param int    $rating         The star rating (1-5)
 * @param string $message        The review message content
 * @return bool                  True if the submission was successful, false otherwise
 */
function submitReview($spreadsheetId, $range, $name, $email, $rating, $message) {
    // Step 1: Set up Google Client
    $client = new Client();
    $client->useApplicationDefaultCredentials(); // Assumes GOOGLE_APPLICATION_CREDENTIALS is set
    $client->addScope(Sheets::SPREADSHEETS);

    // Step 2: Initialize the Sheets API service
    $service = new Sheets($client);

    // Step 3: Prepare the data
    $values = [
        [$name, $email, $rating, $message, date("Y-m-d H:i:s")]
    ];

    $body = new ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    try {
        // Step 4: Append the review to the sheet
        $result = $service->spreadsheets_values->append(
            $spreadsheetId,
            $range,
            $body,
            $params
        );

        // Step 5: Return success if cells were updated
        return $result->getUpdates()->getUpdatedCells() > 0;

    } catch (Exception $e) {
        error_log('Error submitting review to Google Sheets: ' . $e->getMessage());
        return false;
    }
}
