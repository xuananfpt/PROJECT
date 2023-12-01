<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<style>
    .text-center {
        text-align: center;
    }
</style>
<?php get_header() ?>

<body>
    <div class="wrapper">
        <!-- BODY -->
        <div class="form-login">
            <div class="image-register">
                <img src="admin/public/images/register.png" alt="" />
            </div>
            <form action="" method="post" class="form-group-login">
                <div class="title-form">
                    <h2>ĐĂNG KÝ</h2>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Vui lòng nhập họ tên" name="fullname" value="<?php echo set_value("fullname") ?>">
                </div>
                <div class="error">
                    <?php echo form_error('fullname') ?>
                </div>
                <!-- <br /> -->
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nhập tên user" name="username" value="<?php echo set_value('username') ?>" >
                </div>
                <div class="error">
                    <?php echo form_error('username') ?>
                </div>
                <!-- <br /> -->
                <div class="form-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" >
                </div>
                <div class="error">
                    <?php echo form_error('email') ?>
                </div>
                <!-- <br /> -->
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Nhập mật khẩu" name="password" id="" />
                </div>
                <div class="error">
                    <?php echo form_error('password') ?>
                </div>
              
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Nhập lại mật khẩu" name="re_password" id="password" />
                </div>
                <div class="error">
                    <?php echo form_error('re_password') ?>
                </div>
                <!-- <div class="show-pass">
            <input type="checkbox" id="show" />
            <p>Hiện mật khẩu</p>
          </div> -->
                <br />
                <div class="btn-submit">
                    <input type="submit" name="btn-register" value="ĐĂNG KÝ" />
                </div>
                <div class="error text-center">
                    <?php echo form_error('acount') ?>
                </div>
                <div class="help">
                    <span>Bạn chưa có tài khoản ! Vui lòng <a href="?mod=users&action=login">Đăng Nhập</a></span>
                </div>
            </form>
        </div>
    </div>
    <!-- <script>
      var show = (document.getElementById("show").onclick = function () {
        let password = document.getElementById("password");
        password.type = password.type == "password" ? "text" : "password";
      });
    </script> -->
</body>

</html>