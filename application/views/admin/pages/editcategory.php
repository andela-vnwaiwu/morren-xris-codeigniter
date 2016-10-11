<div class="container"> 
    <div id="edit_category" class="row">
    <h4 class="center-align">Edit category</h3>
     <?php echo validation_errors(); ?>

    <?php foreach ($formdata as $form) { ?>
    <?php echo form_open('admin/gallerycategories/edit_category/'. $form->id); ?>
      <div class="input-field col s12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $form->name; ?>">
      </div>
      <div class="input-field col s12">
        <label for="name">Description</label>
        <textarea name="description" id="description" class="materialize-textarea validate"><?php echo $form->description; ?></textarea>
      </div>
      <button class="btn waves-effect waves-light blue">Submit<i class="material-icons right">send</i></button>
    </form>
    <?php } ?>
    </div>
</div>