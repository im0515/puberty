<?php

    $name = isset($_POST['name'])? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8') : '';
    $price = isset($_POST['price'])? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8') : '';
    $count = isset($_POST['count'])? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';

    session_start();
    //もし、sessionにproductsがあったら
    if(isset($_SESSION['products'])){  
        //$_SESSION['products']を$productsという変数にいれる
        $products = $_SESSION['products']; 
        //$productsをforeachで回し、キー(商品名)と値（金額・個数）取得
        foreach($products as $key => $product){  
            //もし、キーとPOSTで受け取った商品名が一致したら、
            if($key == $name){ 
                //既に商品がカートに入っているので、個数を足し算する     
                $count = (int)$count + (int)$product['count'];
            }
        }
    }
    //配列に入れるには、$name,$count,$priceの値が取得できていることが前提なのでif文で空のデータを排除する.
    if($name!=''&&$count!=''&&$price!=''){
        $_SESSION['products'][$name]=[
            'count' => $count,
            'price' => $price
        ];
    }
    $products = isset($_SESSION['products'])? $_SESSION['products']:[];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imbue:opsz,wght@10..100,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bokor&family=IM+Fell+Great+Primer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- icon -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<header>
    <div class="header-area">
        <h1>puberty</h1>
        <div class="cart">
            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        </div>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--ここからメニュー-->
            <div class="menu-content">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">EVENT</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">SHOP</a></li>
                </ul>
            </div>
            <!--ここまでメニュー-->
        </div>
</header>
<body>
    <article class="contents">
        <main>
            <img class="sab-main-img" src="img/sab-main.png">
            <h1 class="sab-main-h1">-SHOP-</h1>
        </main>
        <aside>
            <section>
                <div class="shop-menu">
                    <a href="shop.php"><img src="img/all01.png" onmouseover="this.src='img/all02.png'" onmouseout="this.src='img/all01.png'" /></a>
                    <a href="shop-tops.php"><img src="img/tops01.png" onmouseover="this.src='img/tops02.png'" onmouseout="this.src='img/tops01.png'" /></a>
                    <a href="shop-bottoms.php"><img src="img/bottoms01.png" onmouseover="this.src='img/bottoms02.png'" onmouseout="this.src='img/bottoms01.png'" /></a>
                    <img src="img/one02.png">
                </div>
                <div class="item-list">
                    <ul class="grid02">
                        <li>
                            <img src="img/none.png" >
                            <div class="item-body">
                                <p>one-piece<br>¥8000</p>
                                <form action="shop-onepiece.php" method="POST" class="item-form">
                                    <input type="hidden" name="name" value="one-piece">
                                    <input type="hidden" name="price" value="8000">
                                    <input type="text" value="1" name="count">
                                    <button type="submit" class="btn-sm btn-blue">Add to cart</button>
                                </form>
                            </div><!-- end item-body--> 
                        </li>
                        <li>
                            <img src="img/none.png" >
                            <div class="item-body">
                                <p>one-piece<br>¥8000</p>
                                <form action="shop-onepiece.php" method="POST" class="item-form">
                                    <input type="hidden" name="name" value="one-piece">
                                    <input type="hidden" name="price" value="8000">
                                    <input type="text" value="1" name="count">
                                    <button type="submit" class="btn-sm btn-blue">Add to cart</button>
                                </form>
                            </div><!-- end item-body--> 
                        </li>
                        <li>
                            <img src="img/none.png" >
                            <div class="item-body">
                                <p>one-piece<br>¥8000</p>
                                <form action="shop-onepiece.php" method="POST" class="item-form">
                                    <input type="hidden" name="name" value="one-piece">
                                    <input type="hidden" name="price" value="8000">
                                    <input type="text" value="1" name="count">
                                    <button type="submit" class="btn-sm btn-blue">Add to cart</button>
                                </form>
                            </div><!-- end item-body--> 
                        </li>
                        <li>
                            <img src="img/none.png" >
                            <div class="item-body">
                                <p>one-piece<br>¥8000</p>
                                <form action="shop-onepiece.php" method="POST" class="item-form">
                                    <input type="hidden" name="name" value="one-piece">
                                    <input type="hidden" name="price" value="8000">
                                    <input type="text" value="1" name="count">
                                    <button type="submit" class="btn-sm btn-blue">Add to cart</button>
                                </form>
                            </div><!-- end item-body--> 
                        </li>
                    </ul>
                </div><!-- end itemlist -->
            </section>
        </aside>
    </article> 
    <footer>
        <div class="block">
            <h1>puberty</h1>
            <ol>
                <li><a href="">HOME</a></li>
                <li><a href="">EVENT</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">SHOP</a></li>
            </ol>
        </div>
        <address>〒000-0000 xxxx xxx 5-3-8 203<br>
            TEL:000-0000<br>
            E-MAIL:xxxx.xx@gmailcom
        </address>
    </footer>
</body>
</html>