
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('admin/models/users.php');
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $newpassword = md5($_POST['newpassword']);
    $confirmNewPassword = md5($_POST['confirmNewPassword']);

    $user = get_a_record('users', $id);
    $email = $user['user_email'];
    if ($newpassword == $user['user_password']) {
        echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> password change problem The new password you just entered is your current password <br><br>Have you recalled your password <i class='zmdi zmdi-favorite'> </i> !! <br><a href='javascript: history.go(-1)'>Back</a> or <a href='index.php'>Go to homepage</a>< /div></div>";
     } elseif (strlen($_POST['newpassword']) < 8) {
         echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> Password change failed.The password you entered must be 8 characters or more!! <br><a href='javascript: history.go(-1)'>Back</a> or <a href='index.php'>Go to Homepage</a></div></div>";
     }elseif ($newpassword == $confirmNewPassword) {
        $options = array(
            'id' => $id,
            'user_password' => $newpassword
        );
        save('users', $options);

        //send mail
        require 'vendor/autoload.php';
        include 'lib/config/sendmail.php';
        $mail = new PHPMailer(true);
        try {
            //content
            $htmlStr = "";
            $htmlStr .= "Xin chào " . $user['user_username'] . ' (' . $email . "),<br /><br />";
            $htmlStr .= "Your password was changed not too long ago...<br /><br />";
            $htmlStr .= "Please check and <a href='" . PATH_URL . "admin.php'>Login</a></div> again with your new password.<br><br>";
            $htmlStr .= "Sincerely,<br />";
            $htmlStr .= "<a href='https://tanhongit.com/' target='_blank'>By DISTECH</a><br />";
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
            $mail->setFrom(SMTP_UNAME, SITE_NAME);
            $mail->addAddress($email, $email);     
            $mail->addReplyTo(SMTP_UNAME, 'DISTECH');
            //$mail->addCC('CCemail@gmail.com');
            //$mail->addBCC('BCCemail@gmail.com');
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'You have Change your Password | '.SITE_NAME.' | By DISTECH';
            $mail->Body = $htmlStr;
            $mail->AltBody = $htmlStr; //None HTML
            $result = $mail->send();
            if (!$result) {
                $error = "An error occurred while sending mail";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        echo '<div style="padding-top: 200" class="container"><div class="alert alert-success" style="text-align: center;"><strong>Good!</strong> You Password has been changed successfully. And a notification message has been sent to this user\'s Email. Go to <a href="admin.php?controller=home&action=login">Login</a> and log back in.!!</div></div>';
     } else echo "<div style='padding-top: 200' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong > There is a problem with the password change. The password validation input box does not match the new password you entered !! <br><a href='javascript: history.go(-1)'>Back< /a> or <a href='index.php'>Go to homepage</a></div></div>";
}
require('content/views/forgot-password/result.php');
