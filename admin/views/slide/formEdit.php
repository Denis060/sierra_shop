<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2><? ?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= PATH_URL . 'home' ?>"><i class="zmdi zmdi-home"></i> <?=SITE_NAME?></a></li>
                        <li class="breadcrumb-item"><a href="admin.php?controller=slide">Slide</a></li>
                        <li class="breadcrumb-item active"><?php echo $slide ? 'Update slides: ' . $slide['slide_name']  : 'Add new slides'; ?></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <strong><?php echo $slide ? 'Warning: </strong> You are in the edit page of the slide "' . $slide['slide_name'] . '", Be careful!!! <a target="_blank" href="#"> See the manual</a>' : 'Warning: </strong> You are on the page create a new slide, Be careful!!! <a target="_blank" href="#"> See the manual</a>'; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                            </button>
                    </div>
                    <div class="card">
                        <div class="body">
                            <form id="slide-form" class="form-horizontal" method="post" action="admin.php?controller=slide&amp;action=edit" enctype="multipart/form-data" role="form">
                                <input name="slide_id" type="hidden" value="<?php echo $slide ? $slide['id'] : '0'; ?>" />
                                <h2 class="card-inside-title" style="font-weight:bold;">Same Slide:</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input name="name" type="text" maxlength="255" value="<?php echo $slide ? $slide['slide_name'] : ''; ?>" class="form-control" id="name" placeholder="Enter slide name..." required="" />
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title" style="font-weight:bold;">Activation status is displayed on the homepage:</h2>
                                <div class="form-group">
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="status" id="male" class="with-gap" value="1" <?php if (isset($slide) && $slide['status'] == "1") echo "checked"; ?>>
                                        <label for="male">Activated</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="status" id="Female" class="with-gap" <?php if (isset($slide) && $slide['status'] == "0") echo "checked"; ?> value="0">
                                        <label for="Female">Not activated</label>
                                    </div>
                                </div>
                                <?php for ($i = 1; $i < 6; $i++) : ?>
                                    <h2 class="card-inside-title" style="font-weight:bold;">Text <?= $i ?>:</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="slide_text<?= $i ?>"  maxlength="500" type="text" value="<?php echo $slide ? $slide['slide_text' . $i] : ''; ?>" class="form-control" id="name" placeholder="Enter text <?= $i ?>..." />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="card col-md-6">
                                            <div class="header">
                                                <h2 style="text-align: center;">Image <?= $i ?></h2>
                                            </div>
                                            <div class="body">
                                                <input name="image<?= $i ?>" type="file" class="form-control dropify">
                                            </div>
                                        </div>
                                        <?php if (isset($slide)) : ?>
                                            <div class="col-sm-6">
                                                <div class="header">
                                                    <h2 style="text-align: center;">Image <?= $i ?> Hiện tại</h2>
                                                </div>
                                                <div style="text-align: center;" class="body">
                                                    <img style="max-width:320px;" src="public/upload/slides/<?php echo $slide['slide_img' . $i]; ?>" alt="<?php echo $slide['slide_img' . $i]; ?>">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endfor; ?>
                                <div class="form-group" style="text-align: center;">
                                    <button class="btn btn-primary waves-effect" type="submit"><?php echo $slide ? 'Update slides' : 'Add new slides'; ?></button>
                                    <a class="btn btn-warning waves-effect" href="admin.php?controller=slide">Trở về</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>