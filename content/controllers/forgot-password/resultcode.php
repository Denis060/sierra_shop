
<?php
if (!empty($_GET['code'])) {

    $select_user_option = array(
        'order_by' => 'id'
    );
    $verifi_id_user = 0;
    $user_need_change_pass = get_all('users', $select_user_option);
    foreach ($user_need_change_pass as $user) {
        if ($user['verificationCode'] == $_GET['code']) {
            $verifi_id_user = 1;
            $user_id = $user['id'];
        }
    }
    if ($verifi_id_user != 1) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>Oh No!</strong> Your account confirmation link to change your password is incorrect.Please check again <br><br>If this is our fault. system, you can send feedback <a href='index.php?controller=feedback'>Here</a></div></div>";
        require('content/views/forgot-password/result.php');
    } else {
        header('location:' . PATH_URL . 'index.php?controller=forgot-password&action=change-password&id=' . $user_id);
    }
}
