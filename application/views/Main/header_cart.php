<?php  
                                            $total = 0;
                                            if($this->session->has_userdata("cart")){
                                                $i = 0;
                                            foreach($this->session->userdata("cart") as $row){
                                               
                                                $total += $row['total'];
                                                ?>
                                            <div class="single-cart-box" id="cart_row_<?=$i; ?>">
                                              
                                                <div class="cart-content">
                                                    <div class="cart-heading">
                                                        <a href="#"><?= $row['name']; ?></a>
                                                    </div>
                                                  
                                                    <div class="cart-price">$<?= $row['total']; ?></div>
                                                </div>
                                                <div class="cart-remove deft-remove-icon">
                                                    <a href="#" onclick="delete_cart(<?=$i; ?>)"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                               
                                            </div>
                                            <div class="clearfix"></div>
                                            <?php $i++; }} ?>
                                           
                                         
                                            <div class="cart-subtotal">
                                                <span class="subttl-text">Subtotal</span>
                                                <span class="subttl-amt"><?= $total; ?></span>
                                            </div>
                                            <a href="<?= site_url("Main/cart"); ?>">
                                            <div class="cart-checkout-btn btn-def-checkout">
                                                Checkout <i class="checkout-dir-icon zmdi zmdi-chevron-right "></i>
                                            </div></a>