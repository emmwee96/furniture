
    <!--breadcrumb start-->

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
                            <li>Addresses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb end-->

    <!--login top heading start-->

    <div class="cart-top-heading">
        <div class="container">
            <div class="summery-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-sumttl">
                            <h3>Addresses</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login top heading end-->

    <!--login start-->

    <div class="cart-sum-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="progress-summery text-center">
                        <ul class="progress-steps">
                            <li class="steps-item  litext is-active"><a href="cart.html">01. Cart</a>
                            </li>
                            <li class="steps-item is-active"><a href="login.html">02. Sign in</a>
                            </li>
                            <li class="steps-item is-active"><a href="address.html">03. Address</a>
                            </li>
                            <li class="steps-item"><a href="shipping.html">04. Shipping</a>
                            </li>
                            <li class="steps-item"><a href="payment.html">05. Payment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login start end-->

    <div class="address-top-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="#">
                        <div class="address-form">
                            <label for="address">Choose a delivery address:</label>
                            <select name="mname" id="address">
                                <option value="1">My Address</option>
                            </select>
                        </div>
                        <div class="address-check">
                            <input type="checkbox" id="add2" name="daddress" />
                            <label for="add2"> Use the delivery address as the billing address.</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="delivery-address">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Your delivery address</h3>
                        </div>
                        <div class="lp-left-text delivery-add">
                            <p>Md. Sohrab Hossain</p>
                            <p>357/3, Noyatola, Mogbazar</p>
                            <p>Ramna, Dhaka</p>
                            <p>01919660143</p>
                            <p>01919660143</p>
                        </div>
                        <div class=" lp-account-btn btn-ac add-btn">
                            <a href="#">Update <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Your billing address</h3>
                        </div>
                        <div class="lp-left-text delivery-add">
                            <p>Md. Sohrab Hossain</p>
                            <p>357/3, Noyatola, Mogbazar</p>
                            <p>Ramna, Dhaka</p>
                            <p>01919660143</p>
                            <p>01919660143</p>
                        </div>
                        <div class=" lp-account-btn btn-ac add-btn">
                            <a href="checkout.html">Update <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="address-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-wrapper">
                            <div class="text-btn-area lp-account-btn btn-ac add-btn">
                                <a href="cart.html">Add a new address<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="address-text-field">
                                <label for="tfield">If you would like to add a comment about your order, please write it in the field below.</label>
                                <textarea name="message" id="tfield"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="bottom-indicator-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="page-indicator-left indicator-def">
                            <a href="index.html"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="page-indicator-right indicator-def">
                            <a href="<?= site_url('Main/shipping'); ?>">Proceed to checkout <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>