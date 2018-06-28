<section class="content-header">
    <h1>
        Faq Category
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>faq_category"><i class="fa fa-folder-open"></i> Faq Category</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Faq category</h4>

                <a href='<?php echo site_url('faq_category/add'); ?>' class='btn btn-info pull-right'>
                <i class='fa fa-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>
                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>FAQ Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($faq_category as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>faq_category/details/<?= $row['faq_category_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>faq_category/details/<?= $row['faq_category_id'] ?>"><?php echo $row['faq_category']; ?></a></td>
                                    <td><a href="<?= base_url() ?>faq_category/delete/<?= $row['faq_category_id']?>" class="btn btn-danger delete-button">Delete</a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>FAQ Category</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>