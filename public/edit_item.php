<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<!--END NAV HERE -->
<?php
$id = $_GET["id"];
$item_name = urlencode($_GET["item_name"]);
$item_string = preg_replace('/[^\p{L}\p{N}\s]/u', '&nbsp;', $item_name);
 ?>
<center><h2>Edit Item #<?php echo $id; ?> (<?php echo $item_string; ?>)</h2></center>

<form class="form-horizontal" action="update.php?id=<?php echo $id; ?>" method="post">
  <div class="form-group">
    <label for="item_name" class="col-lg-2 control-label">Item name</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="item_name" value=<?php echo $item_string; ?>>

    </div>
  </div>
  <!--end DIV -->
  <div class="form-group">
    <label for="position" class="col-lg-2 control-label">Position</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="position" value="">

    </div>
  </div>
  <!-- end DIV -->
  <div class="form-group">
    <label for="item_description" class="col-lg-2 control-label">Item description</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="item_description" value="">

    </div>
  </div>
  <!-- end DIV -->
  <div class="form-group">
    <label for="visible" class="col-lg-2 control-label">Visible</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="visible" value="">

    </div>
  </div>
  <!-- end DIV -->
  <div class="form-group">
    <label for="price" class="col-lg-2 control-label">Price</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="price" value="">

    </div>
  </div>
  <!-- end DIV -->
  <div class="form-group">
     <div class="col-lg-10 col-lg-offset-10">
       <button type="reset" class="btn btn-default">Cancel</button>
       <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
     </div>
</form>

 <?php include("../includes/layout/footer.php"); ?>

 <!--item_name, position, item_description, visible, price -->
