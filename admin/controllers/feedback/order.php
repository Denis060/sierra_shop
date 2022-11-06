
<?php
permission_user();
require_once('admin/models/feedbacks.php');
$title = 'Customer feedback about your order';
$nav_feedback = 'class="active open"';
require('admin/views/feedback/order.php');
