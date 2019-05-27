<?php

if (isset($_POST['add'])){
    $data = $ofn->validateArray($_POST);

//    print_r($_FILES);
//    print_r($data);

    $image = $ofn->uploadImage($_FILES, "image", "slider");
    if ($image != false){
        $odb->insertSliderData($data, $image);
    } else {
        $message = $image;
    }


}

?>

<div class="col-lg-12 m-b30">

    <?php if (isset($_SESSION['err_msg'])): ?>
        <div class="alert alert-danger alert-dismissible" id="success-alert">
            <?php
            echo $_SESSION['err_msg'];
            unset($_SESSION['err_msg']);
            ?>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    <?php endif; ?>

    <div class="widget-box">
        <div class="wc-title">
            <h4>Add Slider</h4>
        </div>
        <div class="widget-inner">
            <form class="edit-profile m-b30"  action="" method="post" enctype="multipart/form-data" onsubmit="return sliderFormValidate();">
                <div class="row">

                    <div class="form-group col-6">
                        <label class="col-form-label" for="title">Slider title</label>
                        <div>
                            <input class="form-control" type="text" name="title" id="title" value="<?php echo isset($data['title'])?$data['title']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label class="col-form-label">Slider image</label>
                        <div>
                            <input class="form-control-file" type="file" name="image">

                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="txt_top" class="col-form-label">Slider top text</label>
                        <div>
                            <input type="text" class="form-control" name="txt_top" id="txt_top" value="<?php echo isset($data['txt_top'])?$data['txt_top']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="txt_middle" class="col-form-label">Slider main text</label>
                        <div>
                            <input type="text" class="form-control" name="txt_middle" id="txt_middle" value="<?php echo isset($data['txt_middle'])?$data['txt_middle']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <label for="txt_bottom" class="col-form-label">Slider description text</label>
                        <div>
                            <textarea name="txt_bottom" id="txt_bottom" class="form-control" maxlength="300"><?php echo isset($data['txt_bottom'])?$data['txt_bottom']:"";?></textarea>
                            <div class="error-msg"></div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label class="col-form-label" for="btn_left_txt">Left button title</label>
                        <div>
                            <input class="form-control" type="text" name="btn_left_txt" id="btn_left_txt" value="<?php echo isset($data['btn_left_txt'])?$data['btn_left_txt']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label" for="btn_left_url">Left button url</label>
                        <div>
                            <input class="form-control" type="text" name="btn_left_url" id="btn_left_url" value="<?php echo isset($data['btn_left_url'])?$data['btn_left_url']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label class="col-form-label" for="btn_right_txt">Right button title</label>
                        <div>
                            <input class="form-control" type="text" name="btn_right_txt" id="btn_right_txt" value="<?php echo isset($data['btn_right_txt'])?$data['btn_right_txt']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label" for="btn_right_url">Right button url</label>
                        <div>
                            <input class="form-control" type="text" name="btn_right_url" id="btn_right_url" value="<?php echo isset($data['btn_right_url'])?$data['btn_right_url']:"";?>">
                            <div class="error-msg"></div>
                        </div>
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="visibility" class="col-form-label">Publication</label>
                        <div>
                            <input type="radio" name="visibility" id="visibility" value="1" checked required> Published
                            <input type="radio" class="ml-3" name="visibility" id="visibility" value="0"> Unpublished
                        </div>
                    </div>

                    <div class="seperator"></div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-block" name="add">Add Slider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
