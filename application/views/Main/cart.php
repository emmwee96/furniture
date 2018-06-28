
    <!--breacrumb start-->

    <div class="breadcrumbs-wrapper breadcumbs-bg1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                        <ul>
                            <li>
                                <div class="breadcrumbs-icon1">
                                    <a href="index.html" title="Return to home"><i class="fa fa-home"></i></a>
                                </div>
                            </li>
                            <li>Your shopping cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breacrumb end-->

    <!--Cart top heading start-->

    <div class="cart-top-heading">
        <div class="container">
            <div class="summery-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-sumttl">
                            <h3>Shopping-cart summary </h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-product-desc">
                            <p>Your shopping cart contains: <?= count($this->session->userdata("cart")); ?> products </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Cart top heading end-->

    <!--Cart start-->

    <div class="cart-sum-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="progress-summery text-center">
                        <ul class="progress-steps">
                            <li class="steps-item  litext is-active"><a href="<?= base_url()?>main/cart">01. Cart</a>
                            </li>
                            <li class="steps-item"><a href="<?= base_url()?>main/login">02. Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Cart end-->
    <div class="cart-table-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="shopping-cart-table">
                        <form action="#" method="POST">
                            <div class="table-responsive">
                                <table class="main-table">
                                    <thead>
                                        <tr class="tr1">
                                            <th class="th2">Description</th>
                                            <th class="th4"> price</th>
                                            <th class="th6">Remove</th>
                                            <th class="th4">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $total = 0; foreach($this->session->userdata("cart") as $row){ $i =0;?>
                                        <tr class="tr2" id="cart_row_<?= $i; ?>">
                                            <td class="td2">
                                                <h5>Custom <?= $row['name']; ?></h5>
                                                <p>
                                                    height : <?= $row["height"]?> (mm)<br>
                                                    width : <?= $row["width"]?> (mm)<br>
                                                    <?php  foreach($row['options'] as $key => $option){ ?>
                                                    <?php if($option["type"] == "option"){
                                                        ?>
                                                        <?= $option["name"] . " : " . $option['label']; ?><br>
                                                        <?php
                                                    } else if ($option["type"] == "checkbox"){
                                                        ?>
                                                        Add On : <?= $option["name"]?><br>
                                                        <?php
                                                    }?>
                                                    <?php } ?>
                                                </p>
                                            </td>
                                           
                                            <td class="td4">$<?= $row['total']; ?></td>
                                           
                                            <td class="td6"><a href="<?= site_url('Main/removeCartRow/'.$i); ?>" ><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="td7">$<?= $row['total']; ?></td>
                                        </tr>
                                          <?php $total+=$row['total']; $i++;} ?>
                                     
                                        <tr class="tr6">
                                            <td colspan="3" class="td20">Total</td>
                                            <td class="td21" id="total">$<?= $total; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Bottom indicator start-->

    <div class="bottom-indicator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="page-indicator-left indicator-def">
                        <a href="<?= base_url() ?>"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="page-indicator-right indicator-def">
                        <a href="<?= site_url('Main/login'); ?>">Proceed to checkout <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Bottom indicator end-->

  <br>
  <br>
  <br>
  <br>
  <br>

    <!--Main shop area end-->

