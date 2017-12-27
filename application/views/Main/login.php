
    <!--breadcrumb start-->

    <div class="breadcrumbs-wrapper breadcumbs-bg1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs breadcrumbs-style1 sep1 posr">
                        <ul>
                            <li>
                                <div class="breadcrumbs-icon1">
                                    <a href="index.html" target="_blank" title="Return to home"><i class="fa fa-home"></i></a>
                                </div>
                            </li>
                            <li> Authentication</li>
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
                            <h3> Authentication</h3>
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
                            <li class="steps-item is-active"><a href="<?= site_url('Main/login'); ?>">02. Sign in</a>
                            </li>
                            <li class="steps-item"><a href="<?= site_url('Main/address'); ?>">03. Address</a>
                            </li>
                            <li class="steps-item"><a href="<?= site_url('Main/shipping'); ?>">04. Shipping</a>
                            </li>
                            <li class="steps-item"><a href="<?= site_url('Main/payment'); ?>">05. Payment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cart start end-->
    <div class="lp-email-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Create an account</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Please enter your email address to create an account.</p>
                        </div>
                        <form action="#">
                            <div class="lp-input">
                                <label for="emailleft">Email address</label>
                                <input type="email" id="emailleft" name="email" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Phone Number</label>
                                <input type="text" id="phoneno" name="phone" />
                            </div>
                        </form>
                        <div class=" lp-account-btn btn-ac ">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Create an account</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Already registered?</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Please put your email address that was used at the time of registration.</p>
                        </div>
                        <form action="#">
                            <div class="lp-input">
                                <label for="emailleftt">Email address</label>
                                <input type="email" id="emailleftt" name="email2" />
                            </div>
                            <div class="lp-input">
                                <label for="emailleft2">Password</label>
                                <input type="password" id="emailleft2" name="pword" />
                            </div>
                        </form>
                        <div class=" lp-account-btn btn-ac btn-ac2">
                            <a href="<?= site_url('Main/address'); ?>"><i class="fa fa-lock" aria-hidden="true"></i>Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
