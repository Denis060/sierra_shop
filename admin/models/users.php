
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function user_login($input, $password)
{
    global $linkconnectDB;
    //autoselect login with username or email : https://stackoverflow.com/questions/16436704/login-with-username-or-email

    // //cách 1
    // if (filter_var($input, FILTER_VALIDATE_EMAIL)) { //https://www.php.net/manual/pt_BR/function.filter-var.php
    //     $type = "user_email";
    // } else {
    //     $type = "user_username";
    // } 
    // $sql = "SELECT * FROM users WHERE $type='$input' AND user_password='$password' LIMIT 0,1";

    // //cách 2
    // if (stripos($input, '@') !== FALSE) {
    //     $sql = "SELECT * FROM users WHERE user_email = '$input' AND user_password='$password' LIMIT 0,1";
    // } else {
    //     $sql = "SELECT * FROM users WHERE user_username = '$input' AND user_password='$password' LIMIT 0,1";
    // }

    //cách 3
    $sql = "SELECT * FROM `users` WHERE (LOWER(`user_username`)='" . strtolower($input) . "' OR
    LOWER(`user_email`)='" . strtolower($input) . "') AND `user_password`='" . $password . "'";

    $query = mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        global $user_nav;
        $user_nav = $_SESSION['user']['id'];
        return true;
    }
    return false;
}
function user_delete($id)
{
    $user = get_a_record('users', $id);
    $image = 'public/upload/images/' . $user['user_avatar'];
    if (is_file($image)) {
        unlink($image);
    }
    global $linkconnectDB;
    $id = intval($id);
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
}
function changePassword($id, $newpassword, $currentPassword)
{
    global $linkconnectDB;
    $sql = "Update users SET user_password='$newpassword' WHERE id='$id' AND user_password = '$currentPassword'";
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    $rows =  mysqli_affected_rows($linkconnectDB); //Gets the number of affected rows in a previous MySQL operation
    if ($rows <> 1) {
        return "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO! </strong> change password problem You entered incorrect password !! <br><a href='javascript: history.go(-1)'>Back</a> or <a href=' admin.php'>Go to Dashboard</a></div></div>" . mysqli_error($linkconnectDB);    
    } else {
        $options = array(
            'id' => $id,
            'user_password' => $newpassword,
            'editTime' => gmdate('Y-m-d H:i:s', time() + 7 * 3600)

        );
        save('users', $options);
        //sendmail
        require 'vendor/autoload.php';
        include 'lib/config/sendmail.php';
        $mail = new PHPMailer(true);
        $user = get_a_record('users', $id);
        $email = $user['user_email'];
        try {
            //content
            $htmlStr = "";
            $htmlStr .= "Hi " . $user['user_username'] . ' (' . $email . "),<br /><br />";
            $htmlStr .= "Your password was changed not too long ago...<br /><br />";
            $htmlStr .= "Please check and <a href='" . PATH_URL . "admin.php'>Login</a></div> again with your new password.<br><br>";
            $htmlStr .= "Sincerely,<br />";
            $htmlStr .= "<a href='https://distech.com/' target='_blank'>By DISTECH</a><br />";
            //Server settings
            $mail->CharSet = "UTF-8";
            $mail->SMTPDebug = 0; // Enable verbose debug output (0 : ko hiện debug, 1 hiện)
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = SMTP_UNAME; // SMTP username
            $mail->Password = SMTP_PWORD; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = SMTP_PORT; // TCP port to connect to
            //Recipients
            $mail->setFrom(SMTP_UNAME, OWNER);
             $mail->addAddress($email, $email); // Add a recipient | name is option recipient name
             $mail->addReplyTo(SMTP_UNAME, SITE_NAME);
             //$mail->addCC('CCemail@gmail.com');
             //$mail->addBCC('BCCemail@gmail.com');
             $mail->isHTML(true); // Set email format to HTML
             $mail->Subject = 'You have Change your Password | Sierra Shop | By DISTECH';
             $mail->Body = $htmlStr;
             $mail->AltBody = $htmlStr; //None HTML
             $result = $mail->send();
             if (!$result) {
                 $error = "An error occurred while sending mail";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        return '<div style="padding-top: 200" class="container"><div class="alert alert-success" style="text-align: center;"><strong>Good!</strong> You Password has been changed successfully. And a notification message has been sent to this user\'s Email. Please <a href="admin.php?controller=home&action=logout">Logout</a> and login again.!!</div></div>';    
    }
}
function user_update()
{
    global $user_nav;
    $user_login = get_a_record('users', $user_nav);
    if ($_POST['user_id'] <> 0) $editTime = gmdate('Y-m-d H:i:s', time() + 7 * 3600);
    else $editTime = '0000-00-00 00:00:00';

    if (isset($_POST['roleid']) && $user_login['role_id'] == 1) $roleid = $_POST['roleid'];
    else $roleid = $user_login['role_id'];

    $user_edit = array(
        'id' => intval($_POST['user_id']),
        'user_email' => escape($_POST['email']),
        'user_username' => escape($_POST['username']),
        'user_name' => escape($_POST['name']),
        'user_address' => escape($_POST['address']),
        'user_phone' => escape($_POST['phone']),
        'editTime' => $editTime,
        'role_id' => $roleid
    );
    global $linkconnectDB;
    $email_check = addslashes($_POST['email']);
    $id_check = intval($_POST['user_id']);
    if (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_email FROM users WHERE user_email='$email_check'")) != 0 && mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_email FROM users WHERE id='$id_check' AND user_email='$email_check'")) <> 1) {
        echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> Email This already has a user. Please select another Email <a href='javascript: history.go(-1)'>Back</a></div></div>";
        require('admin/views/user/result.php');
        exit;
    } else {
        $get_currentEmail_user = get_a_record('users', $_POST['user_id']);
        $currentEmail = $get_currentEmail_user['user_email'];
        $user_id =  save('users', $user_edit);
        $avatar_name = 'avatar-user' . $user_id . '-' . slug($_POST['username']);
        $config = array(
            'name' => $avatar_name,
            'upload_path'  => 'public/upload/images/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $avatar = upload('imagee', $config);
        //cập nhật ảnh mới
        if ($avatar) {
            $user_edit = array(
                'id' => $user_id,
                'user_avatar' => $avatar
            );
            save('users', $user_edit);
        }
        $user_edited = get_a_record('users', $user_id);
        if ($user_edited['user_email'] != $currentEmail) {
            //send mail
            require 'vendor/autoload.php';
            include 'lib/config/sendmail.php';
            $email = $user_edited['user_email'];
            $mail = new PHPMailer(true);
            try {
                $verificationCode = md5(uniqid("Your email has just been changed and is not active yet. Click here to activate! Love you 3 thousand", true)); //https://www.php.net/manual/en/function.uniqid
                $verificationLink = PATH_URL . "index.php?controller=register&action=reactivate&code=" . $verificationCode;
                //content
                $htmlStr = "";
                $htmlStr .= "Hi " . $user_edited['user_name'] . " (" . $user_edited['user_username'] . "),<br /><br />";
                $htmlStr .= "You just changed your account email? Please click the button below to verify your email change and gain access to ".OWNER." admin page.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</ a><br /><br /><br />";
                $htmlStr .= "Thank you for joining the sales website of Ms. Koi.<br><br>";
                $htmlStr .= "Sincerely,<br />";
                $htmlStr .= "<a href='https://distech.com/' target='_blank'>By DISTECH</a><br />";
                //Server settings
                $mail->CharSet = "UTF-8";
                $mail->SMTPDebug = 0; // Enable verbose debug output (0 : ko hiện debug, 1 hiện)
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = SMTP_UNAME; // SMTP username
                $mail->Password = SMTP_PWORD; // SMTP password
                $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = SMTP_PORT; // TCP port to connect to
                //Recipients
                $mail->setFrom(SMTP_UNAME, OWNER);
                $mail->addAddress($email, $email); // Add a recipient | name is option recipient name
                $mail->addReplyTo(SMTP_UNAME, 'Responder Name');
                //$mail->addCC('CCemail@gmail.com');
                //$mail->addBCC('BCCemail@gmail.com');
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'Verification New Email | Sierra Shop | Change Email | By DISTECH';
                $mail->Body = $htmlStr;
                $mail->AltBody = $htmlStr; //None HTML
                $result = $mail->send();
                if (!$result) {
                    $error = "An error occurred while sending mail";
                }
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
            $verificationCode_add = array(
                'id' => $user_id,
                'verificationCode' => $verificationCode,
                'verified' => 0
            );
            save('users', $verificationCode_add);
        }
        header('location:admin.php?controller=user&action=info&user_id=' . intval($_POST['user_id']));
    }
}
function user_add()
{
    $user_add = array(
        'id' => intval($_POST['user_id']),
        'user_username' => escape($_POST['username']),
        'user_password' => md5($_POST['password']),
        'user_email' => escape($_POST['email']),
        'role_id' => escape($_POST['roleid']),
        'user_name' => escape($_POST['name']),
        'user_address' => escape($_POST['address']),
        'createDate' => gmdate('Y-m-d H:i:s', time() + 7 * 3600),
        'user_phone' => escape($_POST['phone'])
    );
    global $linkconnectDB;
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    //https://freetuts.net/xay-dung-chuc-nang-dang-nhap-va-dang-ky-voi-php-va-mysql-85.html
    if (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_username FROM users WHERE user_username='$username'")) > 0) {
        echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> Name This login already has a user. Please choose another username <a href='javascript: history.go(-1)'>Back</a></div></div>";
        require('admin/views/user/address.php');
        exit;
    } elseif (!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a) -z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email)) {
        echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> Email This is not valid. Please enter another email. <a href='javascript: history.go(-1)'>Back</a></div></div>";
        require('admin/views/user/address.php');
        exit;
    } elseif (strlen($_POST['password']) < 8) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> The password you enter must be 8 characters or more!! <br><a href='javascript: history.go(-1)' >Back</a></div></div>";
        exit;
    } elseif (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_email FROM users WHERE user_email='$email'")) > 0) {
        echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> Email This already has a user. Please select another Email <a href='javascript: history.go(-1)'>Back</a></div></div>";
        require('admin/views/user/addresult.php');
        exit;
    } else {
        $user_id =  save('users', $user_add);
        $avatar_name = 'avatar-user' . $user_id . '-' . slug($_POST['username']);
        $config = array(
            'name' => $avatar_name,
            'upload_path'  => 'public/upload/images/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $avatar = upload('imagee', $config);
        if ($avatar) {
            $user_add = array(
                'id' => $user_id,
                'user_avatar' => $avatar
            );
            save('users', $user_add);
        }
        //send mail
        require 'vendor/autoload.php';
        include 'lib/config/sendmail.php';
        $mail = new PHPMailer(true);
        try {
            $verificationCode = md5(uniqid("Your email has just been changed and is not active yet. Click here to activate! Love you 3 thousand", true)); //https://www.php.net/manual/en/function.uniqid
                $verificationLink = PATH_URL . "index.php?controller=register&action=activate&code=" . $verificationCode;
                //Nội dung
                $htmlStr = "";
                $htmlStr .= "Hello" . $email . "),<br /><br />";
                $htmlStr .= "Please click the button below to verify your registration and gain access to ".OWNER." admin page.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</ a><br /><br /><br />";
                $htmlStr .= "Thank you for joining as a new member of Sierra Shop website.<br><br>";
                $htmlStr .= "Sincerely,<br />";
                $htmlStr .= "<a href='https://distech.com/' target='_blank'>By DISTECH</a><br />";
            //Server settings
            $mail->CharSet = "UTF-8";
            $mail->SMTPDebug = 0; // Enable verbose debug output (0 : ko hiện debug, 1 hiện)
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = SMTP_UNAME; // SMTP username
            $mail->Password = SMTP_PWORD; // SMTP password
            $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = SMTP_PORT; // TCP port to connect to
            //Recipients
            $mail->setFrom(SMTP_UNAME, OWNER);
             $mail->addAddress($email, $email); // Add a recipient | name is option recipient name
             $mail->addReplyTo(SMTP_UNAME, 'Responder Name');
             //$mail->addCC('CCemail@gmail.com');
             //$mail->addBCC('BCCemail@gmail.com');
             $mail->isHTML(true); // Set email format to HTML
             $mail->Subject = 'Verification Users | Sierra Shop | Subscription | By DISTECH';
            $mail->Body = $htmlStr;
            $mail->AltBody = $htmlStr; //None HTML
            $result = $mail->send();
            if (!$result) {
                $error = "An error occurred while sending mail";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        $verificationCode_add = array(
            'id' => $user_id,
            'verificationCode' => $verificationCode,
            'verified' => 0
        );
        save('users', $verificationCode_add);
        header('location:admin.php?controller=user&action=info&user_id=' . $user_id);
    }
}
