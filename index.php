<?php

// Config
include './includes/config.php';
include './includes/handleForm.php';

?>

<!-- Header -->
<?php include './chunks/header.php' ?>
<title>Convert • Currency converter</title>
</head>
<body>

    <!-- Header -->
    <main class="main">

        <!-- Grid -->
        <div class="grid">

            <!-- Navigation -->
            <header class="navigation">
                <a href="./index.php" class="convertButton buttonActive">Convert</a>
                <a href="./currencies.php" class="currenciesButton">Currencies</a>
                <a href="./about.php" class="aboutButton">About</a>
            </header>

            <div class="description">
                <span>Convert</span>
            </div>

            <div class="illustration">
                <img src="./assets/images/illustration.svg" alt="Illustration">
            </div>

        </div>

    </main>

    <!-- Content -->
    <section class="content">

        <!-- Grid -->
        <div class="grid">

            <!-- Form -->
            <form action="#" method="GET">

                <!-- Card top -->
                <div class="card cardTop">

                    <div class="cardFront">

                        <datalist id="currenciesList">
                            <?php foreach ($resultCurrenciesList->response->fiats as $key => $value) { ?>
                                <option value="<?= $value->currency_code ?>"><?= $value->currency_name ?></option>
                            <?php } ?>
                        </datalist>

                        <!-- Currency from -->
                        <div class="currencyFrom">
                            <h2><span>From •</span> Choose the base currency you would like to use for your rates.</h2>
                            <input placeholder="USD" maxlength="3" type="text" list="currenciesList" name="currencyFrom" value="<?= $currencyFrom ?>">
                        </div>

                        <!-- Currency amount -->
                        <div class="currencyAmount">
                            <h2><span>Amount •</span> Choose the amount to convert</h2>
                            <input placeholder="100" type="number" name="currencyAmount" value="<?= $currencyAmount ?>">
                        </div>

                        <!-- Currency to -->
                        <div class="currencyTo">
                            <h2><span>To •</span> Choose the currency you would like to convert to</h2>
                            <input placeholder="EUR" maxlength="3" type="text" list="currenciesList" name="currencyTo" value="<?= $currencyTo ?>">
                        </div>

                    </div>

                    <div class="cardBack"></div>

                </div>

                <!-- Button convert -->
                <div class="buttonConvert">
                    <input type="submit" value="">
                </div>

                <!-- Card bottom -->
                <div class="card cardBottom">

                    <div class="cardFront">

                        <?php if(!empty($errorMessages)) { ?>
                            
                            <!-- Messages error -->
                            <div class="errors">
                                <h2>Errors :</h2>
                                <?php foreach ($errorMessages as $message) { ?>
                                    <p><?= $message ?></p>
                                <?php } ?>
                            </div>

                        <?php } elseif(!empty($_GET)) { ?>

                            <!-- Result -->
                            <div class="result">
                                <h2>The result is : <span><?= round($resultConvert->response->value, 2) ?></span>&NonBreakingSpace;<?= $resultConvert->response->to?></h2>
                            </div>

                        <?php } ?>

                    </div>
                    
                    <div class="cardBack"></div>

                </div>

            </form>

        </div>

    </section>

<?php include './chunks/footer.php' ?>