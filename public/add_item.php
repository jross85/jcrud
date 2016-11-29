<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<!--END NAV HERE -->

<center><h2>Add</h2></center>

<form class="form-horizontal" action="insert.php" method="post">
  <div class="form-group">
    <label for="item_name" class="col-lg-2 control-label">Item name</label>
    <div class="col-lg-10">
      <input class="form-control" type="text" name="item_name" value="">

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
