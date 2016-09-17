<div class="container">
  <script type="text/javascript">
    $(document).ready(function() {
      $("#back").on("click", function() {
        window.location.href = "http://localhost/morren/admin/upload";
      });
    });
  </script>
  <h3>Your file was successfully uploaded!</h3>

  <ul>
    <?php foreach ($upload_data as $item => $value):?>
    <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
  </ul>

  <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
    <button class="btn waves-effect waves-light" id="back" type="submit" name="back">Back to uploads
      <i class="material-icons right">back</i>
    </button>
  </div>