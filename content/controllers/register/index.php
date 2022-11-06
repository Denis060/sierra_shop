
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST)) {
    $user_add = array(
        'id' => 0,
        'user_username' => escape($_POST['username']),
        'user_password' => md5($_POST['password']),
        'user_email' => escape($_POST['email']),
        'createDate' => gmdate('Y-m-d H:i:s', time() + 7 * 3600)
    );
    global $linkconnectDB;
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $get_user_email_option = array(
        'order_by' => 'id',
    );
    $user_of_email = get_all('users', $get_user_email_option);
    foreach ($user_of_email as $user) {
        if ($user['user_email'] == $email) {
            $get_userid_of_email = $user['id'];
        }
    }
    $title = 'Member registration results';
    if (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_username FROM users WHERE user_username='$username'")) > 0) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> This username already has a user. Please choose another username <a href='javascript: history.go(-1)' >Back</a> or <a href='index.php'>Go to Homepage</a></div></div>";
    } elseif ($_POST['confirmPassword'] != $_POST['password']) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> There is a problem with the member registration You did not verify the correct password !! <br><a href='javascript: history .go(-1)'>Back</a> or <a href='index.php'>Go to Homepage</a></div></div>";
    } elseif (!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a) -z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email)) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> This email is invalid Please enter another email <a href='javascript: history.go(-1)'>Back</a a> or <a href='index.php'>Go to Homepage</a></div></div>";
    } elseif (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_email FROM users WHERE user_email='$email' and verified = 0")) > 0) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> This email is registered but not activated. If you have registered with this email please check your inbox or check your spam folder. A confirmation email will be sent. Click on the link and the email will be activated. <br><br>Do you want <a href='index.php?controller=register&action=resend&id=" . $get_userid_of_email . "'>resend activation code</a> ??<br><br>Or if you want to register a new member <a href='javascript: history.go(-1)'>Back</a > or <a href='index.php'>Go to Homepage</a></div></div>";
    } elseif (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT user_email FROM users WHERE user_email='$email'")) > 0) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> This email already has a user. Please select another Email <a href='javascript: history.go(-1)'>Back< /a> or <a href='index.php'>Go to Homepage</a></div></div>";
    } elseif (strlen($_POST['password']) < 8) {
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> Member registration problem Your password must be 8 characters or longer !! <br><a href='javascript : history.go(-1)'>Back</a> or <a href='index.php'>Go to Homepage</a></div></div>";
    } else {
        // Load Composer's autoloader
        $user_id = save('users', $user_add);
        //send mail
        require 'vendor/autoload.php';
        include 'lib/config/sendmail.php';
        $mail = new PHPMailer(true);
        try {
            $verificationCode = md5(uniqid("Your email is not active. Click here to activate it!", true)); //https://www.php.net/manual/en/function.uniqid
                $verificationLink = PATH_URL . "index.php?controller=register&action=activate&code=" . $verificationCode;
                //Nội dung
                $htmlStr = "";
                $htmlStr .= "Hello " . $username . ' (' . $email . "),<br /><br />";
                $htmlStr .= "Please click the button below to verify your registration and gain access to ".SITE_NAME." admin page.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</ a><br /><br /><br />";
                $htmlStr .= "Thank you for joining as a new member of ".SITE_NAME." sales website.<br><br>";
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
            $mail->setFrom(SMTP_UNAME, SITE_NAME);
            $mail->addAddress($_POST['email'], $email);     
            $mail->addReplyTo(SMTP_UNAME, 'Responder Name');
            //$mail->addCC('CCemail@gmail.com');
            //$mail->addBCC('BCCemail@gmail.com');
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Verification Users | '.SITE_NAME.' | Subscription | By DISTECH';
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
            'verificationCode' => $verificationCode
        );
        save('users', $verificationCode_add);
        echo "<div style='padding-top: 200' class='container'><div style='text-align: center;' class='alert alert-success'><strong>Done!Activation code</strong> has been sent to email: <strong>" . $email . "</strong>. <br><br>Please open your email inbox and click on the given link so you can log in. <br><br><br>This email is not verified. has been saved to the Database.</div></div>";
    }
}
require('content/views/register/result.php');
