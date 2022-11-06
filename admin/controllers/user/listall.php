
<?php
permission_user();
permission_moderator();
require_once('admin/models/users.php');
$options = array(
    'order_by' => 'id ASC'
);
$title = 'List of Members';
$nav_user = 'class="active open"';
$list_user = get_all('users', $options);
require('admin/views/user/listall.php');