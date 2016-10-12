<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<main>
  <div class="container">
    <h3 class="center-align">Image Upload</h3>
    <p class="flow-text center-align">Select an image to upload and click the submit button to upload</p>
    <div class="center-div">
    <?php if(isset($message)) { ?>
    <p class="message center-align"><?php echo $message; ?></p>
    <?php } ?>
    <?php echo validation_errors(); ?>
      <?php echo form_open_multipart('admin/upload/do_upload');?>
        <div class="row">
          <div class="col s12">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="filename" id="filename" size="70">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select name="category">
              <option value="" disabled selected>Choose your option</option>
              <?php foreach($categories as $category) { ?>
              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
              <?php } ?>
            </select>
            <label>Select a Category</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter a title for the Image">
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
</main>