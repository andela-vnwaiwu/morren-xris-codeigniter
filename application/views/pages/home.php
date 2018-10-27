<main>
  <div class="intro lighten-2 z-depth-1">
    <h1 class="grey-text text-lighten-5">Morren-Xris </h1>
    <h5 class="grey lighten-3 grey-text text-darken-1">Suites and Gardens</h5>
  </div>
  <div class=" z-depth-1">
    <h4 class="center-align">... for your comfort and relaxation</h4>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m6 l6 push-l6">
        <img class="responsive-img hoverable z-depth-1" src="images/room.jpg">
      </div>
      <div class="col s12 m6 l6 pull-l6">
        <?php if (isset($query1)) { ?>
          <p class="text-justify flow-text"><?php echo $query1->content; ?> </p>
        <?php } else { ?>
        <p class="text-justify flow-text">
          <strong>Morren-Xris </strong>is a world class hotel located in Amaokpala, one of the commercial cities of the south-east.
          It is a 5-star hotel offering quality and value added sevices. Its facilities are world-class and it is your
          home away from home. We also have other facilities to cater for your other needs like: bar, restaurant, pool, 
          conference halls etc.
        </p>
        <?php } ?>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6 l6">
        <img class="responsive-img hoverable z-depth-1" src="images/food.jpg">
      </div>
      <div class="col s12 m6 l6">
        <?php if (isset($query2)) { ?>
          <p class="text-justify flow-text"><?php echo $query2->content; ?> </p>
        <?php } else { ?>
          <p class="text-justify flow-text">
          Our services will make you feel at home. We will pamper you with nature's finest and best foods, drinks and hospitality.
          Our staffs always ensure you are ease and help you get settled quickly. You might want to try out our freshly cooked meals
          and chops. We always ensure out client's satisfaction and happiness.
          </p>
       <?php  } ?>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m4 l4 ">
        <img class="responsive-img z-depth-1" src="images/entrance-gate3.jpg">
      </div>
      <div class="col s12 m4 l4">
        <img class="responsive-img z-depth-1" src="images/pool1.jpg">
      </div>
      <div class="col s12 m4 l4">
        <img class="responsive-img z-depth-1" src="images/bar3.jpg">
      </div>
    </div>
  </div>
  <div id=" amenities" class="container">
    <h4 class="center-align  "> Our Amenities </h4>
    <hr>
    <div class=" amenities row">
      <div class=" col l2 m2 s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <i class=" medium material-icons text-center">fitness_center</i>
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">Gym</span>
          </div>
        </div>
      </div>
      <div class=" col l2 m2 s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <i class=" medium material-icons text-center">local_bar</i>
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">Bar</span>
          </div>
        </div>
      </div>
      <div class=" col l2 m2 s4">
        <div class=" card">
          <div class=" card-image waves-effect waves-block waves-light">
            <i class=" medium material-icons">pool</i>
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">Pool</span>
          </div>
        </div>          
      </div>
      <div class=" col l2 m2 s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <i class=" medium material-icons text-center">security</i>
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">Security</span>
          </div>
        </div>
      </div>
      <div class=" col l2 m2 s4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <i class=" medium material-icons text-center">local_hotel</i>
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">Rooms</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script type="text/javascript" src="js/index.js"></script>