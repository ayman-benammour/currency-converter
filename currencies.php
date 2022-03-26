<?php

// Config
include './includes/config.php';
include './includes/handleForm.php';

?>

<!-- Header -->
<?php include './chunks/header.php' ?>
<link rel="stylesheet" href="../assets/styles/currencies.css">
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

                    <div class="caseCurrency">
                        <?= $value->currency_code ?>
                    </div>

                <?php } ?>

            </div>

    </main>

    <!-- Content -->
    <section class="content">

        <!-- Grid -->
        <div class="grid">

        </div>

    </section>


<?php include './chunks/footer.php' ?>