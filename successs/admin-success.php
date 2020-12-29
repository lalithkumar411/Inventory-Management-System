<?php
  require_once('../config/database.php');
  if(isset($_POST['item-submit']) && isset($_POST['item-submit'])!=''){
    $item_type = (!empty($_POST['item-type'])) ? $_POST['item-type']:'What';
    $item_name = (!empty($_POST['item-name'])) ? $_POST['item-name']:'No Name';
    $item_number = (!empty($_POST['item-no'])) ? $_POST['item-no']:1;
    // echo $item_type;
    // echo $item_name;
    // echo $item_number;

    switch ($item_type) {
      case 'raw material':
        $query0 = "SELECT * FROM RawMaterials WHERE name='$item_name'";
        $resss = mysqli_query($conn, $query0);
        if(mysqli_num_rows($resss) == 0){
          $query1 = "INSERT INTO RawMaterials (name , count) VALUES ('$item_name', '$item_number')";
          $res1 = mysqli_query($conn, $query1);
          echo "<h1>Inserted Values. </h1>";
        }
        else {
          $row = mysqli_fetch_assoc($resss);
          $item_number_new = $row["count"] + $item_number;
          $query2 = "UPDATE RawMaterials SET count='$item_number_new' WHERE name='$item_name'";
          $resk = mysqli_query($conn, $query2);
          echo "<h1>ITEM ALREADY PRESENT. UPDATED TABLE.</h1>";
        }
        break;
      case 'part':
        $query0 = "SELECT * FROM Parts WHERE name='$item_name'";
        $resss = mysqli_query($conn, $query0);
        if(mysqli_num_rows($resss) == 0){
          $query1 = "INSERT INTO Parts (name , count) VALUES ('$item_name', '$item_number')";
          $res1 = mysqli_query($conn, $query1);
          echo "<h1>Inserted Values. </h1>";
        }
      else {
        $row = mysqli_fetch_assoc($resss);
        $item_number_new = $row["count"] + $item_number;
        $query2 = "UPDATE Parts SET count='$item_number_new' WHERE name='$item_name'";
        $resk = mysqli_query($conn, $query2);
        echo "<h1>ITEM ALREADY PRESENT. UPDATED TABLE.</h1>";
      }
      break;
      case 'product':
        $query0 = "SELECT * FROM Products WHERE name='$item_name'";
        $resss = mysqli_query($conn, $query0);
        if(mysqli_num_rows($resss) == 0){
          $query1 = "INSERT INTO Products (name , count) VALUES ('$item_name', '$item_number')";
          $res1 = mysqli_query($conn, $query1);
          echo "<h1>Inserted Values. </h1>";
        }
        else {
          $row = mysqli_fetch_assoc($resss);
          $item_number_new = $row["count"] + $item_number;
          $query2 = "UPDATE Products SET count='$item_number_new' WHERE name='$item_name'";
          $resk = mysqli_query($conn, $query2);
          echo "<h1>ITEM ALREADY PRESENT. UPDATED TABLE.</h1>";
        }
        break;
      default:
        echo "INVALID";
        break;
    }


  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/admin-success.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../public/admin-success.js"></script>

    <title>Admin</title>
  </head>

  <body>
    <!-- <hr style="border: 5px solid black; margin:0; background-color:black;"> -->
    <nav class="navbar navbar-light nav-bag bb">
      <div class="container">
        <div class="cl-md-3 allign-center" id="newitem">
          <h2 onclick="addNewItem()">Add New Items</h2>
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="viewitem">
          <h2 onclick="viewItem()">View Items</h2>
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="logoutadmin">
          <h2 onclick="logoutAdmin()">Logout</h2>
        </div>
      </div>
    </nav>

    <hr style="border: 5px solid black; margin:0; background-color:black;">

    <!-- <?php include_once("../config/database.php"); ?> -->

    <?php
      // if(isset($_POST['admin-mail']) && isset($_POST['admin-mail'])!=''){
      //    $admin_mail = $_POST['admin-mail'];
      //    echo "<h1>   ADMIN :- ".$admin_mail."</h1>";
      //
      // }

      // echo "<h1>   ADMIN :-  </h1>"
    ?>
    <div class="outside-part">
      <br><br>
      <div class="container cc">
        <br>
        <h1> Choose To Add New Items:</h1>
        <br><br>
        <div class="inside-part">

          <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group row">
              <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Item Type : </label>
                <select name="item-type" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Choose...</option>
                  <option value="raw material">Raw Material</option>
                  <option value="part">Part</option>
                  <option value="product">Product</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <input type="text" name="item-name" class="form-control" placeholder="Item Name">
                <br>
              </div>
              <div class="col">
                <input type="number" name="item-no" class="form-control" placeholder="Number of Items">
                <br><br>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="item-submit">Add Item</button>
            <br><br><br>
          </form>

        </div>
      </div>
      <br><br>
    </div>
  </body>


</html>
