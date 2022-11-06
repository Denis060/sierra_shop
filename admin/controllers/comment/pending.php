
<?php
permission_user();
require_once('admin/models/comments.php');
$title = 'Unapproved comment';
$nav_comment = 'class="active open"';
require('admin/views/comment/pending.php');
