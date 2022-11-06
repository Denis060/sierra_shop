
<?php
permission_user();
$options = array(
    'where' => 'status = 1',
    'order_by' => 'createtime DESC'
);
$order_complete  = get_all('orders', $options);

$title = 'Order processed';
$nav_order  = 'class="active open"';
$status = array(
    0 => 'Unprocessed',
    1 => 'Processed',
    2 => 'Processing'
);
require('admin/views/order/order-complete.php');