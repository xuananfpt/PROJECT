<?php
function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
    ob_start();
}

function indexAction()
{
    if (isset($_POST['btn-submit'])) {
        $keyw = $_POST['keyw'];
    } else {
        $keyw = "";
    }
    $list_cat = get_list_cat($keyw);
    $data['list_cat'] = $list_cat;
    load_view('index', $data);
}