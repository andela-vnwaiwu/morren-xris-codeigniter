<div class="container">
  <script type="text/javascript">
    $(document).ready(function() {
      $("#back").on("click", function() {
        window.location.href = "http://localhost/morren/admin/upload";
      });
    });
  </script>
  <h3>Your file was successfully uploaded!</h3>

  <div class="row">
  
  <?php 
  // Use this tag to resizr the image displayed to the admin after upload
  //echo cl_image_tag("sample.jpg", 
  //array( "width" => 100, "height" => 150, "crop" => "fill" )); ?>
    <div class="image"><img class="materialboxed" src="<?php echo $imagepath; ?>" width="300"/>
  </div>

  <p><?php echo anchor('admin/upload', 'Upload Another File!'); ?></p>
    <button class="btn waves-effect waves-light" id="back" type="submit" name="back">Back to uploads
      <i class="material-icons right">back</i>
    </button>
  </div>