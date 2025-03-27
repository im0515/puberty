<?php

    $delete_name = isset($_POST['delete_name'])? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';

    session_start();

    if($delete_name != '') unset($_SESSION['products'][$delete_name]);

    //合計初期値0.
    $total = 0;

    $products = isset($_SESSION['products'])? $_SESSION['products']:[];

    foreach($products as $name => $product){
            //各商品小計を取得.
            $subtotal = (int)$product['price']*(int)$product['count'];
            //各商品小計を$totalに足す.
            $total += $subtotal;
            }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-13xxxxxxxxx"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        
        gtag('config', 'UA-13xxxxxxxxx');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart|puberty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imbue:opsz,wght@10..100,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bokor&family=IM+Fell+Great+Primer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- icon -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body class="cart-page">
    <header>
        <div class="hamburger-menu">
            <h1>puberty</h1>
            <div class="cart">
                <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            </div>
                <input type="checkbox" id="menu-btn-check">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--ここからメニュー-->
            <div class="menu-content">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="event.html">EVENT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                </ul>
            </div>
            <!--ここまでメニュー-->
        </div>
    </header>
    <article class="contents">
        <aside>
            <section>
            <div class="wrapper last-wrapper">
                <h1 class="cart-h1">-cart-</h1>
                <div class="cartlist">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>product</th>
                                <th>price</th>
                                <th>items</th>
                                <th>subtotal</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($products as $name => $product): ?>
                            <tr>
                                <td label="商品名："><?php echo $name; ?></td>
                                <td label="価格：" class="text-right">¥<?php echo $product['price']; ?></td>
                                <td label="個数：" class="text-right"><?php echo $product['count']; ?></td>
                                <td label="小計：" class="text-right">¥<?php echo $product['price']*$product['count']; ?></td>
                                <td>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="delete_name" value="<?php echo $name; ?>">
                                        <button type="submit" class="btn btn-03">delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <tr class="total">
                                <th colspan="3">total</th>
                                <td colspan="2">¥<?php echo $total; ?></td>
                            </tr>
                        </tbody>
                    </table>
                <div class="cart-btn">
                    <button type="button" class="btn btn-01" onclick="location.href='pay.php'" <?php if(empty($products)) echo 'disabled="disabled"'; ?>>購入手続き</button>
                    <button type="button" class="btn btn-02" onclick="location.href='shop.php'">お買い物を続ける</button>
                </div>
                </div>
            </div>
            </section>
        </aside> 
    </article>
</body>
</html>