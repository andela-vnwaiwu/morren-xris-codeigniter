<script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
<main>
  <div class="container">
    <div class="row">
      <h3 class="center-align"> Gallery </h3>
      <p class="text-justify flow-text">
        Here are some of the wonderful things on offer at Morren-Xris Hotels. We ensure that our customers
        always get the best.
      </p>
    </div>
    <div class="row">
      <?php
        $dir =  "images/gallery";
        $file_display = array('jpg', 'jpeg', 'png', 'gif');

        if (file_exists($dir) == false) {
          echo 'Directory "', $dir, '" not found!';
        } else {
          $dir_contents = scandir($dir);

          for ($i = 0; $i <= 5; $i++) {
            $value = explode('.', $dir_contents[$i]);
            $file = $dir_contents[$i];
            $file_type = strtolower(end($value));
            if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
              echo "<div class=\"col m3 s12 gallery\">";
              echo "<img class=\"materialboxed\" width=\"250\""; 
              echo "src=\"",base_url(), $dir, "/", $file, "\" alt=\"", $file, "\" />";
              echo "</div>";
            }
          }
        }
      ?>
    </div>
  </div>
</main>