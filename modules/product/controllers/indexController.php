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
    load_view('detailProduct', $data);
}
function editAction()
{
}
