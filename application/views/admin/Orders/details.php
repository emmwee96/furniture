<br />
<div class="mediumBox">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="box box-info">
                <div class="box-header agent-panel">
                    <?php if ($this->session->userdata("type") == "ADMIN") { ?>
                        <a href="<?= site_url("Orders/edit/" . $orders['user_id']); ?>" class="pull-right">
                            edit
                        </a>
                    <?php } ?>
                    <h4 style="margin-left:20px;" class="pull-left">ORDER NO : <?= $orders['order_id']?></h4>
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
                            <h4>User </h4>
                            <table class='formTable'>
                                <tr>
                                    <th>email</th>
                                    <td>: <?= $user['email']; ?></td>
                                </tr>
                               
                                <tr>
                                    <th>contact</th>
                                    <td>: <?= $user['contact']; ?></td>
                                </tr>
                              
                            </table>
                            <hr>
                            <h4>Order Details</h4>
                            <table class='formTable'>
                                <tr>
                                    <th>Date</th>
                                    <td>: <?= $orders['timestamp']; ?></td>
                                </tr>
                               
                                <tr>
                                    <th>Address </th>
                                    <td>: <?= $orders['address1']; ?></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td>: <?= $orders['address2']; ?></td>
                                </tr>
                                <tr>
                                    <th>Postcode </th>
                                    <td>: <?= $orders['postcode']; ?></td>
                                </tr>
                                <tr>
                                    <th>State </th>
                                    <td>: <?= $orders['state']; ?></td>
                                </tr>
                            </table>
                            <hr>
                            <h4>Current Status : <?= $orders['status']; ?></h4>
                            <?php if($orders['status_id'] == 1){ ?>
                                <a href="<?= site_url('Orders/updateStatus/'.$orders['order_id']."/2"); ?>" class="btn btn-info">In Progress</a>

                                <a href="<?= site_url('Orders/updateStatus/'.$orders['order_id']."/4"); ?>" class="btn btn-warning">Canceled</a>
                            <?php }else if($orders['status_id'] == 2){ ?>

                                <a href="<?= site_url('Orders/updateStatus/'.$orders['order_id']."/3"); ?>" class="btn btn-success">Completed</a>

                                <a href="<?= site_url('Orders/updateStatus/'.$orders['order_id']."/4"); ?>" class="btn btn-warning">Canceled</a>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="box box-info">
                <div class="box-header agent-panel">
                   
                    <h4 style="margin-left:20px;" class="pull-left">Details</h4>
                </div>
                <div class="box-body">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="active">
                                <a href="#login" data-toggle="tab">product</a>

                            </li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="login">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>Description</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        for($i = 0; $i < count($orders['details']); $i++){ ?>

                                        <tr>
                                            <td><?= $i+1 ; ?></td>
                                            <td><?= $orders['details'][$i]['name']; ?></td>
                                            <td><?= $orders['details'][$i]['total']; ?></td>
                                        </tr>
                                        <?php 
                                        $details = json_decode($orders["details"][$i]['options']);
                                        foreach( $details as $key => $opt){ ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $key; ?> : <?= $opt->label; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>
                                        <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>