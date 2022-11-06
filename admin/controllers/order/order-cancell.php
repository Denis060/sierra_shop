
<?php
permission_user();
$options = array(
    'where' => 'status = 3',
    'order_by' => 'createtime DESC'
);
$order_complete  = get_all('orders', $options);

$title = 'Order canceled';
$nav_order  = 'class="active open"';
$status = array(
    0 => 'No process',
    1 => 'Processed',
    2 => 'Processing',
    3 => 'Canceled'
);
require('admin/views/order/order-cancell.php');