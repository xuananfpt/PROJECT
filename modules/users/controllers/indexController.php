<?php

use MicrosoftAzure\Storage\Common\Internal\Validate;
use PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer;

//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load('lib', 'email');
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
}
//Tạo ra một file đăng kí như này

function loginAction()
{
    // Lấy được ngày tháng năm
    // echo time();
    // echo date("d/m/Y h:m:s");
    //LẤy được một chuỗi -? insert database
    global $error, $username, $password;
    if (isset($_POST['btn-login'])) {
        $error = array();
        #kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường username";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Pass không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        #Kết luận
        if (empty($error)) { {
                //Kiểm tra có tồn tại trên đó hay chưa
                if (check_login($username, $password)) {
                    // Lưu trữ phiên đăng nhập
                    $_SESSION['is_login'] = true;
                    $_SESSION['user_login'] = $username;
                    $user = get_user($_SESSION['user_login']);
                    // Lấy ra ảnh của user
                    $_SESSION['login'] = $user;
                    $_SESSION['image_user'] = $user['user_image'];
                    $_SESSION['role_user'] = $user['role'];
                    // echo $_SESSION['role_user'];
                    redirect("?");
                } else {
                    $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
                }
            }
        }
    }
    load_view('login');
}

function registerAction()
{
    // Lấy được ngày tháng năm
    $created_date = time();
    // date("d/m/Y h:m:s");
    // LẤy được một chuỗi -? insert database
    global $error, $username, $password, $fullname, $email;
    if (isset($_POST['btn-register'])) {
        $error = array();
        #kiểm Tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống trường fullname";
        } else {
            $fullname = $_POST['fullname'];
        }
        #kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường username";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Pass không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống trường email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Pass không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        #Kiểm tra repassword
        if (empty($_POST['re_password'])) {
            $error['re_password'] = "Không được để trống trường nhập lại mật khẩu";
        } else {
            if ($_POST['re_password'] == $_POST['password']) {
                $re_password = md5($_POST['re_password']);
            } else {
                $error['re_password'] = "Không được để trống trường nhập lại mật khẩu";
            }
        }

        #Kết luận
        if (empty($error)) { {

                if (!check_user_exits($username, $email)) {
                    //Giá trị phân biệt và giá trị thay đổi => nó thay đổi liên tục trong db
                    $active_token = md5($username . time());
                    $data = array(
                        'fullname' => $fullname,
                        'username' => $username,
                        'password' => $re_password,
                        'email' => $email,
                        'created_date' => $created_date,
                        'active_token' => $active_token,
                    );
                    db_insert_user($data);
                    redirect("https://mail.google.com/mail/u/0/#inbox");
                    $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
                    $content = " <p>Chào bạn {$fullname}</p>
                                  <p>Bạn vui lòng click vào đường link này để kích hoạt tài khoản: {$link_active}</p>
                                 <p>Nếu không phải bạn đăng ký tài khoản thì hãy bỏ qua email này</p>
                                  <p>DASTORE</p> ";
                    send_mail($email, $fullname, "KÍCH HOẠT TÀI KHOẢN CỦA DASMART", $content);

                    echo "<script>
                    alert('Chúc mừng bạn đã kích hoạt tài khoản thành công');
                 </script>";
                } else {
                    $error['acount'] = "Email hoặc user đã tồn tại trước đó trên hệ thống";
                }
            }
        }
    }
    load_view('register');
}
function activeAction()
{
    $active_token = $_GET['active_token'];
    if (check_active_token($active_token)) {
        $data = array(
            'is_active' => 1,
        );
        active_user($active_token, $data);
        $link_login = base_url("?mod=users&action=login");
        echo "Bạn đã kích hoạt thành công vui lòng kích vào sau để đăng nhập: <a href='$link_login'>Đăng nhập</a>";
        //Tạo ra một view nhìn có đẹp
        // load_view('active');
    } else {
        echo "Yêu cầu kích hoạt không hợp lệ hoặc bạn đã kích hoạt từ trước";
    }
}

function logoutAction()
{
    unset($_SESSION['login']);
    unset($_SESSION['is_login']);
    unset($_SESSION['login']);
    unset($_SESSION['user_login']);
    unset($_SESSION['image_user']);
    unset($_SESSION['role_user']);
    redirect("?mod=users&action=login");
}

function checkEmailAction()
{

    #CÁC BƯỚC ĐỂ XỬ LÝ KHÔI PHỤC MẬT KHẨU
    //Tạo giao diện
    //Validate form
    //Kiểm tra email trên hệ thống
    //TẠo mã reset_pass_token
    //Gửi mã reset_pass_token vào CSDL và vào email người dùng
    //Xác thực yêu cầu lấy lại mật khẩu
    //Chọn mật khẩu mới
    //Cập nhật mật khẩu
    global $error;
    if (isset($_GET['reset_token'])) {
        //Trường hợp có mã reset_token trên hệ thống
        //Lấy xuống
        $reset_token = $_GET['reset_token'];

        if (check_reset_token($reset_token)) {
            //Khi tồn tại $reset_token -> từ đó thì lấy xuống và tạo thành một form mới để làm việc với nó!
            global $error, $success;
            #Các bước 
            //Xây dựng giao diện 
            //Validate 
            //Kiểm tra theo điều kiện là mật khẩu cũ có tồn tại trong mật khẩu cũ không
            //Update thông tin cho mật khẩu này
            if (isset($_POST['btn-change-pass'])) {
                $error = array();
                $success = array();
                #Kiểm tra password
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống trường pass mới";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Password không đúng địn dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }
                // $confirm_pass = md5($_POST['confirm_pass']);
                //Nhập lại pass
                if (($_POST['confirm_pass']) == ($_POST['password']) && $_POST['confirm_pass'] != "") {
                    $confirm_pass = md5($_POST['confirm_pass']);
                } else {
                    $error['confirm_pass'] = "Cần xác thực lại mật khẩu mới";
                }
                if (empty($error)) {
                    $data = array(
                        'password' => $confirm_pass,
                    );
                    update_pass($data, $reset_token);
                    echo "<script>
                    alert('Bạn đã đổi mật khẩu thành công');
                    </script>";
                    redirect("?mod=users&action=resetOk");
                }
            }
            load_view('reset');
        } else {
            echo "Yêu cầu lấy lại mật khẩu không hợp lệ";
        }
    } else {
        if (isset($_POST['btn_reset'])) {
            #kiểm tra email
            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống email";
            } else {
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không đúng định dạng";
                } else {
                    $email = $_POST['email'];
                }
            }
            #kết luận sau khi kiểm tra trường dl xong
            if (empty($error)) {
                if (check_email($email)) {
                    //Mã hoá mã email gửi đến người dùng
                    $reset_token = md5($email . time());
                  
                    $data = array(
                        'reset_token' => $reset_token,
                    );
                    //Cập nhập dữ liệu lên database
                    update_reset_token($data, $email);
                    //Gửi link khôi phục vào email của người dùng
                    $link_set_user = base_url("?mod=users&action=checkEmail&reset_token={$reset_token}");
                    $content = "<p>Bạn vui lòng click vào link sau để khôi phục mật khẩu của bạn: {$link_set_user}</p>
                <b>Nếu không phải yêu cầu của bạn, vui lòng bỏ qua email này</b>
                <b>ADMIN XUÂN AN XIN CÁM ƠN BẠN ĐÃ QUAN TÂM</b>";
                    send_mail($email, "", "KHÔI PHỤC PASSWORD CỦA DASMART CỦA BẠN", $content);
                    redirect("https://mail.google.com/mail/u/0/#inbox");
                } else {
                    echo "Làm gì có cái này thế em";
                }
            }
        }
        load_view('checkEmail');
    }
}

function updateAction()
{
    #Cập nhật tài khoản
    // Tạo giao diện 
    // Load lại thông tin cũ
    // Validate form 
    // Cập nhật thông tin

    global $error;
    $get_user = get_list_user();
    $data['get_user'] = $get_user;

    // global $error;
  
    if (isset($_POST['btn-update'])) {
        // echo "Đã bấm submit";
        $error = array();
        // $fullname = $_POST['fullname'];
        // $address = $_POST['address'];
        // $phone_number = $_POST['phone_number'];
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Bạn không được để trường fullname rỗng";
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['address'])) {
            $error['address'] = "Bạn không được để trường address rỗng";
        } else {
            $address = $_POST['address'];
        }
        if (empty($_POST['phone_number'])) {
            $error['phone_number'] = "Bạn không được để trường phone_number rỗng";
        } else {
            if (!is_phone('phone_number')) {
                $error['phone_number'] = "Số điện thoại không định dạng";
            } else {
                $phone_number = $_POST['phone_number'];
            }
        }
        $target_dir = "public/images/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        if ($_FILES['image']['name'] == "") {
            $user_image = $get_user['user_image'];
        } else {
            $user_image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        }
        //Ti nua kiem tra
        if (empty($error)) {
            //Update
            $data = array(
                'fullname' => $fullname,
                'address' => $address,
                'phone_number' => $phone_number,
                'user_image' => $user_image,
            );
            //Cập nhật dữ liệu thằng mới login zoo
            update_user_login($_SESSION['login']['username'], $data);
        }
    }
    //Lấy dữ liệu ở trên database xuống theo cái thằng lưu trữ SESSION
    //Xong rồi đẩy dữ liệu qua phần view

    // show_array($_SESSION['user_login'])
    // echo user_login();
    // echo user_login();
    // echo $_SESSION('user_login');
    // show_array($_SESSION['login']);
    $username_login = $_SESSION['login']['username'];

    $info_user = get_user_by_username($username_login);

    // show_array($info_user);
    $data['info_user'] = $info_user;
    load_view('update',$data);
}
