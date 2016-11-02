<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>

    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/countries.js"></script>
  </head>
  <body>
    <header class="navbar-fixed">
      <nav class="lime lighten-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="/morren-xris" class="brand-logo"><img class="logo" src="https://res.cloudinary.com/morren-xris-hotels/image/upload/v1478103395/ogxxm9wbtwgkbax798r5.jpg"/></a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>">HOME</a></li>
              <li><a href="<?php echo base_url(); ?>about">ABOUT US</a></li>
              <li><a href="<?php echo base_url(); ?>gallery">GALLERY</a></li>
              <li><a href="<?php echo base_url(); ?>contact">CONTACT US</a></li>
            </ul>
            <div id="slide-out">
              <ul id="mobile" class="side-nav hide-on-large-only">
                <li>
                  <div class="userView">
                    <img class="background" width="300" height="200" src="https://res.cloudinary.com/morren-xris-hotels/image/upload/v1478074841/tz7g14bnz9cxfgnykxrv.jpg">
                    <a href="#!name"><span class="white-text name"></span></a>
                    <a href="#!email"><span class="white-text email"></span></a>
                    <a href="#!user"><img class="rounded-image profile" src="/images/avatar.png" />
                    <div class="user-info">
                      <a href="#!name"><span class="white-text name">Welcome to</span></a>
                      <a href="#!email"><span class="white-text email">Morren-Xris Hotels</span></a>
                    </div>
                  </div>
                </li>
                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                <li><a href="<?php echo base_url(); ?>about">ABOUT US</a></li>
                <li><a href="<?php echo base_url(); ?>gallery">GALLERY</a></li>
                <li><a href="<?php echo base_url(); ?>contact">CONTACT US</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>