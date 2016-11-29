<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!--END NAV HERE -->
<?php
$product = $_GET["item_name"];
$product_description = $_GET["item_description"];
$product_price = $_GET["price"];
 ?>
<center><h2><?php echo $product ?></h2></center><br /><br />

<p style="font-size:20px;"><?php echo $product_description; ?>
<br />
<p style="font-size:20px;"><?php echo "$" . $product_price; ?>



 <?php include("../includes/layout/footer.php"); ?>
