<section class="content-header">
    <h1>
        User
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>User"><i class="fa fa-user"></i> Users</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Users</h4>
            
            </div>
            <div class='panel-body'>
                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Email</th>
                                <th>Contact</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($users as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>User/details/<?= $row['user_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>User/details/<?= $row['user_id'] ?>"><?php echo $row['email']; ?></a></td>
                                    <td><a href="<?= base_url() ?>User/details/<?= $row['user_id'] ?>"><?php echo $row['contact']; ?></a></td>
                                   
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Email</th>
                                <th>Contact</th>
                             
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