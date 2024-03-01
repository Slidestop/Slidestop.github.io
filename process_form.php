<?php
// Retrieve form data
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
// ... repeat for q3 to q12

// Set your Google Apps Script URL
$google_script_url = 'https://script.google.com/macros/s/AKfycby21yX5Nd_NNQNElFpNe3TfTPlHnNRiq8O1Ocf6wC77ng1NJ35x0Ge_7-M3ZFYOoefyog/exec';

// Prepare the data to be sent to Google Apps Script
$data = array(
    'q1' => $q1,
    'q2' => $q2,
    // ... repeat for q3 to q12
);

// Use cURL to send the data to Google Apps Script
$ch = curl_init($google_script_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);

// Process the response as needed
echo "<h2>Form Data:</h2>";
echo "<p>Question 1: $q1</p>";
echo "<p>Question 2: $q2</p>";
// ... repeat for q3 to q12
?>
