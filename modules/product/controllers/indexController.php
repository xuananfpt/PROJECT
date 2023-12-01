<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{

    load_view('index');
}

function detailProductAction()
{
    $id = $_GET['id'];
    $get_product = get_product_by_id($id);
    $data['get_product'] = $get_product;

    $get_image = get_image_product($id);
    // show_array($get_image);
    $data['get_image'] = $get_image;

    // $id = $_GET['id'];
    $iddm = $get_product['product_cat'];
    $same_product = product_cat_same($id, $iddm);
    // show_array($same_product);
    $data['same_product'] = $same_product;
    // load_view('sameProduct', $data);
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

// function sameProductAction()
// {
    
// }
