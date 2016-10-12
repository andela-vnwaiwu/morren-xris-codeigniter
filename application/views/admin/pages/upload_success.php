<div class="container">
  <script type="text/javascript">
    $(document).ready(function() {
      $("#back").on("click", function() {
        window.location.href = "http://localhost/morren/admin/upload";
      });
    });
  </script>
  <h4>Upload Status</h4>
  <?php if(isset($message)) { ?>
    <p class="message center-align"><?php echo $message; ?></p>
  <?php } ?>
  <div class="row">
  
  <?php 
  // Use this tag to resizr the image displayed to the admin after upload
  //echo cl_image_tag("sample.jpg", 
  //array( "width" => 100, "height" => 150, "crop" => "fill" )); ?>
  <?php if(isset($imagepath)) { ?>
    <div class="image"><img class="materialboxed" src="<?php echo $imagepath; ?>" width="300"/>
  </div>
  <?php } ?>

  <p><a href="<?php echo base_url('admin/upload'); ?>">Upload Another File!</a></p>
    <button class="btn waves-effect waves-light" id="back" type="submit" name="back">Back to uploads
      <i class="material-icons right">back</i>
    </button>
  </div>