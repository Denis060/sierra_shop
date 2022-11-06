
<?php
require_once('admin/models/purchase.php');
global $user_nav;
if (!empty($user_nav)) {
    $options = array(
        'where' => 'status = 2 and user_id =' . $user_nav,
        'order_by' => 'createtime DESC'
    );
    $order_delivery  = get_all('orders', $options);
    $title = 'Order in transit';
        $your_Purchase  = 'class="active open"';
    $status = array(
        0 => 'Order confirmed',
        2 => 'Delivery',
        1 => 'Delivered'
    );
}
require('admin/views/purchase/delivery.php');
