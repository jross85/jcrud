<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!--END NAV HERE -->

<center><h2>Item Deleted</h2></center>

<?php
delete_item();

 ?>
 <script type="text/javascript">
 function progressBar() {
   var bar = getElementById("myBar")
 }

 </script>
 <div id="myBar" class="progress progress-striped active">
   <div onload="move()" class="progress-bar" style="width:0%"></div>
 </div>
 <?php include("../includes/layout/footer.php"); ?>
