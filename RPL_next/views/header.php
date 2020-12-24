<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="style/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="style/css/cssku.css">
      <title>RPL</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">RPL</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Feature</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php
                        if (!empty($_SESSION['user'])){
                        echo '<li><a href="pages/logout.php">Log out</a></li>';
                        } else {
                        echo '<li><a href="login.php">Login</a></li>';
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
    <li><a href="#about">About</a></li>
                    <li><a href="#services">Feature</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php
                        if (!empty($_SESSION['user'])){
                        echo '<li><a href="pages/logout.php">Log out</a></li>';
                        } else {
                        echo '<li><a href="login.php">Login</a></li>';
                        }
                    ?>
                    </ul>