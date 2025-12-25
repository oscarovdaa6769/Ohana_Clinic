<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/layout/header.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
      <?php wp_head();?>
</head>
<body>
      <header>
            <div class="logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-logo.png" alt="Ohana-clinic">
            </div>
            <nav>
                  <div class="cta">
                        <div class="phone-link">
                              <i class="fa-solid fa-phone"></i>
                              <p>012-345-6789</p>
                        </div>
                        <div class="reservation-btn">
                              <i class="fa-solid fa-calendar-days"></i>
                              <p>online reservation</p>
                        </div>
                  </div>
                  <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">First visit information</a></li>
                        <li><a href="http://ohana.test/about-our-hostipal/">About our hospital</a></li>
                        <li><a href="#">Medical Information</a></li>
                        <li><a href="#">inquity</a></li>
                        <li><a href="#">Access and Consultation Hours</a></li>
                  </ul>
            </nav>
      </header>