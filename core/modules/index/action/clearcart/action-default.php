<?php
if (isset($_GET['product_id']))
{
    $to_remove = [];
    foreach ($_SESSION['cart'] as $cart_id => $item)
    {
        if ($_GET['product_id'] == $item['item_id'])
            $to_remove[] = $cart_id;
    }
    foreach ($to_remove as $remove) unset($_SESSION['cart'][$remove]);
    $_SESSION['message'] = L::messages_removed_from_cart_success;
    $_SESSION['alert_type'] = 'success';
}
else
{
    unset($_SESSION['cart']);
    $_SESSION['message'] = L::messages_cart_cleaned_success;
    $_SESSION['alert_type'] = 'success';
}
header('Location: index.php?view=rent');