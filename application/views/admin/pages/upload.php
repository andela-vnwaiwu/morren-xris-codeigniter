<main>
  <div class="container">
    <h3>Image Upload</h3>
    <p class="flow-text">Select an image to upload and click the submit button to upload</p>
   <p style="color: red;" class="flow-text"><?php echo $error;?></p>

    <?php echo form_open_multipart('admin/upload/do_upload');?>
      <div class="row">
        <div class="col s6">
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
        <div class="input-field col s6">
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
</main>