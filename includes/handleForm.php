<?php

$apiKey = '525ea3ee8f819d80c7ad9a062052e982';

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

    // ApiCall for the urlConvert
    $urlConvert = 'https://api.currencyscoop.com/v1/convert?from=' . $currencyFrom . '&to=' . $currencyTo . '&amount=' . $currencyAmount . '&api_key=' . $apiKey;
    $resultConvert = apiCall($urlConvert);

    // Errors
    if(empty($currencyFrom))
    {
        $errorMessages[] = 'Missing the base currency you would like to use for your rates';
    }

    if(empty($currencyAmount))
    {
        $errorMessages[] = 'Missing the amount to convert';
    }

    if(empty($currencyTo))
    {
        $errorMessages[] = 'Missing the currency you would like to convert to';
    }

    // echo '<pre>';
    // print_r($resultConvert);
    // echo '</pre>';
}

// ApiCall for the urlCurrenciesList
$urlCurrenciesList = 'https://api.currencyscoop.com/v1/currencies?api_key=' . $apiKey;
$resultCurrenciesList = apiCall($urlCurrenciesList);
