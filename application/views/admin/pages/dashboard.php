<div class="container">
    <h3 class="center-align">Welcome to the Morren-Xris Hotels Admin Dashboard</h3>
    <p class="flow-text center-align">You can Manage pictures that are shown on the gallery page, 
        add new pictures, create new category and set the article displayed on different areas of the website</p>

    <div class="row">
        <div class="col s12 m4">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Upload a Picture</span>
                    <p>Click on the link below to upload a new picture</p>
                </div>
                <div class="card-action">
                    <a href="<?php echo base_url(); ?>admin/upload">Go to upload</a>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card blue lighten-2 darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Gallery Categories</span>
                    <p>Click on the link below to go to the galllery categories page</p>
                </div>
                <div class="white-text card-action">
                    <a href="<?php echo base_url(); ?>admin/gallerycategories">Go to gallery categories</a>
                </div>
            </div>
        </div>
    </div>
</div>