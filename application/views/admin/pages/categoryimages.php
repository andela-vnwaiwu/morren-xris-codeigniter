<div class="container">
    <h3 class="center-align">Category Images</h3>
    <p class="flow-text center-align">The images for this category are shown below. You can delete images you don't need anymore here</p>
    <div id="image-list">
        <div class="row">
        <?php if(isset($message)) { ?>
            <p class="message center-align"><?php echo $message; ?></p>
        <?php } ?>
        <?php if(empty($query)) { ?>
            <p class="flow-text center-align">Sorry... you have not added an image to this category yet. Click the button below to create one</p>
            <p><a class="btn waves-effect waves-light blue" href="<?php echo base_url('admin/upload'); ?>" title="upload an image">Go to Uploads</a>
        <?php } else {?>
            <?php foreach($query as $row) { ?>
                <div class="col m3 s12 gallery">
                    <img class="materialboxed" width="250" height="200" src="<?php echo $row->imagepath; ?>" alt="<?php echo $row->title; ?>" />
                    <a class="delete-button btn-floating red modal-trigger" href="#<?php echo $row->id; ?>a"data-image-id="<?php echo $row->id; ?>"><i class="material-icons">delete_forever</i></a>
                </div>
                <div id="<?php echo $row->id; ?>a" class="modal">
                  <div class="modal-content">
                    <h4>Delete Image</h4>
                    <p>Deleting this image will delete it from the storage</p>
                    <p>Do you want to really delete it?</p>
                  </div>
                  <div class="modal-footer">
                    <a href="<?php echo base_url('admin/gallerycategories/delete_image/'. $row->id); ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Yes, Delete</a>
                  </div>
                </div>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
</div>
