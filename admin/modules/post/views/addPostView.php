<?php
get_header();
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm trang</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" enctype="multipart/form-data" class="row">

                        <div class="col-md-4">
                            <label for="post_title">Tiêu đề</label>
                            <input class="w-100 form-control" type="text" name="post_title" id="post_title">
                            <div class="error">
                                <?php echo form_error('post_title') ?>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <label for="post_status">Trạng thái</label>
                            <input class="w-100 form-control" type="text" name="post_status" id="post_status">
                            <div class="error">
                                <?php echo form_error('post_status') ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="post_creator">Người tạo</label>
                            <input class="w-100 form-control" type="text" name="post_creator" id="post_creator">
                            <div class="error">
                                <?php echo form_error('post_creator') ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="create_time">Thời gian tạo</label>
                            <input class="w-100 form-control" type="date" name="create_time" id="create_time">
                            <div class="error">
                                <?php echo form_error('create_time') ?>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="cat_id">Danh mục </label>
                            <select class="w-100 form-control" name="cat_post" id="">
                                <option value="0">Chọn danh mục</option>
                                <option value="Danh mục 1">Danh mục 1</option>
                                <option value="Danh mục 2">Danh mục 2</option>
                            </select>
                            <div class="error">
                                <?php echo form_error('cat_post') ?>
                            </div>
                        </div>
                        <!-- <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea> -->
                        <div class="col-md-12"><label>Hình ảnh</label>
                            <div id="uploadFile">
                                <img src="public/images/noimage.jpg" id="img" height="300px" class="w-25">
                                <input class="d-none" type="file" name="post_image" id="upload">
                                <label for="upload" class="w-25 bg-dark text-light text-center h-50">
                                    <i class="fa-solid fa-upload"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="post_title">Nội dung</label>
                            <textarea class="w-100 form-control" type="text" name="post_content" id="post_content"></textarea>
                            <div class="error">
                                <?php echo form_error('post_content') ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="post_title">Nội dung ngắn:</label>
                            <textarea class="w-100 form-control" type="text" name="short_content" id="short_content"></textarea>
                            <div class="error">
                                <?php echo form_error('short_content') ?>
                            </div>
                        </div>

                        <div class="ml-3 mt-2">
                            <button type="submit" name="btn-add-post" class="btn btn-danger" id="btn-submit">Thêm mới</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>