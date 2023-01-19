<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- my css -->
      <link type="text/css" rel="stylesheet" href="css/style.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>PT. MOTOR ANDALAN</title>
    </head>

    <body id="home" class="scrollspy">
      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="black darken-3">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#home" class="brand-logo">PT. MOTOR ANDALAN</a>
              <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                
                <li><a href="about.php<?php ('about');?>">about</a></li>
                <li><a href="direktur.php<?php ('direktur');?>">direktur</a></li>
                <li><a href="services.php<?php ('services');?>">services</a></li>
                <li><a href="portofolio.php<?php('portofolio');?>">portofolio</a></li>
                <li><a href="contact.php<?php('contact');?>">contact</a></li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- side nav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="about.html">About Us</a></li>
        <li><a href="#clients">Direktur</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>

      <!-- slider -->
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.png"> <!-- random image -->
            <div class="caption left-align">
              <h3>Halaman Awal</h3>
              
            </div>
          </li>
          <li>
            <img src="img/slider/2.png"> <!-- random image -->
            <div class="caption right-align">
              <h3>Side 2</h3>
              
            </div>
          </li>
          <li>
            <img src="img/slider/3.png"> <!-- random image -->
            <div class="caption center-align">
              <h3>Side 3</h3>
              
            </div>
          </li>
        </ul>
      </div>

      <!-- about us -->
      

     

      
      

      

      <!-- footer -->
      <footer class="black darken-2 white-text center">
        <p class="flow-text">Copyright 2023</p>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- my script -->
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });

      </script>



<?php
    $allowed_ext = array("php", "html", "txt");
    $file = $_GET['file'];

    // Sanitasi input
    $file = filter_var($file, FILTER_SANITIZE_STRING);
    $file = basename($file);

    // Validasi ekstensi file
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(!in_array($ext, $allowed_ext)) {
        die("Invalid file type");
    }

    // Validasi lokasi file
    $path = realpath(__DIR__ . '/files/' . $file);
    if(strpos($path, realpath(__DIR__ . '/files/')) !== 0) {
        die("Invalid file location");
    }

    include($path);
?>

    </body>
  </html>