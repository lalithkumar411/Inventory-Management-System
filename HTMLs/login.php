<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../public/login.css">

    <script type="text/javascript" src="../public/login.js"></script>


    <title>User Login</title>
  </head>

  <body>
    <nav class="navbar navbar-light nav-bag bb">
      <div class="container">
        <div class="cl-md-3 allign-center" id="home">
          <h2 onclick="homeFun()">Home</h2>
          <!-- <button type="button" name="Admin">Admin</button> -->
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="admin">
          <h2 onclick="adminFun()">Admin</h2>
          <!-- <button type="button" name="Admin">Admin</button> -->
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="user">
          <h2 onclick="userFun()">Login</h2>
          <!-- <button type="button" name="Registered User">Registered User</button> -->
        </div>
        <span>|</span>
        <div class="cl-md-3 allign-center" id="register">
          <h2 onclick="regFun()">Registere Now</h2>
          <!-- <button type="button" name="Registered User">Registered User</button> -->
        </div>
      </div>

    </nav>
    <div class="container container1">
      <form class="form-signin" action="../config/database.php" method="post">
        <img class="mb-4" src="../public/favicons/favicon.ico" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">User LogIn</h1>
        <br>
        <input type="email" name="usr-email" id="inputEmail" class="form-control pp" placeholder="Email address" required="true">
        <input type="password" name="usr-pass" id="inputPassword" class="form-control pp" placeholder="Password" required="true">
        <br>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <div class="row">
          <button name="log-sub" id="sub" class="btn btn-lg btn-primary btn-block btn-outline-dark" type="submit">Sign in</button>
        </div>
        <div class="row">
          <button name="log-sub" id="fpass" class="btn btn-lg btn-primary btn-block btn-outline-dark" onclick="forgotPass()" type="button">Forgot Password</button>
        </div>
      </form>
    </div>

  </body>

</html>
