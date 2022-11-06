
<?php
permission_user();
require_once('admin/models/feedbacks.php');
$title = 'Total List of Responses';
$nav_feedback = 'class="active open"';
require('admin/views/feedback/index.php');