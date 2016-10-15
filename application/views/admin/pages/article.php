<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
  <div class="container">
    <h3 class="center-align">Create a New Article</h3>
    <p class="flow-text center-align">Fill the form properly and click the submit button to save</p>
    <div class="center-div">
    <?php if(isset($message)) { ?>
    <p class="message center-align"><?php echo $message; ?></p>
    <?php } ?>
    <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('admin/article/save_article');?>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Title" id="title" name="title" type="text" class="validate">
                <label for="title">Title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea class="materialize-textarea" placeholder="Content" id="content" name="content" type="text" class="validate"></textarea>
                <label for="content">Content</label>
            </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select name="position">
              <option value="" disabled selected>Choose your option</option>
              <?php foreach($positions as $position) { ?>
              <option value="<?php echo $position->id; ?>"><?php echo $position->name; ?></option>
              <?php } ?>
            </select>
            <label>Select a Position</label>
          </div>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light" id="submit" type="submit" name="submit">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
  </div>