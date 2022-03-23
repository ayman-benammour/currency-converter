<?php

// Config
include './includes/config.php'

?>

<!-- Header -->
<?php include './chunks/header.php' ?>

    <!-- Header -->
    <main class="main">

        <!-- Grid -->
        <div class="grid">

            <!-- Navigation -->
            <header class="navigation">
                <a href="#" class="convertButton buttonActive">Convert</a>
                <a href="#" class="currenciesButton">Currencies</a>
                <a href="#" class="aboutButton">About</a>
            </header>

            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A laborum porro accusantium incidunt est distinctio ut quasi rem at aspernatur quae culpa consectetur sed ipsam neque, qui nostrum sequi beatae?</p>
            </div>

            <div class="illustration">
                <img src="./assets/images/illustration.svg" alt="Illustration">
            </div>

        </div>

    </main>

    <!-- Content -->
    <section class="content">

        <div class="grid">

            <div class="card cardTop">
                <div class="cardFront">
                    <h2>Choose the currency you would like to convert</h2>
                    <div class="currency">

                    <form action="#" method="GET">
                        <datalist id="currenciesList">
                            <?php foreach ($resultCurrenciesList->response->fiats as $key => $value) { ?>
                                <option value="<?= $value->currency_code ?>"><?= $value->currency_name ?></option>
                            <?php } ?>
                        </datalist>
                        <input type="text" name="automaker" list="currenciesList" />

                    </form>

                    </div>
                </div>
            
                <div class="cardBack"></div>
            </div>
            
            <div class="buttonConvert">
                <img src="./assets/images/button.svg" alt="Button convert">
            </div>

            <div class="card cardBottom">
                <div class="cardFront"></div>
                <div class="cardBack"></div>
            </div>

        </div>

    </section>

<?php include './chunks/footer.php' ?>