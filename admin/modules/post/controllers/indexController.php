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
// //Đi vào bên trong ACT

function listPostAction()
{
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search'];
        // echo "Bạn đang muốn tìm kiếm gì ư?";
        $list_post = load_all_key_word_same($search);
        $data['list_post'] = $list_post;
        load_view('listPost', $data);
    } else {
        $list_post = get_list_post();
        // show_array($list_post);
        $data['list_post'] = $list_post;
        load_view('listPost', $data);
    }
}
function trashPostAction()
{
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search'];
        // echo "Bạn đang muốn tìm kiếm gì ư?";
        $list_post = load_all_key_word_same($search);
        $data['list_post'] = $list_post;
        load_view('trashPost', $data);
    } else {
        $list_post = get_list_post_trash();
        // show_array($list_post);
        $data['list_post'] = $list_post;
        load_view('trashPost', $data);
    }
}
function addPostAction()
{
    global $error;
    if (isset($_POST['btn-add-post'])) {

        if (empty($_POST['post_title'])) {
            $error['post_title'] = "Không được để trông trường này";
        } else {
            $post_title = $_POST['post_title'];
        }
        //status
        if (empty($_POST['post_status'])) {
            $error['post_status'] = "Không được để trông trường này";
        } else {
            $post_status = $_POST['post_status'];
        }
        //page_creator
        if (empty($_POST['post_creator'])) {
            $error['post_creator'] = "Không được để trông trường này";
        } else {
            $post_creator = $_POST['post_creator'];
        }
        //cat_id
        if (empty($_POST['cat_post'])) {
            $error['cat_post'] = "Không được để trông trường này";
        } else {
            $cat_post = $_POST['cat_post'];
        }
        //create_time
        if (empty($_POST['create_time'])) {
            $error['create_time'] = "Không được để trông trường này";
        } else {
            $create_time = $_POST['create_time'];
        }

        $post_image = $_FILES['post_image']['name'];
        $target_dir = "public/images/";
        $target_file = $target_dir . basename($_FILES['post_image']['name']);
        move_uploaded_file($_FILES['post_image']['tmp_name'], $target_file);

        if (empty($error)) {
            $data = array(
                'post_title' => $post_title,
                'post_status' => $post_status,
                'post_creator' => $post_creator,
                'cat_post' => $cat_post,
                'create_time' => $create_time,
                'post_image' => $post_image,
            );
            insert_list_post($data);
            redirect("?mod=post&action=listPost");
        }
    }
    load_view('addPost');
}
function deletePostAction()
{
    $id = $_GET['id'];
    // echo $idPage;
    delete_post($id);
}
function editPostAction()
{
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search'];
        // echo "Bạn đang muốn tìm kiếm gì ư?";
        $list_post = load_all_key_word_same($search);
        $data['list_post'] = $list_post;
        load_view('listPost', $data);
    } else {
        $list_post = get_list_post();
        // show_array($list_post);
        $data['list_post'] = $list_post;
    }

    $id = $_GET['id'];

    if (isset($_POST['btn-edit'])) {

        $post_title = $_POST['post_title'];

        $post_status = $_POST['post_status'];

        $post_creator = $_POST['post_creator'];

        $cat_post = $_POST['cat_post'];

        $create_time = $_POST['create_time'];


        $target_dir = "public/images/";
        $target_file = $target_dir . basename($_FILES['post_image']['name']);
        if ($_FILES['post_image']['name'] == "") {
            $post_image = $list_post['cat_image'];
        } else {
            $post_image = $_FILES['post_image']['name'];
            move_uploaded_file($_FILES['post_image']['tmp'], $target_file);
        }
        // show_array($_POST);
        $data = array(
            'post_title' => $post_title,
            'post_status' => $post_status,
            'post_creator' => $post_creator,
            'cat_post' => $cat_post,
            'create_time' => $create_time,
            'post_image' => $post_image
        );
        update_item_post($id, $data);
        redirect("?mod=post&action=listPost");
    }

    $post_item = get_post_by_id($id);
    $data1['post_item'] = $post_item;
    load_view('editPost', $data1);
}
function delPostsoftAction()
{
    $id = $_GET['id'];
    $post_item = get_post_by_id($id);
    $data1['post_item'] = $post_item;
    $update = array(
        'post_status' => 'Không hoạt động'
    );
    delPostsoft($id, $update);
    redirect('?mod=post&action=listPost');
    load_view('delPostsoft', $data1);
}
function resPostAction()
{
    $id = $_GET['id'];
    $post_item = get_post_by_id($id);
    $data['post_item'] = $post_item;
    $update = array(
        'post_status' => 'Hoạt động'
    );
    delPostsoft($id, $update);
    redirect('?mod=post&action=trashPost');
    load_view('resPost', $data);
}
