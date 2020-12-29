<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "inventory";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_errno();
  }
  // echo "<h1> Connection Successful </h1>";


  if(isset($_POST['admin-mail']) && isset($_POST['admin-mail'])!='' && isset($_POST['admin-pass']) && isset($_POST['admin-pass'])!='' ){
     $admin_mail = $_POST['admin-mail'];
     $admin_pass = $_POST['admin-pass'];

     $query = "SELECT * FROM Admins WHERE admin_username = '$admin_mail' AND admin_password = '$admin_pass'";
     $result = mysqli_query($conn, $query);
     if(mysqli_num_rows($result) == 1){
       // echo "<h1>   ADMIN :- ".$admin_mail."</h1><br>";
       // echo "<h1>   ADMIN :- ".$admin_pass."</h1>";
       header('Location: ../successs/admin-success.php');
       // echo "Hello Admin";
     }
     else{
       echo "<h1>Invalid Username or Password. Go back and try again.</h1>";
     }

  }

  // if(isset($_POST['regsubmit']) && isset($_POST['regsubmit'])!=''){
  //   $regname = $_POST['regname'];
  //   $regnumber = $_POST['regnumber'];
  //   $regmail = $_POST['regemail'];
  //   $regpass = $_POST['regpass'];
  //
  //   echo $regname;
  //   echo $regnumber;
  //   echo $regmail;
  //   echo $regpass;
  //
  //   $query = "INSERT INTO Users ( name, phone, username, password) VALUES ( '$regname', '$regnumber', '$regmail', '$regpass')";
  //
  //
  //   $res = mysqli_query($conn, $query);
  //   // if (mysqli_query($conn, $query){
  //   //   echo "<h1>Success</h1>";
  //   // })
  // }

  if(isset($_POST['log-sub']) && isset($_POST['log-sub'])!=''){
    $username = $_POST['usr-email'];
    $usrpass = $_POST['usr-pass'];
    echo "<h1>".$username. "</h1>";
    $query = "SELECT * FROM Users WHERE username = '$username' AND password = '$usrpass'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)) {
      header('Location: ../successs/logic-success.php');
      echo "<h1>LOGIN SUCCESSFUL</h1>";
    }
    else {
      echo "<h1> INVALID USERNAME OR PASSWORD. GO BACK AND TRY AGAIN.</h1>";
    }
  }

  if(isset($_POST['subbb']) && isset($_POST['subbb'])!=''){
    echo $GLOBALS['ide'];
    echo $GLOBALS['type'];
    header('Location: ../successs/admin-success.php');
  }



  // echo "<h1>   ADMIN :-  </h1>"
?>
