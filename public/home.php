<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!--END NAV HERE -->
<div id="someStuff" class="">

<center><h2>Items</h2></center>

<?php echo find_all_items(); ?>

</div>

 <?php include("../includes/layout/footer.php"); ?>
