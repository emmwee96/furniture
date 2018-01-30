<section class="content-header">
    <h1>
        Product
    </h1>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Product</h4>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($products as $products) {
                                ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><img class="xs-thumbnail" src="<?= base_url() . $products['banner'] ?>"></td>
                                    <td><?= $products['name'] ?></td>
                                    <td> <a class="btn btn-warning" href='<?= base_url() ?>product/details/<?= $products['custom_product_id'] ?>'><i class="fa fa-pencil"></i> Edit</a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>