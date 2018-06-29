<section class="content-header">
    <h1>
    Orders
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Orders"><i class="fa fa-file"></i> Orders</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Orders</h4>
            
            </div>
            <div class='panel-body'>
                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Order No</th>
                                <th>Modified By</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($orders as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>Orders_log/details/<?= $row['order_log_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>Orders_log/details/<?= $row['order_log_id'] ?>"><?php echo $row['order_id']; ?></a></td>
                                    <td><a href="<?= base_url() ?>Orders_log/details/<?= $row['order_log_id'] ?>"><?php echo $row['modified_user']; ?></a></td>
                                    <td><a href="<?= base_url() ?>Orders_log/details/<?= $row['order_log_id'] ?>"><?php echo $row['modified_date']; ?></a></td>
                                   
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Order No</th>
                                <th>Modified By</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on('click', '.delete-button', function (e) {
        if (confirm("Are you sure you want to delete this agent?")) {
            id = $(this).attr('data-id');
            window.location.replace("<?= base_url() ?>agent/delete/" + id);
        }
    });
</script>