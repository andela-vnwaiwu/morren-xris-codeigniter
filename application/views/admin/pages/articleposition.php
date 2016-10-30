<div class="container">
  <h3 class="center-align">Gallery Categories</h3>
  <p class="flow-text center-align">Your articles position are shown below. You can add a new position, view different positions and rename a position</p>
    <div id="article_position_list">
      <a class="btn waves-effect waves-light blue" id="articleposition">Create a new position<i class="material-icons right">send</i></a>
      <div class="row">
        <?php if(isset($message)) { ?>
          <p class="message center-align"><?php echo $message; ?></p>
        <?php } ?>
        <?php if(! $query) { ?>
            <p class="flow-text center-align">Sorry... you have not created a position yet. Click the button below to create one</p>
        <?php } else {?>
           <?php foreach($query as $row) { ?>
             <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $row->name ?></span>
                        <p>Click on the link below to see all articles in this position</p>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo base_url('admin/articleposition/get_position_articles/' . $row->id) ?>">See all articles</a>
                    </div>
                </div>
            </div>
           <?php } ?>
        <?php } ?>
      </div>
    </div>
    
    <div id="create_position" class="hidden row">
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/articleposition/create_position'); ?>
      <div class="input-field col s12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter a name for the Category">
      </div>
      <button class="btn waves-effect waves-light blue">Submit<i class="material-icons right">send</i></button>
      <a class="btn btn-flat" id="category-back">Go Back</a>
    </form>
    </div>
</div>