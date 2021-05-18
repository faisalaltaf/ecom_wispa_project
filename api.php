
<?php

require "stripe-php-master/init.php";

$publishableKey="pk_test_51H4YRCA5a8JqqOnuTsqeRsnDB9sHHUE9nhwFpK5kg7GU2jGvskv61PvoCgji0XFeUz2XDvo0WAJVEGXhSzgG5lhw00VzE89Goj";

$secretKey="sk_test_51H4YRCA5a8JqqOnuPodusl0b3lZHviNiNDwUSbXuk1PYdWeMdbsBi6Z7mZQHz2hU9PlNLjigsunWMIOVaDWLdDnr00QI48Yqlp";

\Stripe\Stripe::setApiKey($secretKey);
?>