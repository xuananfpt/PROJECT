<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<style>
    body {
        font-family: sans-serif;
    }

    .form-login {
        margin-top: 70px;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .title-form {
        margin-bottom: 30px;
        text-align: center;
    }

    .form-login .image-login,
    .image-register {
        width: 40%;
    }

    .form-login .image-login img {
        max-width: 80%;
    }

    .form-login .image-register img {
        max-width: 80%;
    }

    .form-login .image-register {
        margin-top: 70px;
    }

    .form-login .form-group-login {
        padding: 30px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        margin-top: 50px;
        margin-right: 30px;
        width: 35%;
    }

    .form-group-login .form-input {
        position: relative;
        margin-top: 0px;
    }

    .form-group-login .form-input i {
        position: absolute;
        font-size: 20px;
        top: 8px;
    }

    .form-group-login .form-input input[type="text"],
    .form-group-login .form-input input[type="password"] {
        border: none;
        border-bottom: 2px solid;
        width: 90%;
        padding: 10px 25px;
        font-size: 17px;
        outline: none;
    }

    .error {
        color: red;
        margin-top: 10px;
    }

    .show-pass {
        display: flex;
        margin-top: 10px;
    }

    .show-pass p {
        margin-left: 5px;
    }

    .forgot-pass {
        float: right;
    }

    .forgot-pass a {
        text-decoration: none;
    }

    .forgot-pass a:hover {
        color: #f12a43;
    }

    .btn-submit {
        text-align: center;
    }

    .btn-submit input {
        width: 100%;
        padding: 10px;
        background-color: #f12a43;
        border-radius: 5px;
        font-weight: bold;
        color: #fff;
        border: none;
        margin-top: 20px;
    }

    .form-group-login .help {
        margin-top: 30px;
        text-align: center;
    }

    .form-group-login .help a {
        text-decoration: none;
    }

    .form-group-login .help a:hover {
        color: #f12a43;
    }
</style>

<body>
    <div class="wrapper">

        <!-- BODY -->
        <div class="form-login">
            <div class="image-register">
                <img src="images/register.png" alt="" />
            </div>
            <form action="" method="post" class="form-group-login">
                <div class="title-form">
                    <h2>ĐĂNG KÝ</h2>
                </div>
                <div class="form-input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nhập họ tên" name="name" id="" />
                </div>
                <div class="error"><span>Vui lòng nhập</span></div>
                <br />
                <div class="form-input">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" placeholder="Nhập số điện thoại" name="name" id="" />
                </div>
                <div class="error"><span>Vui lòng nhập</span></div>
                <br />
                <div class="form-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Nhập email" name="name" id="" />
                </div>
                <div class="error"><span>Vui lòng nhập</span></div>
                <br />
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Nhập mật khẩu" name="name" id="" />
                </div>
                <div class="error"><span>Vui lòng nhập</span></div>
                <!-- <div class="show-pass">
            <input type="checkbox" id="show" />
            <p>Hiện mật khẩu</p>
          </div> -->
                <div class="form-input">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Nhập lại mật khẩu" name="password" id="password" />
                </div>
                <div class="error"><span>Vui lòng nhập</span></div>
                <!-- <div class="show-pass">
            <input type="checkbox" id="show" />
            <p>Hiện mật khẩu</p>
          </div> -->
                <br />
                <div class="btn-submit">
                    <input type="submit" name="btn-login" value="ĐĂNG KÝ" />
                </div>
                <div class="help">
                    <span>Bạn chưa có tài khoản ! Vui lòng <a href="">Đăng Nhập</a></span>
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