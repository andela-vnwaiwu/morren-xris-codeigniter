<script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
<main>
  <div class="container">
    <div class="row">
      <h3 class="center-align"> Gallery </h3>
      <p class="center-align flow-text">
        Have a feel of what we offer at morren-xris. Your satisfaction is our priority!
      </p>
    </div>
    <div class="row">
      <?php if(empty($query)) { ?>
              <p class="flow-text center-align">Images are coming soon...</p>
          <?php } else {?>
        <?php foreach($query as $row) { ?>
        <div class="col m3 s12 gallery">
            <img class="materialboxed" width="250" height="150" src="<?php echo $row->imagepath; ?>" alt="<?php echo $row->title; ?>" />
        </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</main>