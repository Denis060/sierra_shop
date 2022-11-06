
<?php
permission_user();
require_once('admin/models/products.php');
$title = 'Total Edited Products';
$nav_product  = 'class="active open"';
require('admin/views/product/update.php');