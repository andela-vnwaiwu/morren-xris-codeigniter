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
        // Display each images queried from the database
        foreach ($query as $row) {
          echo "<div class=\"col m3 s12 gallery\">";
          echo "<img class=\"materialboxed\" width=\"250\""; 
          echo 'src="' , $row->path,'" alt="', $row->title, '" />';
          echo "</div>";
        }
      ?>
    </div>
  </div>
</main>