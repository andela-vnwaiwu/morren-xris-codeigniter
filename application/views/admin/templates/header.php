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
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/sweetalert.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/countries.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>
    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>
  </head>
  <body>
    <header>
      <nav class="lime lighten-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="/morren-xris" class="brand-logo"> Morren-Xris </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>admin">Dashboard</a></li>
              <li><a href="<?php echo base_url(); ?>admin/upload">UPLOAD</a></li>
              <li><a href="<?php echo base_url(); ?>admin/gallerycategories">GALLERY</a></li>
              <li><a href="<?php echo base_url(); ?>admin/auth/logout">LOGOUT</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>