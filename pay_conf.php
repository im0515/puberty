<?php
    // 値の受け取り.
    $name = isset($_POST['name'])? htmlspecialchars($_POST['name'],ENT_QUOTES,'utf-8'):'';
    $email = isset($_POST['email'])? htmlspecialchars($_POST['email'],ENT_QUOTES,'utf-8'):'';
    $tel = isset($_POST['tel'])? htmlspecialchars($_POST['tel'],ENT_QUOTES,'utf-8'):'';
    $postcode = isset($_POST['postcode'])? htmlspecialchars($_POST['postcode'],ENT_QUOTES,'utf-8'):'';
    $address = isset($_POST['address'])? htmlspecialchars($_POST['address'],ENT_QUOTES,'utf-8'):'';

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
    <title>ご購入手続き|puberty</title>
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
                <h1 class="cart-h1">-buyer's information-</h1>
            </div>
            <form class="pay-form" action="pay_end.html" method="POST">
                <div class="form-group">
                    <p class="form-title">name *</p>
                    <div class="form-information">
                        <p><?php echo $name; ?></p>
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                    </div>
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <p class="form-title">email *</p>
                    <div class="form-information">
                        <p><?php echo $email; ?></p>
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </div>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <p class="form-title">tel *</p>
                    <div class="form-information">
                        <p><?php echo $tel; ?></p>
                        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <p class="form-title">delivery address *</p>
                    <label>-post code</label><br>
                    <div class="form-information">
                        <p><?php echo $postcode; ?></p>
                        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
                    </div>
                    <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
                    <label>-address</label><br>
                    <div class="form-information">
                        <p><?php echo $address; ?></p>
                        <input type="hidden" name="address" value="<?php echo $address; ?>">                        
                    </div>
                    <input type="hidden" name="address" value="<?php echo $address; ?>">
                </div>
                <p class="confirmation">この内容で送信してよろしいですか？</p>
                <button type="submit" class="btn btn-01 btn-04">購入する</button>
                <button type="button" class="btn btn-02" onclick="location.href='./pay.php'">修正する</button>
            </form>
            </section>
        </aside> 
    </article>
</body>
</html>