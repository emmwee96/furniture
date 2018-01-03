<br />
<div id="user_add_content">
    <div class="mediumBox">
        <div class="row content">
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-header">
                        New Category
                    </div>
                    <div class="box-body">

                        <div class="alert alert-danger hidden user_form_alert" id="form_alert">

                        </div>
                        <form id="product_form" method="POST" action="<?php echo site_url("Category/add"); ?>" enctype="multipart/form-data">
                            <div class="tab-content">
                                <div class="tab-pane active" id="details">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required name="name" placeholder="Name" id="form_name">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                            <label>Images</label>
                                            <input type="file" class="form-control" name="images[]" id="form_images" multiple>
                                        </div>
                                    </div>
                                    <br/>
                                </div>
                                <input type="submit" class="btn btn-flat btn-info pull-right" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>