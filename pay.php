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
            <form class="pay-form"  action="pay_conf.php" method="POST">
                <div class="form-group">
                    <p class="form-title">name *</p>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <p class="form-title">email *</p>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <p class="form-title">tel *</p>
                    <input type="tel" name="tel" required>
                </div>
                <div class="form-group">
                    <p class="form-title">delivery address *</p>
                    <label>-post code</label><br>
                    <input type="text" name="postcode" required><br>
                    <label>-address</label><br>
                <input type="text" name="address" required>
                </div>
                <button type="submit" class="btn btn-01 btn-04">決済情報を入力する</button>
            </form>
            </section>
        </aside> 
    </article>
</body>
</html>