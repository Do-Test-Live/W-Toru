<html>

<script>
    let apikey = '29e55693-feaf-43fa-94a8-d2c4b1fd9fea';
    request('GET','https://pro-api.coinmarketcap.com/v2/cryptocurrency/price-performance-stats/latest?CMC_PRO_API_KEY=' + apikey).then((r1) => {
        console.log(r1.target.responseText);
    }).catch()

    function request(method, url){
        return new Promise(function (resolve, reject){
            var xhr = new XMLHttpRequest();
            xhr.open(method, url);
            xhr.onload = resolve;
            xhr.onerror = reject;
            xhr.send();
        })
    }
</script>
</html>


<?php
/*$url = 'https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
    'start' => '1',
    'limit' => '5000',
    'convert' => 'USD'
];

$headers = [
    'Accepts: application/json',
    'X-CMC_PRO_API_KEY: b54bcf4d-1bca-4e8e-9a24-22ff2c3d462c'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
print_r(json_decode($response)); // print json decoded response
curl_close($curl); // Close request
*/?>