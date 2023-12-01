<?php
//đường url ví dụ như: http://localhost/unitop/back-end/lession/section-26/projectmvc.vn/?mod=users&controller=index&action=add
function construct()
{
    load_model('index');
}

function indexAction()
{

    load_view('index');
}
function deleteCartAction()
{
    $i = $_GET['i'];
    echo $i;
    array_splice($_SESSION['addToCart'], $i, 1);
    // unset($_SESSION['addToCart']);
    redirect("?mod=cart&action=index");
}
function checkOutAction()
{
    global $error;
    $dem = 0;
    if (isset($_POST['order-now'])) {
        $dem++;
        if (empty($_POST['name_customer'])) {
            $error['name_customer'] = "Voi lòng nhập thông tin họ tên";
        } else {
            $name_customer = $_POST['name_customer'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = "Voi lòng nhập thông tin email";
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['address_customer'])) {
            $error['address_customer'] = "Voi lòng nhập thông tin địa chỉ";
        } else {
            $address_customer = $_POST['address_customer'];
        }

        if (empty($_POST['phone_customer'])) {
            $error['phone_customer'] = "Voi lòng nhập thông tin số điện thoại";
        } else {
            $phone_customer = $_POST['phone_customer'];
        }
        if ($_SESSION['is_login']) {
            // show_array($_SESSION['login']);
            $id_account = $_SESSION['login']['user_id'];
        } else {
            $error['script'] = '<script>alert("Vui lòng đăng nhập trước khi đặt hàng")</script>';
            // redirect("?mod=users&action=login");
        }
        $sumdh = $_POST['sumdh'];
        $code_order = "hahaha" . $dem;

        if (empty($error)) {
            $data = array(
                'id_account' => $id_account,
                'name_customer' => $name_customer,
                'email' => $email,
                'address_customer' => $address_customer,
                'sum_money' => $sumdh,
                'phone_customer' => $phone_customer,
                'code_orders' => $code_order
            );
            db_add_order($data);

            $get_id_order = load_id_order();

            $id_order = $get_id_order['id_order'];
            //Lấy ra được thì thêm lên bảng detail dh
            foreach ($_SESSION['addToCart'] as $key) {
                $data1 = array(
                    'id_order' => $id_order,
                    'id_product' => $key['product_id'],
                    'quantity' => $key['product_quantity'],
                    'unit_price' => $key['thanhtien']
                );
                insert_order_dh($data1);
            }
            unset($_SESSION['addToCart']);
            echo "<script>
            alert('Bạn đã đặt hành thành công')
            window.location.href = '?';
        </script>";
        }
    }
    load_view('checkout');
}
?>