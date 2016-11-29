<?php
function find_all_items() {
global $connection;
  $query = "SELECT * ";
        $query .= "FROM items ";
        $query .= "WHERE VISIBLE = 1 ";
        $query .= "ORDER BY upvotes DESC";

        $item_set = mysqli_query($connection, $query);

        $output = "<ul style=\"list-style-type:none\">";

        while ($item = mysqli_fetch_assoc($item_set)) {
          $output .= "<li>";
          $output .= "<a href=product_page?id=" . $item["id"] ."&item_name=". urlencode($item["item_name"]) . "&item_description=" . urlencode($item["item_description"]) . "&price=" . urlencode($item["price"]) . ">";
          $output .= "<h4>";
          $output .= $item["item_name"];
          $output .= "</h4>";
          $output .= "</a>";
          $output .= $item["item_description"];
          $output .= " - ";
          $output .= " $";
          $output .= $item["price"];
          $output .= "<a style=\"float:right;margin-left:5px;\"class=\"btn btn-danger\" href=delete_item?id=" . $item["id"] .
          ">Delete</a>";
          $output .= "  ";
          $output .= "<a style=\"float:right;margin-left:5px;\"class=\"btn btn-primary\" href=edit_item?id=" . $item["id"] . "&item_name=" . urlencode($item["item_name"]) .
          ">Edit</a>";
          $output .= "<a style=\"float:right;\"class=\"btn btn-success\" href=upvote_item?id=" . $item["id"] . "&item_name=" . urlencode($item["item_name"]) . "&upvote_item=" . $item["upvotes"] .
          ">Upvote</a>";
          $output .= "<br /><br /><hr>";
          $output .= "</li>";
        }
        mysqli_free_result($item_set);

        return $output;
}

function insert_record() {
  if (isset($_POST['submit'])) {
    global $connection;
    $item_name = mysqli_real_escape_string($connection, $_POST['item_name']);
    $position = mysqli_real_escape_string($connection, $_POST['position']);
    $item_description = mysqli_real_escape_string($connection, $_POST['item_description']);
    $visible = mysqli_real_escape_string($connection, $_POST['visible']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);

    //run query
    $query = "INSERT INTO items(item_name, position, item_description, visible, price";
    $query .= ") VALUES('$item_name', '$position', '$item_description', '$visible', '$price')";

    $insert_result = mysqli_query($connection, $query);
    echo "<h2>Success! Item added</h2>";
    header("Refresh:2;url=" . "home.php");
    ?>
  <?php
  } else {
    echo "<p style=\"padding-left: 20px;\">Please fill out form.</p>";
  }

  //mysqli_free_result($insert_result);

  return $insert_result;
}

function delete_item() {
  if (isset($_GET["id"])) {
  global $connection;
  $id = $_GET["id"];

  $query = "DELETE FROM items";
  $query .= " WHERE id=" . $id;
  $query .= " LIMIT 1";

  $delete_result = mysqli_query($connection, $query);

  header("Refresh:2;url=" . "home.php");
} else {
  echo "<h2>No such item in our database. sorry</h2>";
  header("Location: " . "add_item.php");
}
return $delete_result;

}
function edit_item() {
  if (isset($_POST["submit"])) {

    global $connection;
    $id = $_GET["id"];
    $item_name = mysqli_real_escape_string($connection, $_POST['item_name']);
    $position = mysqli_real_escape_string($connection, $_POST['position']);
    $item_description = mysqli_real_escape_string($connection, $_POST['item_description']);
    $visible = mysqli_real_escape_string($connection, $_POST['visible']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);

    $query = "UPDATE items SET ";
    $query .= "item_name = '$item_name', position = '$position', item_description = '$item_description', visible = '$visible', price = '$price' WHERE id= $id LIMIT 1";
    $update_result = mysqli_query($connection, $query);
    echo "<h2>Update happened it looks like</h2>";
    var_dump($item_name);
  } else {
    echo "<h2>Update request failed. Try again later</h2>";
  }

  return $update_result;

}
function upvote_item() {
  if (isset($_GET["id"])) {
  global $connection;
  $id = $_GET["id"];
  $upvote = $_GET["upvote_item"];
  $vote = $upvote + 1;

    $query = "UPDATE items SET upvotes = $vote WHERE id = $id LIMIT 1";

    $upvote_result = mysqli_query($connection, $query);

    header("Refresh:1;url=" . "home.php");
  }
}
 ?>
