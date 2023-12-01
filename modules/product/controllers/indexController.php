<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
    if (isset($_POST['btn-search'])) {
        $keyw = $_POST['keyw'];
        $list_product = get_list_product($keyw);
        show_array($list_product);
        $data['list_product'] = $list_product;
        load_view('index', $data);
    }

    // show_array($list_product);
    // load_view('listProduct', $data);

}

function detailProductAction()
{
    $id = $_GET['id'];
    if (!isset($_SESSION['addToCart'])) {
        $_SESSION['addToCart'] = [];
    }
    if (isset($_POST['btn-comment'])) {
        $id_product = $_GET['id'];
        global $error;
        // show_array($_POST);

        if (!$_SESSION['is_login']) {
            $error['binhluan'] = "<script> alert('Vui lòng đăng nhập để bình luận');
            window.location.href = '?mod=users&action=login';
        </script>";
        } else {
            $id_user = $_SESSION['login']['user_id'];
            $binh_luan = $_POST['binhluan'];
        }
        $time_now = date("d/m/Y");
        // echo $time_now;
        if (empty($error)) {
            $data = array(
                'id_product' => $id_product,
                'id_user' => $id_user,
                'content_comment' => $binh_luan,
                'comment_time' => $time_now
            );
            insert_comment($data);
        }
        ;
    }
    #Mảng load comment
    $load_comment = load_all_comment_product($id);
    // show_array($load_comment);
    //Đây là phần lưu giỏ hàng rùi An ơi ...
    $data['load_comment'] = $load_comment;
   #Mảng lấy gữ liệu PRODUCT
    $get_product = get_product_by_id($id);
    $data['get_product'] = $get_product;
    $get_image = get_image_product($id);
    // show_array($get_image);
    $data['get_image'] = $get_image;
    // $id = $_GET['id'];
    $iddm = $get_product['product_cat'];
    #Mảng lấy sản phẩm cùng loại
    $same_product = product_cat_same($id, $iddm);
    // show_array($same_product);
    $data['same_product'] = $same_product;
    // load_view('sameProduct', $data);
    if (isset($_POST['btn-add-cart'])) {
        // show_array($_POST);
        $product_id = $_GET['id'];
        $product_image = $_POST['product_image'];
        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $product_quantity = $_POST['quantity'];
        $product_discount = $_POST['product_discount'];
        $thanhtien = ($_POST['quantity'] * $_POST['product_discount']);
        $checkSp = false;
        // show_array($_SESSION['addToCart']);
        foreach ($_SESSION['addToCart'] as $key => $value) {

            if ($value['product_id'] == $product_id) {
                $checkSp = true;
                $_SESSION['addToCart'][$key]['product_quantity'] += $product_quantity;
                $_SESSION['addToCart'][$key]['thanhtien'] += $thanhtien;
                break;
            }
        }
        if (!$checkSp) {
            //Lưu trữ sessopm
            $data = array(
                'product_id' => $product_id,
                'product_image' => $product_image,
                'product_name' => $product_name,
                'product_quantity' => $product_quantity,
                'product_discount' => $product_discount,
                'thanhtien' => $thanhtien
            );
            //Thêm dữ liệu vào mảng giỏ hàng
            array_push($_SESSION['addToCart'], $data);
        }
        redirect("?mod=cart&action=index");
    }
    
    load_view('detailProduct', $data);
}


function insertCommentAction()
{
    if (isset($_POST['btn-comment'])) {
        if (isset($_SESSION['login'])) {
            show_array($_SESSION['login']);
        }

        $comment_content = $_POST['comment_content'];
    }

    $data = array(
        'comment_content' => $comment_content,
    );
}
function trashAction() {
    $id_comment = $_GET['id_comment'];
    $id_product = $_GET['id_product'];
    $data = array(
        'comment_status' => 0
    );
    db_update_status_cmn($data, $id_comment);
    echo 'echo "<script>
alert("Binhg luận đã được ẩn, hãy quay lại trang chủ");
            window.location.href = "index.php?act=order";
        </script>"';
}

?>

// function sameProductAction()
// {
    
// }

