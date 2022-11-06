<?php
require_once('admin/models/purchase.php');
global $user_nav;
if (!empty($user_nav)) {
    $options = array(
        'where' => 'user_id =' . $user_nav,
        'order_by' => 'createtime DESC'
    );
    $order_all  = get_all('orders', $options);
    $title = 'All your orders';
        $your_Purchase  = 'class="active open"';
    $status = array(
        0 => 'Order confirmed',
        2 => 'Delivery',
        1 => 'Delivered',
        3 => 'Order canceled'
    );
}
require('admin/views/purchase/index.php');