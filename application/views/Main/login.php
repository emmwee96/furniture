
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
                            <li class="steps-item is-active"><a href="<?= site_url('Main/login'); ?>">02. Contact</a>
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
                            <h3>Leave your contact</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Your team will contact you for your order.</p>
                        </div>
                        <form method="POST" id="contact_form">
                        <div class="lp-input">
                                <label for="phoneno">Full Name</label>
                                <input type="text" required id="name" name="name" />
                            </div>
                            <div class="lp-input">
                                <label for="emailleft">Email address</label>
                                <input type="email" id='email' required name="email" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Phone Number</label>
                                <input type="text" required id="phone" name="phone" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Address 1</label>
                                <input type="text" required id="address1" name="address1" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Address 2</label>
                                <input type="text" required id="address2" name="address2" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Postcode</label>
                                <input type="text" required id="postcode" name="postcode" />
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">State</label>
                                <select name="state" id='state' class="form-control">
                                    <option value="Johor">Johor</option>
                                </select>
                            </div>
                            <div class=" lp-account-btn btn-ac ">
                                <a href="javascript:void()" id="submit_btn"><i class="fa fa-user" aria-hidden="true"></i> Submit</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<script>
    $(document).ready(function(){
        $("#submit_btn").click(function(){
            $("#contact_form").submit();
        });

        $("#contact_form").on("submit",function(e){
            e.preventDefault();
           $.post('<?= site_url("Main/place_order"); ?>',{
               name : $("#name").val(),
               email : $("#email").val(),
               contact : $("#phone").val(),
               address1 : $("#address1").val(),
               address2 : $("#address2").val(),
               postcode : $("#postcode").val(),
               state : $("#state").val()
           },function(res){
                if(res.status == "SUCCESS"){
                    alert("Order placed! Our staff will contact you soon");

                    window.location = "<?= site_url('Main/'); ?>";
                }else{
                    alert(res.message);
                }
           },"JSON");
        });
    });
</script>