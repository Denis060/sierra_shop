
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Your personal account information</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= PATH_URL . 'home' ?>"><i class="zmdi zmdi-home"></i> <?=SITE_NAME?></a></li>
                        <li class="breadcrumb-item"><a href="admin.php?controller=user&action=listall">User</a></li>
                        <li class="breadcrumb-item active">Your Profile Info</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <?php if ($user_info['verified'] == 0) : ?>
                        <div class='alert alert-danger' style='text-align: center;'><strong>Attention!</strong> It seems that your account has not confirmed the link sent to your Email or has been changed to a new Email. Please check your mailbox and click on the confirmation link in the Email to activate your Email and account and help increase your account security!! </div>
                    <?php endif; ?>
                    <div class="card">
                        <h3>Personal account information</h3>
                        <table id="info" class="table">
                            <tr>
                                <td><strong>First and last name</strong></td>
                                <td><?php echo $user_info['user_name']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>User name</strong> </td>
                                <td><?php echo $user_info['user_username']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Power</strong> </td>
                                <td><strong><?php if ($user_info['role_id'] == 0) {
                                                echo 'Người đăng ký';
                                            } elseif ($user_info['role_id'] == 1) {
                                                echo 'Admin - Quản trị viên';
                                            } else echo 'Moderator'; ?></strong></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong> </td>
                                <td><?php echo $user_info['user_email']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong> </td>
                                <td><?php echo $user_info['user_address']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Mobile</strong> </td>
                                <td><?php echo $user_info['user_phone']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Account registration date</strong> </td>
                                <td><?php echo $user_info['createDate']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Photo</strong> </td>
                                <td><img style="max-width:250px;" src="public/upload/images/<?php echo $user_info['user_avatar']; ?>" alt="<?php echo $user_info['user_name']; ?>"> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <a class="btn btn-primary waves-effect" href="admin.php?controller=user&action=edit&amp;user_id=<?php echo $user_info['id']; ?>">Edit Information</a>
                        <a class="btn btn-primary waves-effect" href="admin.php?controller=user&action=change-password&amp;user_id=<?php echo $user_info['id']; ?>">Change Password</a>
                        <a class="btn btn-warning waves-effect" href="admin.php?controller=user&action=listall">Return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>