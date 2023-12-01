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

// function sameProductAction()
// {
    
// }
