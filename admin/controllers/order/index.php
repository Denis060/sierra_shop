
<?php
permission_user();
if (isset($_POST['order_id'])) {
    foreach ($_POST['order_id'] as $order_id) {
        $order_id = intval($order_id);
    }
}
$options = array(
    'order_by' => 'status ASC, id DESC'
);
$url = 'admin.php?controller=order';
$total_rows = get_total('orders', $options);
$title = 'Orders - '.SITE_NAME;
$nav_order  = 'class="active open"';
$orders = get_all('orders', $options);
$status = array(
    0 => 'Unprocessed',
    1 => 'Processed',
    2 => 'Processing',
    3 => 'Cancelled'
);
require('admin/views/order/index.php');