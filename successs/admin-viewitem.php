<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta charset="utf-8">

    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
      .outside-part{
        height: auto;
      }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/admin-success.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../public/admin-success.js"></script>


    <title>Old Items</title>
  </head>
  <body>
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

    <div class="outside-part">
      <br><br>
      <div class="row" style="position:relative;">
        <div class="container cc" style="margin-left:400px;">
        <br>
        <br><br>
        <div class="inside-part">
          <h2>Raw Materials:</h2><br>
          <table>
              <tr>
                <th>ID</th>
                <th>ITEM NAME</th>
                <th>COUNT</th>
              </tr>
                <?php
                require_once('../config/database.php');
                $query = "SELECT * FROM RawMaterials";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) > 0){
                  while($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                      <td> <?php echo  $row["id"];?></td>
                      <td> <?php echo  $row["name"];?></td>
                      <td> <?php echo  $row["count"];?></td>
                      <td>
                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="counts" value="<?php echo $row["count"]; ?>">
                          <input type="hidden" name="iName" value="<?php echo  $row["name"];?>">
                          <input type="hidden" name="iType" value="RawMaterials">
                          <!-- <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1" onclick="refreshh()">Buy</button> -->
                        </form>
                      </td>
                    </tr>
                    <?php
                  }
                }
                ?>
          </table>
          <br><br>
          <h2>Parts:</h2>
          <table>
              <tr>
                <th>ID</th>
                <th>ITEM NAME</th>
                <th>COUNT</th>
              </tr>
                <?php
                require_once('../config/database.php');
                $query = "SELECT * FROM Parts";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) > 0){
                  while($row = mysqli_fetch_assoc($res)) {
                    // echo "<td>" . $row["id"]."</td>" "<td>" . $row["name"]. "</td>"  "<td>". $row["count"]."</td>" "<br>";
                    ?>
                    <tr>
                      <td> <?php echo  $row["id"];?></td>
                      <td> <?php echo  $row["name"];?></td>
                      <td> <?php echo  $row["count"];?></td>
                      <td>
                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="counts" value="<?php echo $row["count"]; ?>">
                          <input type="hidden" name="iName" value="<?php echo  $row["name"];?>">
                          <input type="hidden" name="iType" value="Parts">
                          <!-- <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1">Buy</button> -->
                        </form>
                      </td>
                    </tr>

                    <?php
                  }
                }
                ?>
          </table>
          <br><br>
          <h2>Products:</h2>
          <table>
              <tr>
                <th>ID</th>
                <th>ITEM NAME</th>
                <th>COUNT</th>
              </tr>
                <?php
                require_once('../config/database.php');
                $query = "SELECT * FROM Products";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) > 0){
                  while($row = mysqli_fetch_assoc($res)) {
                    // echo "<td>" . $row["id"]."</td>" "<td>" . $row["name"]. "</td>"  "<td>". $row["count"]."</td>" "<br>";
                    ?>
                    <tr>
                      <td> <?php echo  $row["id"];?></td>
                      <td> <?php echo  $row["name"];?></td>
                      <td> <?php echo  $row["count"];?></td>
                      <td>
                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="counts" value="<?php echo $row["count"]; ?>">
                          <input type="hidden" name="iName" value="<?php echo  $row["name"];?>">
                          <input type="hidden" name="iType" value="Products">
                          <!-- <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1">Buy</button> -->
                        </form>
                      </td>
                    </tr>

                    <?php
                  }
                }
                ?>
          </table>
          <br><br>
        </div>
      </div>
      <br><br>
    </div>
  </body>
</html>
