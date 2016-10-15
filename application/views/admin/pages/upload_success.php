<div class="container">
  <h4>Upload Status</h4>
  <?php if(isset($message)) { ?>
    <p class="message center-align"><?php echo $message; ?></p>
  <?php } ?>
  <div class="row">
  
  <?php if(isset($imagepath)) { ?>
    <div class="image"><img class="materialboxed" src="<?php echo $imagepath; ?>" width="300"/>
  </div>
  <?php } ?>

  <p><a href="<?php echo base_url('admin/upload'); ?>">Upload Another File!</a></p>
    <a class="btn waves-effect waves-light" href="<?php base_url('admin/'); ?>">Back to Dashboard<i class="material-icons right">back</i></a>
  </div>