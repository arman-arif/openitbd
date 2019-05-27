<?php
?>

<div class="col-lg-12 m-b30">
    <div class="widget-box">
        <div class="wc-title">
            <h4>Add Courses</h4>
        </div>
        <div class="widget-inner">
            <form class="edit-profile m-b30">
                <div class="row">

                    <div class="form-group col-6">
                        <label class="col-form-label">Course title</label>
                        <div>
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="duration" class="col-form-label">Course duration</label>
                        <div>
                            <input type="text" class="form-control" name="duration" id="duration">
                        </div>
                    </div>

                    <div class="form-group col-12">
                        <label for="overview" class="col-form-label">Course overview</label>
                        <div>
                            <textarea name="overview" id="overview" class="form-control ckeditor" maxlength="500"><?php
//                                echo strlen("");
                                $var = "My Name";
                                echo gettype($var);
                                ?></textarea>
                        </div>
                    </div>



                    <div class="form-group col-12">
                        <label class="col-form-label" for="details">Course details</label>
                        <div>
                            <textarea id="details" name="details" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label class="col-form-label">Course title</label>
                        <div>
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">Course start</label>
                        <div>
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">Course expire</label>
                        <div>
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-form-label">Trainer name</label>
                        <div>
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="seperator"></div>



                    <div class="col-12">
                        <button type="reset" class="btn">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
