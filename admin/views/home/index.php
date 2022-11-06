
<?php require('admin/views/shared/header.php'); ?>
<?php require('admin/views/shared/loader.php'); ?>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<?php require('admin/views/shared/formsearch.php'); ?>
<?php require('admin/views/shared/leftnavbar.php'); ?>
<?php require('admin/views/shared/rightnavbar.php'); ?>
<link href="<?=PATH_URL?>admin/themes/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


<style>
        /* Card */
    .card {
    margin-bottom: 30px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
    }

    .card-header,
    .card-footer {
    border-color: #ebeef4;
    background-color: #fff;
    color: #798eb3;
    padding: 15px;
    }

    .card-title {
    padding: 20px 0 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: #012970;
    font-family: "Poppins", sans-serif;
    }

    .card-title span {
    color: #899bbd;
    font-size: 14px;
    font-weight: 400;
    }

    .card-body {
    padding: 0 20px 20px 20px;
    }

    .card-img-overlay {
    background-color: rgba(255, 255, 255, 0.6);
    }

    /*--------------------------------------------------------------
    # Dashboard
    --------------------------------------------------------------*/
    /* Filter dropdown */
    .dashboard .filter {
    position: absolute;
    right: 0px;
    top: 15px;
    }

    .dashboard .filter .icon {
    color: #aab7cf;
    padding-right: 20px;
    padding-bottom: 5px;
    transition: 0.3s;
    font-size: 16px;
    }

    .dashboard .filter .icon:hover,
    .dashboard .filter .icon:focus {
    color: #4154f1;
    }

    .dashboard .filter .dropdown-header {
    padding: 8px 15px;
    }

    .dashboard .filter .dropdown-header h6 {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #aab7cf;
    margin-bottom: 0;
    padding: 0;
    }

    .dashboard .filter .dropdown-item {
    padding: 8px 15px;
    }

    /* Info Cards */
    .dashboard .info-card {
    padding-bottom: 10px;
    }

    .dashboard .info-card h6 {
    font-size: 28px;
    color: #012970;
    font-weight: 700;
    margin: 0;
    padding: 0;
    }

    .dashboard .card-icon {
    font-size: 32px;
    line-height: 0;
    width: 64px;
    height: 64px;
    flex-shrink: 0;
    flex-grow: 0;
    }

    .dashboard .sales-card .card-icon {
    color: #4154f1;
    background: #f6f6fe;
    }

    .dashboard .revenue-card .card-icon {
    color: #2eca6a;
    background: #e0f8e9;
    }

    .dashboard .customers-card .card-icon {
    color: #ff771d;
    background: #ffecdf;
    }

    /* Activity */
    .dashboard .activity {
    font-size: 14px;
    }

    .dashboard .activity .activity-item .activite-label {
    color: #888;
    position: relative;
    flex-shrink: 0;
    flex-grow: 0;
    min-width: 64px;
    }

    .dashboard .activity .activity-item .activite-label::before {
    content: "";
    position: absolute;
    right: -11px;
    width: 4px;
    top: 0;
    bottom: 0;
    background-color: #eceefe;
    }

    .dashboard .activity .activity-item .activity-badge {
    margin-top: 3px;
    z-index: 1;
    font-size: 11px;
    line-height: 0;
    border-radius: 50%;
    flex-shrink: 0;
    border: 3px solid #fff;
    flex-grow: 0;
    }

    .dashboard .activity .activity-item .activity-content {
    padding-left: 10px;
    padding-bottom: 20px;
    }

    .dashboard .activity .activity-item:first-child .activite-label::before {
    top: 5px;
    }

    .dashboard .activity .activity-item:last-child .activity-content {
    padding-bottom: 0;
    }

    /* News & Updates */
    .dashboard .news .post-item+.post-item {
    margin-top: 15px;
    }

    .dashboard .news img {
    width: 80px;
    float: left;
    border-radius: 5px;
    }

    .dashboard .news h4 {
    font-size: 15px;
    margin-left: 95px;
    font-weight: bold;
    margin-bottom: 5px;
    }

    .dashboard .news h4 a {
    color: #012970;
    transition: 0.3s;
    }

    .dashboard .news h4 a:hover {
    color: #4154f1;
    }

    .dashboard .news p {
    font-size: 14px;
    color: #777777;
    margin-left: 95px;
    }

    /* Recent Sales */
    .dashboard .recent-sales {
    font-size: 14px;
    }

    .dashboard .recent-sales .table thead {
    background: #f6f6fe;
    }

    .dashboard .recent-sales .table thead th {
    border: 0;
    }

    .dashboard .recent-sales .dataTable-top {
    padding: 0 0 10px 0;
    }

    .dashboard .recent-sales .dataTable-bottom {
    padding: 10px 0 0 0;
    }

    /* Top Selling */
    .dashboard .top-selling {
    font-size: 14px;
    }

    .dashboard .top-selling .table thead {
    background: #f6f6fe;
    }

    .dashboard .top-selling .table thead th {
    border: 0;
    }

    .dashboard .top-selling .table tbody td {
    vertical-align: middle;
    }

    .dashboard .top-selling img {
    border-radius: 5px;
    max-width: 60px;
    }

</style>
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> <?=SITE_NAME?></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <?php if ($user_info_nav['role_id']  == 0) : ?>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>TOTAL PAGES AND POST</h6>
                            <h2><?= $total_order_mine ?> <small class="info">Signing <?= $total_mine_order_inprosess ?> | Order received <?= $total_mine_order_complete ?></small></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <h6>Your total feedback</h6>
                            <h2><?= $total_feedback_mine ?> <small class="info">About the order <?= $total_feedback_mine_order ?> | About the product <?= $total_feedback_mine_product ?></small></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon domains">
                        <div class="body">
                            <h6>Your Total Comments</h6>
                            <h2><?= $total_mine_comment ?> <small class="info">Not accepted yet: <?= $total_mine_comment_noaccept ?></small></h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon traffic">
                        <div class="body">
                            <h6>Total pages and posts</h6>
                            <h2><?= $total_posts ?> <small class="info">Post: <?= $total_post ?> Page: <?= $total_page ?></small></h2>
                            <small>Total statistics turned on "Public"</small>
                            <div class="progress">
                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="<?= $posts_ratio ?>" aria-valuemin="0" aria-valuemax="100" <?= 'style="width:' . $posts_ratio . '%;"' ?>></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>Total order
</h6>
                            <h2><?= $total_order ?> <small class="info">Signing <?= $total_order_inprosess ?> | Not yet <?= $total_order_noprosess ?></small></h2>
                            <small>Order processing information, cancel</small>
                            <div class="progress">
                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="<?= $order_ratio ?>" aria-valuemin="0" aria-valuemax="100" <?= 'style="width:' . $order_ratio . '%;"' ?>></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <h6>Total Feedback</h6>
                            <h2><?= $total_feedback ?> <small class="info">About the order <?= $total_feedback_order ?> | About the product <?= $total_feedback_product ?></small></h2>
                            <small>Statistics of responses viewed and processed</small>
                            <div class="progress">
                                <div class="progress-bar l-purple" role="progressbar" aria-valuenow="<?= $feedback_ratio ?>" aria-valuemin="0" aria-valuemax="100" <?= 'style="width:' . $feedback_ratio . '%;"' ?>></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card widget_2 big_icon domains">
                        <div class="body">
                            <h6>Total Comments</h6>
                            <h2><?= $total_rows_comment ?> <small class="info">Not accepted yet: <?= $total_comment_noaccept ?></small></h2>
                            <small>Statistics of comments accepted</small>
                            <div class="progress">
                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="<?= $comment_ratio ?>" aria-valuemin="0" aria-valuemax="100" <?= 'style="width:' . $comment_ratio . '%;"' ?>></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-8">
                    <?php require('admin/views/order/tableOrderNoprocess.php'); ?>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Statistics <strong>tables</strong></h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="admin.php?controller=comment">Q/Lyric comment</a></li>
                                                <li><a href="admin.php?controller=feedback">Q/Leave feedback</a></li>
                                                <li><a href="admin.php?controller=order">Q / order management</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Statistics</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="zmdi zmdi-assignment"></i> New orders</td>
                                                    <td><?php echo get_time($order_new['createtime'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-assignment-alert"></i> The application has not been processed</td>
                                                    <td><?= $total_order_noprosess ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-assignment-return"></i> The application is canceled</td>
                                                    <td><?= $total_order_cancell ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-assignment-check"></i> Application is being processed</td>
                                                    <td><?= $total_order_inprosess ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-comment-alt-text"></i> New comment</td>
                                                    <td><?php echo get_time($comment_new['createDate'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-comment-alert"></i> Unprocessed Comments</td>
                                                    <td><?= $total_comment_noaccept ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-email-open"></i> New feedback</td>
                                                    <td><?php echo get_time($feedback_new['createTime'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-email"></i> Unprocessed Feedback</td>
                                                    <td><?= $total_feedback_noaccept ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-reader"></i> New page</td>
                                                    <td><?php echo get_time($page_new['post_date'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-tab"></i> Draft page</td>
                                                    <td><?= $total_page_draft ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-receipt"></i> New Posts</td>
                                                    <td><?php echo get_time($post_new['post_date'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-assignment-o"></i> Draft article</td>
                                                    <td><?= $total_post_draft ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Recent Comments <strong>Table</strong></h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="admin.php?controller=comment">Q/Lyric comment</a></li>
                                                <li><a href="admin.php?controller=feedback">Q/Leave feedback</a></li>
                                                <li><a href="admin.php?controller=order">Q/order management</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Content</th>
                                                    <th>Sender</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($comment_five as $comment) :
                                                    if ($comment['status'] == 0) : ?>
                                                        <tr style="background-color: #FFD18E;">
                                                            <td><?php echo substr($comment['content'], 0, 150);
                                                                if (strlen($comment['content']) > 150) echo '...'; ?> </td>
                                                            <td><?= $comment['author'] ?></td>
                                                            <td><a title="Approve" class="btn btn-info btn-icon" href="admin.php?controller=comment&action=approved&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-check-circle"></i></a>
                                                                <a title="Add Trash" class="btn btn-danger btn-icon" href="admin.php?controller=comment&action=trash-action&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-delete"></i></a>
                                                                <a title="Edit" class="btn btn-warning btn-icon" href="admin.php?controller=comment&action=edit&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-eyedropper"></i></a>
                                                                <a title="Add Spam" class="btn btn-danger btn-icon" href="admin.php?controller=comment&action=spam-action&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-minus-circle"></i></a></td>
                                                        </tr>
                                                    <?php else : ?>
                                                        <tr>
                                                            <td><?php echo substr($comment['content'], 0, 150);
                                                                if (strlen($comment['content']) > 150) echo '...'; ?> </td>
                                                            <td><?= $comment['author'] ?></td>
                                                            <td><a title="Unapprove" class="btn btn-default btn-icon" href="admin.php?controller=comment&action=unapproved&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-minus-circle"></i></a>
                                                                <a title="Add Trash" class="btn btn-danger btn-icon" href="admin.php?controller=comment&action=trash-action&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-delete"></i></a>
                                                                <a title="Edit" class="btn btn-warning btn-icon" href="admin.php?controller=comment&action=edit&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-eyedropper"></i></a>
                                                                <a title="Add Spam" class="btn btn-danger btn-icon" href="admin.php?controller=comment&action=spam-action&comment_id=<?= $comment['id'] ?>"> <i class="zmdi zmdi-minus-circle"></i></a></td>
                                                        </tr>
                                                <?php endif;
                                                endforeach; ?>
                                                <tr>
                                                    <td><strong><a href="admin.php?controller=comment">All</a> (<?= $total_rows_comment ?>) | Mine (<?= $total_mine_comment ?>) | <a href="admin.php?controller=comment&action=pending">Pending</a> (<?= $total_comment_noaccept ?>) | <a href="admin.php?controller=comment">Approved</a> (<?= $total_comment_accept ?>) | <a href="admin.php?controller=comment&action=spam">Spam</a> (<?= $total_comment_spam ?>) | <a href="admin.php?controller=comment&action=trash">Trash</a> (<?= $total_comment_trash ?>)</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Recent Feedback <strong>Table</strong></h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="admin.php?controller=comment">Q/lý bình luận</a></li>
                                                <li><a href="admin.php?controller=feedback">Q/lý phản hồi</a></li>
                                                <li><a href="admin.php?controller=order">Q/lý đơn hàng</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Content</th>
                                                    <th>Sender</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($feedback_five as $feedback) :
                                                    if ($feedback['status'] == 0) : ?>
                                                        <tr style="background-color: #FFD18E;">
                                                            <td><?= substr($feedback['subject'], 0, 150) ?> </td>
                                                            <td><?= $feedback['name'] ?></td>
                                                            <td>
                                                                <a title="Approve" class="btn btn-info btn-icon" href="admin.php?controller=feedback&action=approved&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-check-circle"></i></a>
                                                                <a onclick="return confirm('Are you sure to delete?')" title="Delete" class="btn btn-danger btn-icon" href="admin.php?controller=feedback&action=delete&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-delete"></i></a>
                                                                <a title="Edit" class="btn btn-warning btn-icon" href="admin.php?controller=feedback&action=edit&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-eyedropper"></i></a><br>
                                                                <a title="View detail" class="btn btn-success btn-icon" href="admin.php?controller=feedback&action=view&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-eye"></i></a>
                                                                <a title="Reply" class="btn btn-primary btn-icon" href="admin.php?controller=feedback&action=reply&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-mail-reply"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php else : ?>
                                                        <tr>
                                                            <td><?= substr($feedback['subject'], 0, 150) ?> </td>
                                                            <td><?= $feedback['name'] ?></td>
                                                            <td>
                                                                <a title="UnApprove" class="btn btn-default btn-icon" href="admin.php?controller=feedback&action=unapproved&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-minus-circle"></i></a>
                                                                <a onclick="return confirm('Are you sure to delete?')" title="Delete" class="btn btn-danger btn-icon" href="admin.php?controller=feedback&action=delete&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-delete"></i></a>
                                                                <a title="Edit" class="btn btn-warning btn-icon" href="admin.php?controller=feedback&action=edit&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-eyedropper"></i></a>
                                                                <a title="View detail" class="btn btn-success btn-icon" href="admin.php?controller=feedback&action=view&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-eye"></i></a>
                                                                <a title="Reply" class="btn btn-primary btn-icon" href="admin.php?controller=feedback&action=reply&feedback_id=<?= $feedback['id'] ?>"> <i class="zmdi zmdi-mail-reply"></i></a>
                                                            </td>
                                                        </tr>
                                                <?php endif;
                                                endforeach; ?>
                                                <tr>
                                                    <td><strong><a href="admin.php?controller=feedback">All</a> (<?= $total_feedback ?>) | <a href="admin.php?controller=feedback&action=myfeedback">Mine</a> (<?= $total_feedback_mine ?>) | <a href="admin.php?controller=feedback&action=pending">Pending</a> (<?= $total_feedback_noaccept ?>) | <a href="admin.php?controller=feedback">Approved</a> (<?= $total_feedback_status ?>)</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-lg-9">
                    <?php require('admin/views/product/tableoUpdateproduct.php'); ?>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Statistics <strong>Table 2</strong></h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="admin.php?controller=user&action=listall">Q/lý User</a></li>
                                                <li><a href="admin.php?controller=comment">Q/lý bình luận</a></li>
                                                <li><a href="admin.php?controller=feedback">Q/lý phản hồi</a></li>
                                                <li><a href="admin.php?controller=order">Q/lý đơn hàng</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Statistics</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="zmdi zmdi-case"></i> New product</td>
                                                    <td><?= $total_new_product ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-case-download"></i> Promotional products</td>
                                                    <td><?= $total_sale_product ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-case-play"></i> SFeatured products</td>
                                                    <td><?= $total_hot_product ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-case-check"></i> New product update</td>
                                                    <td><?= get_time($product_update['editDate'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-account-add"></i> New user</td>
                                                    <td><?php echo $user_new['user_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-accounts"></i> Total Number of Users</td>
                                                    <td><?= $user_all_total ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-mood-bad"></i> Total Users Not Verified</td>
                                                    <td><?php echo $user_not_veri_total ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-receipt"></i> Total Posts</td>
                                                    <td><?= $total_post ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-reader"></i> Total pages</td>
                                                    <td><?php echo $total_page ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-delete"></i> Spam Pages & Posts</td>
                                                    <td><?= $total_post_trash ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Statistics <strong>Table 3</strong></h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="admin.php?controller=user&action=listall">User Management</a></li>
                                                <li><a href="admin.php?controller=comment">Q/Lyric comment</a></li>
                                                <li><a href="admin.php?controller=feedback">Leave feedback</a></li>
                                                <li><a href="admin.php?controller=order">Order management</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Statistics</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="zmdi zmdi-pin-account"></i> User is online</td>
                                                    <td><?= $users_online_total ?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="zmdi zmdi-accounts-outline"></i> Total User Access</td>
                                                    <td><?= $users_online_all ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php require('admin/views/shared/footer.php'); ?>
<script src="<?=PATH_URL?>admin\themes\plugins\apexcharts\apexcharts.min.js"></script>
<script src="<?=PATH_URL?>admin\themes\plugins\bootstrap1\js\bootstrap.bundle.min.js"></script>
<!-- <script src="assets/vendor/chart.js/chart.min.js"></script> -->
  <!-- <script src="assets/vendor/echarts/echarts.min.js"></script> -->
  <!-- <script src="assets/vendor/quill/quill.min.js"></script> -->
  <!-- <script src="assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <!-- <script src="assets/vendor/tinymce/tinymce.min.js"></script> -->
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
