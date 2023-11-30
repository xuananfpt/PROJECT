<?php get_header() ?>

<body>
    <div class="wrapper">

        <!-- BODY -->
        <div class="form-login">
            <div class="image-register">
                <img src="admin/public/images/register.png" alt="" />
            </div>
            <form action="" method="post" class="form-group-login" enctype="multipart/form-data">
                <div class="title-form">
                    <h1>ĐĂNG KÝ</h1>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Nhập tên tài khoản" value="<?php echo set_value('username') ?>">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('username') ?>
                    </p>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="fullname" id="fullname" placeholder="Nhập họ tên" value="<?php echo set_value('fullname') ?>">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('fullname') ?>
                    </p>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" name="phone" id="phone" placeholder="Nhập số điện thoại" value="<?php echo set_value('phone') ?>">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('phone') ?>
                    </p>
                </div>

                <div class="form-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="email" id="email" placeholder="Nhập email" value="<?php echo set_value('email') ?>">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('email') ?>
                    </p>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="password" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('password') ?>
                    </p>
                </div>

                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="password2" id="password2" placeholder="Nhập lại mật khẩu">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('password2') ?>
                    </p>

                </div>

                <!-- <div class="form-input">
                    <input type="file" name="user_image" id="user_image" ">
                </div> -->
                <label for="">Hình ảnh</label>
                <div id=" uploadFile">
                    <img src="admin/public/images/noimage.jpg" id="img" height="100px" width="100px" >
                    <input class="d-none" type="file" name="user_image" id="upload">
                </div>

                <div class="btn-submit">
                    <input type="submit" name="btn-reg" id="btn-reg" value="ĐĂNG KÝ">
                </div>
                <div class=" help">
                    <span>Bạn chưa có tài khoản ! Vui lòng <a href="?mod=users&action=login">Đăng Nhập</a></span>
                </div>
            </form>
        </div>
    </div>
    <script>
    let img = document.getElementById("img");
    let upload = document.getElementById("upload");

    upload.onchange = (e) => {
        if (upload.files[0]) {
            img.src = URL.createObjectURL(upload.files[0]);
        }
    };
</script>
</body>

</html>