<?php
$options = array(
    'where' => 'status = 2',
    'order_by' => 'createtime DESC'
);
$order_inprocess = get_all('orders', $options);
$status = array(
    0 => 'Unprocessed',
    1 => 'Processed',
    2 => 'Processing'
); ?>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Data access</strong> "The order is in process"</h2>
                <?php include "admin/views/order/filter.php";?>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>UserName | User ID</th>
                                <th>Order date</th>
                                <th>Total order value</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>UserName | User ID</th>
                                <th>Order date</th>
                                <th>Total order value</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                $order_total = 0;
                                foreach ($order_inprocess as $order) : ?>
                                <tr>
                                    <td><?php echo $order['id'] ?></td>
                                    <td><a href="admin.php?controller=order&amp;action=view&amp;order_id=<?php echo $order['id']; ?>"><?php echo $order['customer']; ?></a></td>
                                    <?php if ($order['user_id'] <> 0) : $user_order = get_a_record('users', $order['user_id']) ?>
                                        <td><?= $user_order['user_username'] ?> | <?= $user_order['id'] ?></td>
                                    <?php else : ?>
                                        <td></td>
                                    <?php endif; ?>
                                    <?php $order_total += $order['cart_total'];?>

                                    <td><?php echo $order['createtime'] ?></td>
                                    <td><?php echo number_format($order['cart_total'], 0, ',', '.') ?></td>
                                    <td><?php echo $status[$order['status']]; ?></td>
                                    <td><a href="admin.php?controller=order&amp;action=view&amp;order_id=<?php echo $order['id']; ?>" class="btn btn-warning waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-assignment-check"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <h3 style="font-weight: bold;text-align: center;">Total Money : <?php echo CURRENCY." ". number_format($order_total, 0, ',', ','); ?></h3>

                </div>
            </div>
        </div>
    </div>
</div>