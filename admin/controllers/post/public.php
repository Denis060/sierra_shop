
<?php
permission_user();
require_once('admin/models/posts.php');
$post_id = intval($_GET['post_id']);

$post = get_a_record('posts', $post_id);
global $user_nav;
$login_user = get_a_record('users', $user_nav);

if ($login_user['role_id'] == 2) {
    if ($post['post_author'] == $user_nav) {
        post_public($post_id);
        require('admin/views/post/result.php');
    } else  header('location:admin.php?controller=post');
} else {
    post_public($post_id);
    echo '<div style="padding-top: 200" class="container"><div class="alert alert-success" style="text-align: center;"><strong>Good!</strong> You changed the status of the page to "Public". This page is now viewable to users.<br><br> Go to <a href="admin.php?controller=post">All post</a> or <a href="javascript: history .go(-1)">Back</a>.!!</div></div>';
    require('admin/views/post/result.php');
}
