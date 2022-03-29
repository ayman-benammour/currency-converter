<?php

// Config
include './includes/config.php';




$currencyActive = $_GET['currency'];

echo '<pre>';
print_r($currencyActive);
echo '</pre>';

?>

<!-- Header -->
<?php include './chunks/header.php' ?>
<link rel="stylesheet" href="../assets/styles/currencies.css">
<link rel="stylesheet" href="./includes/style.php">
<script src="./assets/js/script.js"></script>
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

    <?php if(!empty($_GET)) { ?>

        <!-- Content -->
        <section class="content">

            <!-- Grid -->
            <div class="grid">

                <div class="card">

                    <div class="cardFront">
                        <div class="map"></div>
                    </div>

                    <div class="cardBack"></div>

                </div>

            </div>

        </section>

    <?php } else { ?>

        <!-- Content -->
        <section class="content">
        </section>

    <?php } ?>




    
    <script
      src="https://maps.googleapis.com/maps/api/js?key=///&callback=initMap&v=weekly&channel=2"
      async
    ></script>
<?php include './chunks/footer.php' ?>