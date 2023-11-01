<?php
session_start();

// Verifique se há uma ação de adicionar ao carrinho
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Adicione o produto ao carrinho
    $_SESSION['cart'][] = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price
    );
}

// Função para calcular o total do carrinho
function calculateCartTotal() {
    $total = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'];
        }
    }

    return $total;
}
