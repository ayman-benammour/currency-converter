<?php

// Config
include './includes/config.php';

$getCurrency = $_GET['currency'];

// echo '<pre>';
// print_r($resultCurrenciesList->response->fiats->$getCurrency->countries[0]);
// echo '</pre>';
// exit;




?>

<!-- Header -->
<?php include './chunks/header.php' ?>
<script src="./assets/js/googleMap.js"></script>
<link rel="stylesheet" href="../assets/styles/currencies.css">
<style>
    .main .grid .allCurencies .currency<?=  $getCurrency ?>
    {
        background-color: #357af3;
        color: #ffffff;
        font-weight: bold;
    }
</style>

</head>
<body>

    <!-- Header -->
    <main class="main">

        <!-- Grid -->
        <div class="grid">

            <!-- Navigation -->
            <header class="navigation">
                <a href="./index.php" class="convertButton">Convert</a>
                <a href="./currencies.php" class="currenciesButton buttonActive">Currencies</a>
                <a href="./about.php" class="aboutButton">About</a>
            </header>

            <div class="allCurencies">

                <?php foreach ($resultCurrenciesList->response->fiats as $key => $value) { ?>

                    <a href="./currencies.php?currency=<?= $value->currency_code ?>" class="caseCurrency currency<?= $value->currency_code ?>">
                        <?= $value->currency_code ?>
                    </a>

                <?php } ?>

            </div>

    </main>

    <?php if(!empty($_GET)) { $_GET['currency'] ?>

        <!-- Content -->
        <section class="content">

            <!-- Grid -->
            <div class="grid">

                <div class="card">

                    <div class="cardFront">

                        <!-- Title -->
                        <div class="title">
                            <div class="currencyName"><?= $resultCurrenciesList->response->fiats->$getCurrency->currency_name ?></div>
                            <div class="currencyCode"><?= $resultCurrenciesList->response->fiats->$getCurrency->currency_code ?></div>
                        </div>

                        <?php if(!empty($resultCurrenciesList->response->fiats->$getCurrency->countries[0])) { ?>

                            <!-- Countries -->
                            <div class="countries">

                                <h2>Countries :</h2>

                                <div class="allCountries">
                                    <?php
                                        foreach ($resultCurrenciesList->response->fiats->$getCurrency->countries as $key => $country) 
                                        {
                                            $urlFlags = 'https://flagcdn.com/en/codes.json';
                                            $resultFlags = apiCall($urlFlags);
                                            $arrayFlags = array_flip(json_decode(json_encode($resultFlags), true));

                                            if(array_key_exists($country, $arrayFlags))
                                            { 
                                                $srcFlag = 'https://flagcdn.com/' . $arrayFlags[$country] . '.svg';
                                            }
                                            else
                                            {
                                                $srcFlag = '.';
                                            }
                                    ?>

                                        <div class="country">

                                            <h3><?= $country ?></h3>

                                            <?php if(array_key_exists($country, $arrayFlags)) { ?>
                                                <img src="<?= $srcFlag ?>" alt="Flag of <?= $country ?>" width="30" height="auto">
                                            <?php } ?>

                                        </div>

                                    <?php } ?>
                                </div>

                            </div>

                            <!-- Map -->
                            <div class="map"></div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </section>

    <?php } else { ?>

        <!-- Content -->
        <section class="content">
        </section>

    <?php } ?>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXYG7Z85jOXmd4Lb8MvmvG3EHlEtmFHpE&callback=initMap&v=weekly&channel=2"
        async
    ></script>

<?php include './chunks/footer.php' ?>