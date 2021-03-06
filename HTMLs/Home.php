<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/Home.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <title>Home-TomyJr</title>

    <script type="text/javascript" src="../public/Home.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-light nav-bag bb">
      <div class="container">
        <div class="cl-md-4 allign-center" id="admin">
          <h2 onclick="adminFun()">Admin</h2>
          <!-- <button type="button" name="Admin">Admin</button> -->
        </div>
        <span>|</span>
        <div class="cl-md-4 allign-center" id="user">
          <h2 onclick="userFun()">Login</h2>
          <!-- <button type="button" name="Registered User">Registered User</button> -->
        </div>
        <span>|</span>
        <div class="cl-md-4 allign-center" id="register">
          <h2 onclick="regFun()">Registere Now</h2>
          <!-- <button type="button" name="Registered User">Registered User</button> -->
        </div>
      </div>

    </nav>
    <!-- <div class="mid smooth-col">
      <h1>Hi! This is the Home Page.</h1>
      <p>The above two links in navbar directs into a new page on clicked.</p>
      <p>Below are demonstration of carousal and card elements.</p>
    </div> -->
    <div class="container-fluid nopadding aa" style="margin:0;">
      <div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-color:green;">
              <h1>Hi! This is the Home Page.</h1>
              <h3>The above two links in navbar directs into a login page on clicked.</h3>
            </div>
            <div class="carousel-item" style="background-color:#f48200;">
              <h1>Hi! This is the Home Page.</h1>
              <h3>This is demonstration of carousal elements.</h3>
            </div>
            <div class="carousel-item" style="background-color:#ba9fe7;">
              <h1>Hi! This is the Home Page.</h1>
              <h3>Below is demonstration of card elements.</h3>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="container centr" style="margin-top:100px; border:2px; margin-bottom:100px;">
      <h1>The Founders Of This Page</h1>
      <br><br><br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../public/images/mews3.jpg" alt="Card image cap">
        <div class="card-body">
          <h1 class="card-text">Mews Zucerberg</h1>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../public/images/dog-img.jpg" alt="Card image cap">
        <div class="card-body">
          <h1 class="card-text">Scooby Bezos</h1>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../public/images/rabbit.jpg" alt="Card image cap">
        <div class="card-body">
          <h1 class="card-text">RaBBitT Gates</h1>
        </div>
      </div>
    </div>

  </body>

</html>
