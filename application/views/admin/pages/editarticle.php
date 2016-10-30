<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<div class="container"> 
    <div id="edit_category" class="row">
    <h4 class="center-align">Edit Article</h3>
     <?php echo validation_errors(); ?>
     <?php if(!empty($formdata)) { ?>
    <?php echo form_open('admin/article/edit_article/'. $formdata->id); ?>
     <div class="row">
            <div class="input-field col s12">
                <input placeholder="Title" id="title" name="title" type="text" class="validate" value="<?php echo $formdata->title; ?>">
                <label for="title">Title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea class="materialize-textarea" placeholder="Content" id="content" name="content" type="text" class="validate"><?php echo $formdata->content; ?></textarea>
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
    <?php } ?>
    </div>
</div>