<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>

    <link rel="stylesheet" href="../assets/css/carrinhoDecomprar/carrinhodecompar.css">
</head>

<body>
<?php include '../backend/carrinho/carrinho.php'; ?>
<div class="cartSection">
    <form method="post" action="">
        <input type="hidden" name="product_id" value="#QUE-007544-002">
        <input type="hidden" name="product_name" value="Item Name 1">
        <input type="hidden" name="product_price" value="15.00">
        <input type="submit" name="add_to_cart" value="Adicionar ao Carrinho">
    </form>
</div>
    <div class="wrap cf">
        <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1>
        <div class="heading cf">
            <h1>My Cart</h1>
            <a href="#" class="continue">Continue Shopping</a>
        </div>
        <div class="cart">
            <ul class="cartWrap">
                <li class="items odd">

                    <div class="infoWrap">
                        <div class="cartSection">
                            <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="text" class="qty" placeholder="3" /> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>
                <li class="items even">

                    <div class="infoWrap">
                        <div class="cartSection">

                            <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="text" class="qty" placeholder="3" /> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>

                <li class="items odd">
                    <div class="infoWrap">
                        <div class="cartSection">

                            <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="text" class="qty" placeholder="3" /> x $5.00</p>

                            <p class="stockStatus out"> Out of Stock</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                </li>
                <li class="items even">
                    <div class="infoWrap">
                        <div class="cartSection info">

                            <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                            <p class="itemNumber">#QUE-007544-002</p>
                            <h3>Item Name 1</h3>

                            <p> <input type="text" class="qty" placeholder="3" /> x $5.00</p>

                            <p class="stockStatus"> In Stock</p>

                        </div>


                        <div class="prodTotal cartSection">
                            <p>$15.00</p>
                        </div>

                        <div class="cartSection removeWrap">
                            <a href="#" class="remove">x</a>
                        </div>
                    </div>
                    <div class="special">
                        <div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div>
                    </div>
                </li>


                <!--<li class="items even">Item 2</li>-->

            </ul>
        </div>

        <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo"
                placholder="Enter Code" />
            <a href="#" class="btn"></a>
        </div>

        <div class="subtotal cf">
            <ul>
                <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>

                <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>

                <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
                <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
                <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
            </ul>
        </div>
    </div>b
</body>

<script>
    // Remove Items From Cart
    $('a.remove').click(function () {
        event.preventDefault();
        $(this).parent().parent().parent().hide(400);

    })

    // Just for testing, show all items
    $('a.btn.continue').click(function () {
        $('li.items').show(400);
    })
</script>


</html>