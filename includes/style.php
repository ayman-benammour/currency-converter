<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
?>

.currency<?= $currencyActive ?>
{
    color: blue;
}

<?php echo '<pre>';
print_r($_GET['currency']);
echo '</pre>';?>