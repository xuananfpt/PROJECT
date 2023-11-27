<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_comment = get_list_comment_index();
    $data['list_comment'] = $list_comment;
    load_view('index', $data);
}
function detailAction()
{

        $id_product = $_GET['idPro'];
        $detail_comment = get_detail_comment($id_product);
        // show_array($detail_comment);
        $data['detail_comment'] = $detail_comment;
        load_view('detail', $data);
    
    

}


function softCommentAction()
{
    $id_product = $_GET['id'];
    // echo $id_product;
    $data = array(
        'comment_status' => '0'
    );
    update_soft_delete($data, $id_product);
    redirect("?mod=comment&action=index");
}
function detailTrashAction() {
    $list_trash_comment = get_list_comment_trash();
    $data['list_trash_comment'] = $list_trash_comment;
    // show_array($list_trash_comment);
    load_view('detailTrash',$data);
}
function resCommentAction() {
    $id = $_GET['id'];
    $data = array(
        'comment_status' => 1
    );
    update_restore_comment($data, $id);
    redirect("?mod=comment&action=index");
}