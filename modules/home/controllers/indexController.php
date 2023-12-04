<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
    $list_phone_cat = get_list_product_cat_phone();
    $list_laptop_cat = get_list_product_cat_laptop();
    $get_cat = get_list_cat();
    $data['get_cat'] = $get_cat;
    $list_product = array(
        '1' => $list_phone_cat,
        '2' => $list_laptop_cat,
    );
    // show_array($_SESSION['user_login']);
    $data['list_product'] = $list_product;
    load_view('index', $data);
}
// //Đi vào bên trong ACT

function detailProductAction()
{
    $id = $_GET['id'];
    $get_product = get_product_by_id($id);
    $data['get_product'] = $get_product;
    load_view('detailProduct', $data);
}

function allProductAction()
{
    if (isset($_POST['btn-search'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    if (isset($_GET['price'])) {
        $price = $_GET['price'];
    } else {
        $price = "";
    }
    // echo $price;
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $get_cat = get_list_cat();
    $data['get_cat'] = $get_cat;


    $get_product = get_all_product($keyw, $price, $id);
    $data['get_product'] = $get_product;
    load_view('allProduct', $data);
}
