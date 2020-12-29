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
    <!-- <script type="text/javascript">
      function logoutUser(){
        document.getElementById("logout-usr").addEventListener("click", function(e){
          window.location.href="/project-1/login.php";
        })
      }

      function samePage(){
        document.getElementById("samepage").addEventListener("click", function(e){
          window.location.href="/project-1/successs/logic-success.php";
        })
      }
    </script> -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/admin-success.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../public/login-success.js"></script>

    <!-- <script type="text/javascript">
      function rawDell(id,no){

        var buyNo = document.getElementById("buy-count1").value;
        alert(buyNo);
        document.cookie = "myJavascriptVar=" + id ;
        alert(document.cookie);



        <?php
          // $idp = "<script>doccument.write(buyNo);</script>";
          // echo "<script>alert(".$_POST['buyNo'].");</script>";
        ?>


      }
      <?php
        // $myPhpVar= $_COOKIE['myJavascriptVar'];
        // var_dump($myPhpVar);
      ?>
    </script> -->


    <title>Old Items</title>
  </head>
  <body>
    <nav class="navbar navbar-light nav-bag bb">
      <div class="container">
        <div class="cl-md-3 allign-center" id="samepage">
          <h2 onclick="samePage()">Inventory Items</h2>
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="logout-usr">
          <h2 onclick="logoutUser()">Logout</h2>
        </div>
        <!-- <span>|</span>
        <div class="cl-md-3 allign-center" id="olditem">
          <h2 onclick="addOldItem()">View Items</h2>
        </div> -->
      </div>
    </nav>
    <hr style="border: 5px solid black; margin:0; background-color:black;">

    <div class="outside-part">
      <br><br>
      <div class="row" style="position:relative;">
        <div class="container cc col-9" style="margin-left:400px;">
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
                          <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1" onclick="refreshh()">Buy</button>
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
                          <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1">Buy</button>
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
                          <input type="number" name="buy-count" value="">
                          <button id="b1" type="submit" name="subbb1">Buy</button>
                        </form>
                      </td>
                    </tr>

                    <?php
                  }
                }
                ?>
          </table>
        </div>
      </div>
        <div class="container col-3"
        style="background-color: #fcf8e8;
        border-radius: 20px;
        margin-top: 100px;
        width: 800px; width:450px; height:200px; padding-top:50px; padding-right:50px;">
          <h1>Items Bought -</h1>
          <?php
            require_once('../config/database.php');
            if(isset($_POST['subbb1'])){

              // echo $GLOBALS['ide'];
              // echo $GLOBALS['type'];
              $oldCount = $_POST['counts'];
              $buyCount = $_POST['buy-count'];
              $iId = $_POST['id'];
              $newCount = $oldCount - $buyCount;
              // echo $newCount;
              if($newCount > 0){
                $querr = "UPDATE ".$_POST['iType']." SET count='$newCount' WHERE id='$iId'";
                // echo $querr;
                $result = mysqli_query($conn, $querr);
                header("Refresh:0; url=/project-1(PHP)/successs/logic-success.php");
                $page = $_SERVER['PHP_SELF'];
                header("Refresh:0; url=$page");
                echo "Item Type - ".$_POST['iType']."<br>";
                echo "Item Name - ".$_POST['iName']."<br>";
                echo "Buy Count - ".$_POST['buy-count'];
              }
              else if($newCount == 0){
                $querr = "DELETE FROM ".$_POST['iType']." WHERE id='$iId'";
                $result = mysqli_query($conn, $querr);
                // header("Refresh:0");
                echo "Item Type - ".$_POST['iType']."<br>";
                echo "Item Name - ".$_POST['iName']."<br>";
                echo "Buy Count - ".$_POST['buy-count'];
              }
              else{
                echo "YOU CANNOT BUY SO MANY ITEMS.";
              }

              // echo "Item name-".$_POST['iName'];
              // echo "<br> Buy Count-".$_POST['buy-count'];
              // echo "<br> Item Type-".$_POST['iType'];
              // echo $_POST['id'];
              // header('Location: /project-1/successs/trial-error.php');
            }
          ?>
        </div>
      </div>
      <br><br>
    </div>
  </body>
</html>
