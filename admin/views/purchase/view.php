<?php require('admin/views/shared/header.php'); ?>
<?php require('admin/views/shared/loader.php'); ?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<?php require('admin/views/shared/formsearch.php'); ?>
<?php require('admin/views/shared/rightnavbar.php'); ?>
<?php require('admin/views/shared/leftnavbar.php'); ?>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Information line</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= PATH_URL . 'home' ?>"><i class="zmdi zmdi-home"></i> <?=SITE_NAME?></a></li>
                        <li class="breadcrumb-item"><a href="admin.php?controller=order">Order</a></li>
                        <li class="breadcrumb-item active">Order details</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong><?=DATA_ACCESS?></strong> "All products in Order" </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:vorder_id(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:vorder_id(0);">Action</a></li>
                                        <li><a href="javascript:vorder_id(0);">Another action</a></li>
                                        <li><a href="javascript:vorder_id(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th><?=PRODUCT_NAME?></th>
                                            <th>Photo</th>
                                            <th>Cost</th>
                                            <th>Promotion price</th>
                                            <th>Amount</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th><?=PRODUCT_NAME?></th>
                                            <th>Photo</th>
                                            <th>Cost</th>
                                            <th>Promotion price</th>
                                            <th>Amount</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $stt = 0;
                                        $order_total = 0;
                                        foreach ($order_detail as $product) :
                                            $stt++;
                                            if ($product["product_typeid"] == 3) {
                                                $order_total += ($product['product_price'] - (($product['product_price']) * ($product['percentoff']) / 100)) * $product['quantity'];
                                            } else
                                                $order_total += $product['product_price'] * $product['quantity'];
                                        ?>
                                            <tr>
                                                <td><?= $stt; ?></td>
                                                <td><a href="product/<?php echo $product['id']; ?>-<?= $product['slug'] ?>"><?php echo CURRENCY." ".number_format($product['product_price'], 0, ',', ',') ?></a></td>
                                                <td><?php if (is_file("public/upload/products/" . $product['img1'])) echo '<image src="public/upload/products/' . $product['img1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></td>
                                                <td><?= number_format($product['product_price'], 0, ',', '.') ?></td>
                                                <td><? if ($product['saleoff'] == 1) echo ($product['product_price'] - (($product['product_price']) * ($product['percentoff']) / 100)); ?></td>
                                                <td><?= $product['quantity'] ?></td>
                                                <td><?php if ($product["product_typeid"] == 3) {
                                                        echo CURRENCY." ".number_format((($product['product_price'] - (($product['product_price']) * ($product['percentoff']) / 100)) * $product['quantity']), 0, ',', ',');
                                                    } else
                                                        echo number_format($product['product_price'] * $product['quantity'], 0, ',', '.'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <h3 style="font-weight: bold;text-align: center;">Total Money : <?php echo CURRENCY." ".number_format($order_total, 0, ',', ','); ?></h3>
                                <h3 style="font-weight: bold; color: red; text-align: center;"><b> <?= $status[$order['status']] ?></b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3><?=SHIPING_INFORMATION?></h3>
                        <table id="info" class="table">
                            <tr>
                                <td><strong><?=FIRST_AND_LAST_NAME?></strong></td>
                                <td><?php echo $order['customer']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Province/City</strong> </td>
                                <td><?php echo $order['province']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong> </td>
                                <td><?php echo $order['address']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Mobile</strong> </td>
                                <td><?php echo $order['phone']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Time</strong> </td>
                                <td><?php echo $order['createtime']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Messages from customers</strong> </td>
                                <td><?php echo $order['message']; ?></td>
                            </tr>
                        </table>
                        <div style="text-align: center;" class=""><a class="btn btn-warning waves-effect" href="javascript: history.go(-1)">Return</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('admin/views/shared/footer.php'); ?>