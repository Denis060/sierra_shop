
<?php
require_once('admin/models/users.php');
if (isset($_POST['id_change'])) {
    global $user_nav;
    $login_user = get_a_record('users', $user_nav);
    if ($_POST['id_change'] != $user_nav && $login_user['role_id'] == 0) {
        header('location:index.php');
    }
    $id = intval($_POST['id_change']);
    $newpassword = md5($_POST['newPassword']);
    $currentpassword = md5($_POST['currentPassword']);
    $confirmPassword = md5($_POST['confirmPassword']);
}
if ($newpassword == $currentpassword) {
    echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> change password problem Your new password cannot be the same as your current password !! <br><a href='javascript: history.go(-1)'>Back</a> or < a href='admin.php'>Go to Dashboard</a></div></div>";
} elseif (strlen($_POST['newPassword']) < 8) {
    echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> Password change failed.The password you entered must be 8 characters or more!! <br><a href='javascript: history.go(-1)'>Back</a> or <a href='index.php'>Go to Homepage</a></div></div>";
} elseif ($newpassword == $confirmPassword) {
    echo changePassword($id, $newpassword, $currentpassword);
} else echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong > There is a problem with the password change. The password validation input box does not match the new password you entered !! <br><a href='javascript: history.go(-1)'>Back</ a> or <a href='admin.php'>Go to Dashboard</a></div></div>";
require('admin/views/user/result.php');
