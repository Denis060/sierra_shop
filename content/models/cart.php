
<?php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
function cart_add($product_id, $number)
{
    if (isset($_SESSION['cart'][$product_id])) {

        $_SESSION['cart'][$product_id]['number'] += $number;
    } else {

        $product = get_a_record('products', $product_id);

        $_SESSION['cart'][$product_id] = array(
            'id' => $product_id,
            'name' => $product['product_name'],
            'image' => $product['img1'],
            'number' => $number,
            'typeid' => $product['product_typeid'],
            'percent_off' => $product['percentoff'],
            'price' => $product['product_price'],
            'saleoff' => $product['saleoff']
        );
    }
}

function update_sesion_cart()
{
    global $user_nav, $linkconnectDB;
    if (isset($user_nav)) {
        $option = array(
            'order_by' => 'id asc',
            'where' => 'user_id=' . $user_nav
        );
        $product_of_user = get_all('cart_user', $option);
        if (!empty($product_of_user)) {
            foreach ($product_of_user as $product) {
                if (isset($_SESSION['cart'][$product['product_id']]) && mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT product_id FROM cart_user WHERE product_id=" . $product['product_id']  . "")) == 1) {
                    $_SESSION['cart'][$product['product_id']]['number'] += $product['number'];
                } else {
                    $info_product = get_a_record('products', $product['product_id']);
                    $_SESSION['cart'][$product['product_id']] = array(
                        'id' => $product['product_id'],
                        'name' => $info_product['product_name'],
                        'image' => $info_product['img1'],
                        'number' => $product['number'],
                        'typeid' => $info_product['product_typeid'],
                        'percent_off' => $info_product['percentoff'],
                        'price' => $info_product['product_price'],
                        'saleoff' => $info_product['saleoff']
                    );
                }
            }
        }
    }
}
function update_cart_user_db()
{
    global $user_nav, $linkconnectDB;
    $cart = cart_list();

    if (mysqli_num_rows(mysqli_query($linkconnectDB, "SELECT * FROM cart_user WHERE user_id=" . $user_nav . "")) > 0) {
        foreach ($cart as $product_cart) {
            $option_cart_user = array(
                'order_by' => 'id',
                'where' => 'user_id=' . $user_nav
            );
            $cart_users = get_all('cart_user', $option_cart_user);
            foreach ($cart_users as $cart_user) {
                if ($cart_user['product_id'] == $product_cart['id']) {
                    $status = 1;
                    break;
                } else $status = 0;
            }

            if ($status == 1) {
                $cart_user = array(
                    'id' => $cart_user['id'],
                    'product_id' => $product_cart['id'],
                    'number' => $product_cart['number'],
                );
                save('cart_user', $cart_user);
            } elseif ($status == 0) {
                $cart_user = array(
                    'id' => 0,
                    'user_id' => $user_nav,
                    'product_id' => $product_cart['id'],
                    'number' => $product_cart['number'],
                );
                save('cart_user', $cart_user);
            }
        }
    } else {
        foreach ($cart as $product_cart) {
            $up_cart_user = array(
                'id' => 0,
                'user_id' => $user_nav,
                'product_id' => $product_cart['id'],
                'number' => $product_cart['number'],
            );
            save('cart_user', $up_cart_user);
        }
    }
    /*
    Synchronous analysis of the number of products in the cart to the db:
    will first check the current user on the db
    there are 2 cases: 1 is the current user has no products on the db, 2 is there are already some products on it
    TH1:
        check if current user has any sp on db
        if not, will proceed to upload the product with id = 0 as default (add sp)
    TH2: (there are already some products on it)
        2.0) check if the current user has any sp on the db
        2.1) if the product in the cart does not exist in the db, will proceed to add sp with id = 0
        2.2) If a number of products in the cart is already on the db -> proceed to change the quantity with id = product id in the cart (Must check if it belongs to the logged in user)
    */
}
//delete products synchronously between session and db when the user has placed an order
function detroy_cart_user_db()
{
    global $user_nav, $linkconnectDB;
    $sql = "DELETE FROM cart_user WHERE user_id=" . $user_nav;
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
}

function delete_cart_user_db($product_id)
{
    global $user_nav, $linkconnectDB;
    $sql = "DELETE FROM cart_user WHERE user_id=" . $user_nav . " and product_id=" . $product_id;
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
}

function cart_update($product_id, $number)
{
    if ($number == 0) {

        unset($_SESSION['cart'][$product_id]);
    } else {
        $_SESSION['cart'][$product_id]['number'] = $number;
    }
}

function cart_delete($product_id)
{
    unset($_SESSION['cart'][$product_id]);
}

function cart_total()
{
    $total = 0;
    foreach ($_SESSION['cart'] as $product) {
        if ($product["typeid"] == 3) {
            $total += (($product['price']) - ($product['price']) * ($product['percent_off']) / 100) * $product['number'];
        } else
            $total += $product['price'] * $product['number'];
    }
    return $total;
}

function cart_number()
{
    $number = 0;
    foreach ($_SESSION['cart'] as $product) {
        $number += $product['number'];
    }
    return $number;
}

function cart_list()
{
    return $_SESSION['cart'];
}

function cart_destroy()
{
    $_SESSION['cart'] = array();
}
