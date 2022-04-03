<?php

$currencyFrom = '';
$currencyAmount = '';
$currencyTo = '';

if(!empty($_GET))
{
    $errorMessages = [];

    // Sanatize data
    $currencyFrom = trim(htmlentities(strtoupper($_GET['currencyFrom'])));
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
    elseif(!property_exists($resultCurrenciesList->response->fiats, $currencyFrom ))
    {
        $errorMessages[] = 'The base currency you are looking for doesn&#8216t exist';
    }

    if(empty($currencyAmount))
    {
        $errorMessages[] = 'Missing the amount to convert';
    }

    if(empty($currencyTo))
    {
        $errorMessages[] = 'Missing the currency you would like to convert to';
    }
    elseif(!property_exists($resultCurrenciesList->response->fiats, $currencyTo ))
    {
        $errorMessages[] = 'The currency to convert you are looking for doesn&#8216t exist';
    }
}
