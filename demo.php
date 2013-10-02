<!DOCTYPE html>
<html>
<?php
// Turn off all error reporting
error_reporting(0);
?>

<head>
    <?php require_once('logic.php'); ?>
</head>

<?php
$favorite_color = "red";
?>

<body>
        The square of 4 is <?=$square?> <br>
		My favorite color is <?=$favorite_color?> <br>
		<?php echo $favorite_color;?> <br>
		I have this much money: <?=$calculate_total?> <br>
        You are a <?=$person_type?> <br>
		Your total is <?=calculate_total(10,3,'priority')?> <br>
		Today is <?=$day?>

</body>
</html>
