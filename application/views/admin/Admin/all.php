<section class="content-header">
    <h1>
        Admin
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Admin"><i class="fa fa-coffee"></i> admin</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Admins</h4>

                <a href='<?php echo site_url('admin/add'); ?>' class='btn btn-info pull-right'>
                <i class='fa fa-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>
                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($admins as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>Admin/details/<?= $row['admin_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>Admin/details/<?= $row['admin_id'] ?>"><?php echo $row['username']; ?></a></td>
                                    <td><a href="<?= base_url() ?>Admin/details/<?= $row['admin_id'] ?>"><?php echo $row['role']; ?></a></td>
                                    <td><a href="<?= base_url() ?>Admin/delete/<?= $row['admin_id']?>" class="btn btn-danger delete-button">Delete</a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>