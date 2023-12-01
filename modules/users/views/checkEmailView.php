<?php get_header() ?>
<style>
    .text-center {
        text-align: center;
    }
</style>

<body>
    <div class="wrapper">
        <!-- BODY -->
        <div class="form-login">
            <div class="image-login">
                <img src="admin/public/images/login.png" alt="" />
            </div>
            <form action="" method="post" class="form-group-login">
                <div class="title-form">
                    <h1>Quên mật khẩu</h1>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="email" id="username" placeholder="Hãy nhập email để kiểm tra tài khoản">
                </div>
                <div>
                    <p class="error">
                        <?php echo form_error('email') ?>
                    </p>

                </div>
                <div class="btn-submit">
                    <input type="submit" name="btn_reset" id="btn-login" value="Xác thực"">

                </div>
                <div class=" error text-center">
                    <?php echo form_error('account'); ?>
                </div>

                <div class=" help">
                    <span>Bạn chưa có tài khoản ! Vui lòng <a href="?mod=users&action=register">Đăng Ký</a></span>
                </div>
            </form>
        </div>
        <footer></footer>
    </div>
    <script>
        var show = (document.getElementById("show").onclick = function () {
            let password = document.getElementById("password");
            password.type = password.type == "password" ? "text" : "password";
        });
    </script>
</body>

</html>




<!-- <form method="POST">
    <label for="old-pass">Email của bạn</label>
    <input type="email" class="input_email" style="display:block;  " name="email" id="pass-old"
        placeholder="Hãy nhập email để kiểm tra tài khoản">
    <div class="error">
    </div>
    <button type="submit" name="btn_reset" class="btn btn-danger" id="btn-submit">Xác thực</button>
</form> -->