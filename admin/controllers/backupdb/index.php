
<?php
permission_user();
permission_moderator();
require_once('admin/models/backupDB.php');
$title = 'Backup Dababase';
$backupdb = 'class="active open"';
if (isset($_POST['back_u_P_Data_base'])) {
    backup_db();
    header('location:admin.php?controller=backupdb&action=result');
}
require('admin/views/backupdb/index.php');
