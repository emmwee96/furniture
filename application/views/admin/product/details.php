<br />
<div class="mediumBox">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="box box-info">
                <div class="box-header user-panel">
                    <div class="pull-left image ">
                        <img src="<?= base_url() . $products['banner'] ?>" class="img-circle user_thumbnail" alt="Product Image">
                    </div>
                    <a href="<?= site_url("product/edit_details/" . $products['custom_product_id']); ?>" class="pull-right">
                        edit
                    </a>

                    <h4 style="margin-left:20px;" class="pull-left"><?= $products['name'] ?>'s info</h4>
                </div>
                <div class="box-body">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="active">
                                <a href="#info" data-toggle="tab">Info</a>

                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="info">
                            <table class='formTable'>
                                <tr>
                                    <th>Name</th>
                                    <td>: <?= $products['name']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="box box-default">
                <div class="box-header">
                    Images
                    <a href="<?= site_url("product/edit_images/" . $products['custom_product_id']); ?>" class="pull-right">
                        edit
                    </a>
                </div>
                <div class="box-body" id="family-tree-container">
                    <?php
                    foreach ($images as $row) {
                        ?>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 product-images">
                            <img class="cropped" src="<?= base_url() . $row['url'] ?>">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.delete-button', function (e) {
        if (confirm("Are you sure you want to delete this model?")) {
            id = $(this).attr('data-id');
            window.location.replace("<?= base_url() ?>product/delete_model/" + id);
        }
    });

    $(document).on('click', '.delete-variation-button', function (e) {
        if (confirm("Are you sure you want to delete this varaition?")) {
            id = $(this).attr('data-id');
            window.location.replace("<?= base_url() ?>product/delete_variation/" + id);
        }
    });

    $(".qtyChange").click(function () {
        var qty = $(this).data("qty");
        var id = $(this).data("id");
        $("#model_id").val(id);
        $("#quantity").val(qty);
    });
</script>