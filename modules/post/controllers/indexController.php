<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{

    load_model('index');
}
// //Đặt tên đúng cách
function indexAction()
{
    $list_post = get_list_post();
    $data['list_post'] = $list_post;
    load_view('index', $data);
}
// //Đi vào bên trong ACT
function detailPostAction()
{
    $id = $_GET['id'];
    $get_post = get_post_by_id($id);
    $data['get_post'] = $get_post;
    // show_array($get_post);
    load_view('detailPost', $data);
}

function editAction()
{
}
