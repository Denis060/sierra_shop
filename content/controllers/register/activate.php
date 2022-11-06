
<?php
if (!empty($_GET['code'])) {
    $select_user_option = array(
        'order_by' => 'id'
    );
    $user_need_activate = get_all('users', $select_user_option);
    foreach ($user_need_activate as $user) {
        if ($user['verificationCode'] == $_GET['code']) {
            $verifi_id_user = $user['id'];
        }
    }
    if (!isset($verifi_id_user)) {
        show_404();
        exit;
    }
    $user_edit = array(
        'id' => $verifi_id_user,
        'verified' => 1
    );
    save('users', $user_edit);
    echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-success'><strong>Done!</strong> You have successfully activated your account, you can now log in to ".SITE_NAME." website. Go to <a href='admin.php'>Login</a></div></div>";
    require('content/views/register/result.php');
}
