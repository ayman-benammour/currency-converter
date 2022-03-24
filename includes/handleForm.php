<?php

if(!empty($_GET))
{
    $errorMessages = [];
    
    // Debug
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    // Sanatize data
    $currencyFrom = strtoupper(trim(htmlentities($_GET['currencyFrom'])));
    $currencyAmount = (int)$_GET['currencyAmount'];
    $currencyTo = strtoupper(trim(htmlentities($_GET['currencyTo'])));

    // Errors
    if(empty($currencyFrom))
    {
        $errorMessages[] = 'Missing currencyFrom';
    }

    if(empty($currencyAmount))
    {
        $errorMessages[] = 'Missing currencyAmount';
    }

    if(empty($currencyTo))
    {
        $errorMessages[] = 'Missing currencyTo';
    }
}

$apiKey = '525ea3ee8f819d80c7ad9a062052e982';

$urlCurrenciesList = 'https://api.currencyscoop.com/v1/currencies?api_key=' . $apiKey;
$resultCurrenciesList = apiCall($urlCurrenciesList);

$urlConvert = 'https://api.currencyscoop.com/v1/convert?from=' . $currencyFrom . '&to=' . $currencyTo . '&amount=' . $currencyAmount . '&api_key=' . $apiKey;
$resultConvert = apiCall($urlConvert);

// echo '<pre>';
// print_r($resultConvert);
// echo '</pre>';