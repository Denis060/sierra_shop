
<?php
require('content/views/shared/header.php'); ?>
<div role="main" class="main shop">
    <div class="container">
        <hr class="tall">
        <div class="row">
            <div class="col-md-12">
                <div class="row featured-boxes">
                    <div class="col-md-12">
                        <?php 
                            require('content/views/cart/list.php'); 
                            
                        ?>
                    </div>
                </div>
                <?php if(cart_number()>0): ?>

                <div class="row featured-boxes cart">
                    <div class="col-md-12">
                        <div class="featured-box featured-box-secundary default">
                            <div class="box-content">
                                <h4>Shopping cart statistics</h4>
                                <table cellspacing="0" class="cart-totals">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                <strong>Total number of products</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount"><?php echo cart_number(); ?></span></strong>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>
                                                <?=SHIPPING?>
                                            </th>
                                            <td>
                                            Free Delivering for All products to District HeadQuarters<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th>
                                                <strong>Total cart value</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount"><?php echo CURRENCY." ".number_format(cart_total(), 0, ',', '.'); ?></span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-boxes">
                    <div class="col-md-12">
                        <span style="float: left;"><a href="index.php" class="btn btn-lg btn-success">
                            <i class="fa fa-hand-o-left"></i> Come back and keep shopping</a>
                        </span>
                        <div class="actions-continue">
                        <?php if (isset($user_nav)) : ?>
                            <form action="cart/order/checkout" method="post"><input type="submit" value="Continue to Checkout →" name="proceed" class="btn btn-lg btn-primary hand-o-right"></form>
							<?php else: ?>
                                <a href="admin.php" class="btn btn-lg btn-primary">
                            <i class="fa fa-lock"></i> Sign In to Checkout</a>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php require('content/views/shared/footer.php'); ?>