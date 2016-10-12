<script type="text/javascript">
  $(document).ready(function() {
    $('#gallerycategory').on('click', function() {
      $('#create_category').removeClass('hidden');
      $('#gallery_category_list').addClass('hidden');
    });
  });
</script>
<div class="container">
  <h3 class="center-align">Gallery Categories</h3>
  <p class="flow-text center-align">Your gallery categories are listed below. You can add a new category, delete images in a category and rename a category</p>
    <div id="gallery_category_list">
      <div class="row">
        <?php if(isset($message)) { ?>
          <p class="message center-align"><?php echo $message; ?></p>
        <?php } ?>
        <?php if(! $query) { ?>
            <p class="flow-text center-align">Sorry... you have not created a category yet. Click the button below to create one</p>
        <?php } else {?>
        <?php 
          foreach ($query as $row) { ?>
            <div class="col s6 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $row->name; ?></span>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo base_url('admin/gallerycategories/edit_category/'. $row->id); ?>">Edit Category</a>
                        <a href="<?php echo base_url('admin/gallerycategories/delete_category/'. $row->id); ?>">Delete Category</a>
                    </div>
                </div>
            </div>
          <?php  } }?>
      </div>
      <a class="btn waves-effect waves-light blue" id="gallerycategory">Create a category<i class="material-icons right">send</i></a>
    </div>
    <div id="create_category" class="hidden row">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/gallerycategories/create_category'); ?>
      <div class="input-field col s12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter a name for the Category">
      </div>
      <div class="input-field col s12">
        <label for="name">Description</label>
        <textarea name="description" id="description" class="materialize-textarea validate" placeholder="Enter a brief description for this category"></textarea>
      </div>
      <button class="btn waves-effect waves-light blue">Submit<i class="material-icons right">send</i></button>
    </form>
    </div>
</div>