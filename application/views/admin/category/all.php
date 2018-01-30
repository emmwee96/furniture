<section class="content-header">
    <h1>
        Category
    </h1>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Category</h4>
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
                            foreach ($category as $category) {
                                ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><img height=150 width=150 src="<?= base_url() . $category['image'] ?>"></td>
                                    <td><?= $category['name'] ?></td>
                                    <td> <a class="btn btn-warning" href='<?php echo base_url('category/edit/' .$category['category_id'] ); ?>'><i class="fa fa-pencil"></i> Edit</a></td>
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