<script type="text/javascript">
      $(document).ready(function() {
        $("select").material_select();
      });
    </script>
<section id="contact">
  <div class="container">
    <h3 class="text-justify"> Contact</h3>
    <p class="text-justify flow-text">Want to find out more about our services, give us feedback on our services or make a request?</p>
    <p class="text-justify flow-text">Use the form below or give us a call on:</br>+234 803 307 2447</p>
  </div>
  <div class="container">
      <form class="col s12" action="mail.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Enter your First Name" id="first_name" name="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Enter your Last Name" id="last_name" name="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate">
            <label for="email" data-error="Invalid Email Address" data-success="Correct Email Address">Email</label>
          </div>
          <div class="input-field col s3">
            <select class="active validate browser-default" id="country" name="country"></select>
          </div>
          <div class="input-field col s3">
            <select class="active validate browser-default" id="state" name="state"></select>
          </div>
            <script type="text/javascript">
              populateCountries("country", "state");
            </script>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="message" name="message" class="materialize-textarea validate"></textarea>
            <label for="message">Message</label>
          </div>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light" id="submit" type="submit" name="submit">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $("#submit").on("click", function(event) {
      var firstName =$.trim($("#first_name").val());
      var lastName = $.trim($("#last_name").val());
      var message = $.trim($("#message").val());
      if(firstName == "" || lastName == "" || message == "") {
        event.preventDefault();
      }
    })
  })
</script>