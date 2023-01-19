<!DOCTYPE html>
<html lang="en">
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
                <a href="index.html" class="brand-logo">PT. MOTOR ANDALAN</a>
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
          <li><a href="#clients">Direktur Perusahaan</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Portfolio</a></li>
          <li><a href="">Contact Us</a></li>
        </ul>
  
<!-- contact us -->
<section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel black darken-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, excepturi.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header"><h4>Our Office</h4></li>
            <li class="collection-item">BGS</li>
            <li class="collection-item">Jl. Jalan No. 1000, Bandung</li>
            <li class="collection-item">West Java, Indonesia</li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Please fill out this form</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="name">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="name">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn black darken-2">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
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