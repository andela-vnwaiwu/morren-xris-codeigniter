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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/admin/style.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/countries.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>
    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>
  </head>
  <body>
    <header class="navbar-fixed">
      <nav class="lime lighten-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="/morren-xris" class="brand-logo"><img class="logo" src="https://res.cloudinary.com/morren-xris-hotels/image/upload/v1478103395/ogxxm9wbtwgkbax798r5.jpg"</a>
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
      <ul id="slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <img class="background" width="300" height="200" src="https://res.cloudinary.com/morren-xris-hotels/image/upload/v1478074841/tz7g14bnz9cxfgnykxrv.jpg">
                    <a href="#!name"><span class="white-text name"></span></a>
                    <a href="#!email"><span class="white-text email"></span></a>
                    <a href="#!user"><img class="rounded-image profile" src="/images/avatar.png" />
                    <?php if (!empty($user)) { ?>
                      <div class="user-info">
                        <a href="#!name"><span class="white-text name">Welcome <?php echo $user->firstname ?></span></a>
                        <a href="#!email"><span class="white-text email"><?php echo $user->email ?></span></a>
                      </div>
                    <?php } else { ?>
                    <div class="user-info">
                      <a href="#!name"><span class="white-text name">Welcome</span></a>
                      <a href="#!email"><span class="white-text email">Login to continue</span></a>
                    </div>
                    <?php } ?>
                </div>
            </li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin">DASHBOARD</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin/upload">UPLOAD AN IMAGE</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin/article">CREATE AN ARTICLE</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin/gallerycategories">GALLERY CATEGORIES</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin/articleposition">ARTICLE POSITION</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>admin/auth/logout">LOGOUT</a></li>
            <li><a class="waves-effect waves-light white-text" href="<?php echo base_url(); ?>">Visit the front Page</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>