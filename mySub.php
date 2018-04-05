
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="hhh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron">
      <h1>
        <?php
          echo "My name is " . $_POST["myName"];
         ?>
      </h1>
      <div class="col-lg-1-12">
        <img class=img-responsive src="image.jpg" alt="">
      </div>

      </div>
      <div id="carousel-generic" class="carousel slide col-lg-1-12" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-generic" data-slide-to="1"></li>
          <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="1.jpg" alt="">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="2.jpg" alt="">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="3.jpg" alt="">
            <div class="carousel-caption">

            </div>
          </div>

        </div>



        <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <!-- Controls -->
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">This is a title</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="panel-footer">
          The End
        </div>
      </div>
      <!--store start  -->
      



      <!--store end  -->
      <footer>
        <div class="">
          <p>this is a footer</p>
        </div>
        <div class="">
          <link rel="shortcut icon" href="fa-facebook-square.ico">
          <link rel="shortcut icon" href="glyphicon-phone.ico">
          <link rel="shortcut icon" href="glyphicon-envelope.ico">
        </div>

      </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
