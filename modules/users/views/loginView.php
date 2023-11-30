<?php get_header() ?>

<body>
    <div class="wrapper">

        <!-- BODY -->
        <div class="form-login">
            <div class="image-login">
                <img src="admin/public/images/login.png" alt="" />
            </div>
            <form action="" method="post" class="form-group-login">
                <div class="title-form">
                    <h1>ĐĂNG NHẬP</h1>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('username') ?>
                    </p>
                    <p class=" error">
                        <?php echo form_error('account') ?>
                    </p>
                </div>
                <!-- <input type="text" placeholder="Nhập tài khoản của bạn" name="name" id="" /> -->

                <br />
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Passowrd" value="">

                </div>
                <div class="error">
                    <p class="error">
                        <?php echo form_error('password') ?>
                    </p>
                    <p class=" error">
                        <?php echo form_error('account') ?>
                    </p>
                </div>
                <div class="show-pass">
                    <input type="checkbox" id="show" />
                    <p>Hiện mật khẩu</p>
                </div>
                <div class="forgot-pass">
                    <a href="">Quên mật khẩu ?</a>
                </div>
                <br />
                <div class="btn-submit">
                    <input type="submit" name="btn-login" id="btn-login" value="ĐĂNG NHẬP"">
           
                </div>
                
                    <div class=" help">
                    <span>Bạn chưa có tài khoản ! Vui lòng <a href="?mod=users&action=register">Đăng Ký</a></span>
                </div>
            </form>
        </div>
        <footer></footer>
    </div>
    <script>
        var show = (document.getElementById("show").onclick = function() {
            let password = document.getElementById("password");
            password.type = password.type == "password" ? "text" : "password";
        });
    </script>
    <!-- <div id="wp-form-login">
        <h1>ĐĂNG NHẬP</h1>
        <form action="" id="form-login" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>">
            <p class="error">
                <?php echo form_error('username') ?>
            </p>
            <input type="password" name="password" id="password" placeholder="Passowrd" value="">
            <p class="error">
                <?php echo form_error('password') ?>
            </p>

            <input type="submit" name="btn-login" id="btn-login" value="ĐĂNG NHẬP"">
            <p class=" error">
            <?php echo form_error('account') ?>
            </p>
        </form>
    </div> -->
</body>

</html>