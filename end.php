<!-- 結束結帳 清空內容 -->
<?php
include "product.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <title>Order</title>
    <style>
    body{
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
    }
    #container{
        background-color:#6C7B8B;
        margin:auto;
        padding:30px 15px;
        text-align:center;
        width:400px;
        height:200px;
        border-radius:15px;
    }
    #finish{
        font-size:40px;
    }
    #buy{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
    }
    </style>
</head>
<body>
    <div id="container">
    <?php
    echo"<h1 id=\"finish\">訂單成立！</br>感謝您的選購</h1>";
    // 清除購物車內容
    unset($_SESSION['cart']);
    ?>
    <!-- 再買一次 -->
    <input type="button" id="buy" value="重新購買" onclick="location.href='shop.php'">
    <?php
    // 需要重新登入
    unset($_SESSION['account']);
    ?>
    </script>
    </div>
</body>
</html>