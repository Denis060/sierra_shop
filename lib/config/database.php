<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'MySQLServer_508768');
define('DB_NAME', 'db_sierra_shop');
if (isset($_SESSION['user'])) {
    $user_nav = $_SESSION['user']['id'];
}
$linkconnectDB = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die("Can not connect database");
mysqli_set_charset($linkconnectDB, 'UTF8');
