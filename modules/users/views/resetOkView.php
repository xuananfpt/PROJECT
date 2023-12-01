



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
                    <h2>ĐỔI MẬT KHẨU</h2>
                </div>
                <div class="form-input">
                <p>Bạn đã thay đổi mật khẩu thành công vui lòng click vào <b><a href="?mod=users&action=login">ĐĂNG NHẬP</a></b></p>
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