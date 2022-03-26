<?php

// Config
include './includes/config.php';
include './includes/handleForm.php';

?>

<!-- Header -->
<?php include './chunks/header.php' ?>
<link rel="stylesheet" href="../assets/styles/about.css">
</head>
<body>

    <!-- Header -->
    <main class="main">

        <!-- Grid -->
        <div class="grid">

            <!-- Navigation -->
            <header class="navigation">
                <a href="./index.php" class="convertButton">Convert</a>
                <a href="./currencies.php" class="currenciesButton">Currencies</a>
                <a href="./about.php" class="aboutButton buttonActive">About</a>
            </header>

            <div class="text">

                <!-- DEVELOPED BY -->
                <h1>Developed by <a target="_blank" href="https://github.com/ayman-benammour">Ayman Benammour</a></h1>
                <br>
                <br>

                <!-- DESIGN INSPIRATION -->
                <h1>Design inspiration : <a target="_blank" href="https://dribbble.com/shots/17624368-Converter-Website">Converter Website by Izmahsa for Bolddreams</a></h1>
                <br>
                <br>

                <!-- API USED -->
                <h1>API used : <a target="_blank" href="https://currencyscoop.com">CurrencyScoop</a></h1>
                <br>
                <br>

            </div>

    </main>

    <!-- Content -->
    <section class="content">

        <!-- Grid -->
        <div class="grid">

        </div>

    </section>


<?php include './chunks/footer.php' ?>