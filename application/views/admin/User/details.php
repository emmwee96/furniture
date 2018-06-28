<br />
<div class="mediumBox">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="box box-info">
                <div class="box-header agent-panel">
                    <?php if ($this->session->userdata("login_data")["type"] == "ADMIN") { ?>
                        <a href="<?= site_url("User/edit/" . $user['user_id']); ?>" class="pull-right">
                            edit
                        </a>
                    <?php } ?>
                    <h4 class="pull-left"><?= $user['email']?>'s info</h4>
                </div>
                <div class="box-body">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="active">
                                <a href="#login" data-toggle="tab">Info</a>

                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="login">
                            <table class='formTable'>
                                <tr>
                                    <th>email</th>
                                    <td>: <?= $user['email']; ?></td>
                                </tr>
                           </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="box box-info">
                <div class="box-header agent-panel">
                    <h4 class="pull-left">History</h4>
                </div>
                <div class="box-body">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="active">
                                <a href="#order" data-toggle="tab">Orders</a>

                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="order">
                            <table class="table">
                                <tr>
                                    <th>Order No</th>
                                    <th>Receiver Name</th>
                                    <th>Receiver Contact</th>
                                    <th>Status</th>
                                </tr>
                                <?php
                                    foreach($orders as $row){
                                        ?>
                                        <tr>
                                            <td><a href="<?= base_url() ?>Orders/details/<?= $row['order_id'] ?>"><?= $row['order_id'] ?></a></td>
                                            <td><a href="<?= base_url() ?>Orders/details/<?= $row['order_id'] ?>"><?= $row['name'] ?></a></td>
                                            <td><a href="<?= base_url() ?>Orders/details/<?= $row['order_id'] ?>"><?= $row['contact'] ?></a></td>
                                            <td><a href="<?= base_url() ?>Orders/details/<?= $row['order_id'] ?>"><?= $row['status'] ?></a></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
