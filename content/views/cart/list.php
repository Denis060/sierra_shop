
<div class="featured-box featured-box-secundary featured-box-cart">
    <div class="box-content">

        <?php if(cart_number()<1): ?>
        <h2 class="shorter"><strong>Cart is Empty</strong></h2>
        <?php else: ?>

        <form method="post" action="index.php?controller=cart" role="form">
            <table cellspacing="0" class="shop_table cart">
                <thead>
                    <tr>
                        <th class="product-thumbnail">
                            &nbsp;
                        </th>
                        <th class="product-name">
                        Product
                        </th>
                        <th class="product-price">
                        Price
                        </th>
                        <th class="product-quantity">
                        Quantity                        
                        </th>
                        <th class="product-subtotal">
                        Subtotal
                        </th>
                        <th class="product-remove">
                            &nbsp;
                        </th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php foreach ($cart as $product_id => $product) { ?>
                        <tr class="cart_table_item">
                            
                            <td class="product-thumbnail">
                                <a href="product/<?php echo $product['id'] . '-' . slug($product['name']); ?>">
                                    <img width="100" height="100" alt="<?= $product['name'] ?>" class="img-responsive" src="<?php echo 'public/upload/products/' . $product['image'] ?>">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="product/<?php echo $product['id'] . '-' . slug($product['name']); ?>"><?php echo $product['name'] ?></a>
                            </td>
                            <td class="product-price">
                                <?php if ($product["typeid"] == 3) : ?>
                                    <span class="amount"><?php echo $product ? CURRENCY." ". number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.') : 0; ?></span>
                                <?php else : ?>
                                    <span class="amount"><?php echo CURRENCY." ". number_format($product['price'], 0, ',', '.'); ?></span>
                                <?php endif ?>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="input-text qty text" title="enter to change quantity" value="<?php echo $product['number']; ?>" name="number[<?php echo $product['id']; ?>]" min="1" step="1" max="100">
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <?php if ($product["typeid"] == 3) : ?>
                                    <span class="amount"><?php echo CURRENCY." ". number_format((($product['price']) - ($product['price']) * ($product['percent_off']) / 100) * $product['number'], 0, ',', '.') ;CURRENCY?></span>
                                <?php else : ?>
                                    <span class="amount"><?php echo CURRENCY." ". number_format($product['price'] * $product['number'], 0, ',', '.') ?></span>
                                <?php endif ?>
                            </td>
                            <td class="product-remove">
                                <div style="width: 90px;">
                                    <button  style="padding: 7px 11px; border:1px solid black; border-radius: 3px;" type="submit" value="Update Cart" class="btn btn-default" title='Update if you have a quantity change'>
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    
                                    <a style="padding: 7px 11px; border:1px solid black; border-radius: 3px;" title="Remove this item" class="remove" href="cart/delete/<?php echo $product['id']; ?>">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                                
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td class="actions" colspan="6">
                            <div class="actions-continue">
                                <form method="post" action="index.php?controller=cart&action=destroy" role="form">
                                        <span style="float: right;">
                                            <strong>If you want to clean the cart press</strong> 
                                            <button onclick="return confirm('Are you sure to delete?')" type="submit" value="Clear cart" class="btn btn-danger" title='Clear cart if you want to clean'>
                                                <b><i class="fa fa-trash"></i> Clear cart</b>
                                            </button>
                                        </span>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php endif; ?>

    </div>
</div>
