<?php

$slides = $odb->getData("tbl_slider");

?>

    <div class="row">
        <!-- Your Profile Views Chart -->
        <div class="col-lg-12 m-b30">

            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success alert-dismissible" id="success-alert">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                    <button class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>

            <div class="widget-box">
                <div class="wc-title">
                    <h4>Manage site slider</h4>
                    <a href="add-slider.php" class="float-right btn btn-add">Add a slide</a>
                </div>

                <div class="widget-inner">

                    <?php foreach ($slides as $slide): ?>

                    <div class="card-courses-list bookmarks-bx">
                        <div class="card-courses-media">
                            <img src="../uploads/slider/<?php echo $slide['image'] ?>" alt=""/>
                        </div>
                        <div class="card-courses-full-dec">
                            <div class="card-courses-title">
                                <h6 class="m-b5"><?php echo $slide['title'] ?></h6>
                            </div>
                            <div class="card-courses-list-bx">
                                <ul class="card-courses-view">
                                    <li class="card-courses-categories">

                                        <h5>Texts</h5>
                                        <h4><?php echo $slide['txt_top']; ?></h4>
                                        <h4 size="10"><?php echo $slide['txt_middle']; ?></b></h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="row card-courses-dec">

                                <div class="col-md-12">
                                    <p><?php echo $slide['txt_bottom']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn blue radius-xl">View Details</a>
                                    <a href="update-slider.php?id=<?php echo $slide['id']; ?>" class="btn outline radius-xl">Edit</a>
                                    <a href="delete.php?content=slider&id=<?php echo $slide['id']; ?>" class="btn red outline radius-xl ">Delete</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php endforeach; ?>


                </div>
            </div>
        </div>
        <!-- Your Profile Views Chart END-->
    </div>
