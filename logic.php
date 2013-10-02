<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
$square = 4 * 4;
?>

<?php
$quarter = .25;
$dime    = .10;
$nickel  = .05;

$calculate_total = ($quarter * 3) + ($dime * 4) + ($nickle * 1);
?>
<?php
$age = 10;

if($age <= 18) {
   $person_type = "kiddo";
}
else {
   $person_type = "adult";
}
?>

<?php
function calculate_total($subtotal, $discount, $shipping_method) {

    if($shipping_method == 'priority') {
        $shipping_rate = 5;
    }
    elseif($shipping_method == 'express') {
        $shipping_rate = 15;
    }

    $tax = .09 * $subtotal;

    $total = $subtotal + $shipping_rate - $discount;

    return $total;

}
?>

<?php 
date_default_timezone_set('America/New_York'); 
$day = date('g');
?>
