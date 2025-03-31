<!-- 商店 -->
<?php
//讀入產品內容
include "product.php";
session_start();
if(!isset($_SESSION["account"])){
    header("Location: ./login.php");
}
$productNum="";
// 檢查是否第一次買
if(isset($_GET["pid"])){
    $productNum = $_GET["pid"];//productNum:商品的索引值
    if (isset($_SESSION["cart"][$productNum]))
        $_SESSION["cart"][$productNum]++;
    else
        $_SESSION["cart"][$productNum]=1;
}
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
    <title>Shop</title>
    <style>
    body{
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
    }
    h1{
        background-color:#5F9EA0;
        font-size:40px;
    }
    th{
        margin:5px;
        font-size:20px;
        font-weight:bold;
        background-color:#CDC9C9;
    }
    td{
        border:1px solid;
        padding: 30px;
        background-color:#D8BFD8;
        color:#8B4500;
    }
    img{
        width:65%;
        height: 225px;
        padding:5px 5px;
    }
    #container{
        position: relative;
        text-align:center;
        width:900px;
        padding:10px 15px;
        margin:auto;
    }
    #productNum{
        font-size:25px;
    }
    #goCart{
        font-size:30px;
        background-color:#9FB6CD;
        width:200px;
    }
    </style>
</head>
<body>
    <div id = "container">
    <?php
    echo "<h1>Welcome ".$_SESSION["account"]." , You are ".$_SESSION["level"]." "."</h1>";
    ?>
    <table>
        <tr>
            <th>商品名稱</th>
            <th>商品照片</th>
            <th>商品價格</th>
            <th>購物車</th>
        </tr>
    <?php
        foreach($product as $pid => $cakeNum){//$_SESSION["product"][$pid] => $cakeNum
            if($pid == $productNum){
                echo
                //名稱
                "<tr id = \"productNum\"><td>{$cakeNum[0]}</td>",
                //照片
                "<td><img src = \"../shop/img/{$cakeNum[1]}\"/></td>",
                //價錢
                "<td>NT\${$cakeNum[2]}</td>",
                //放入購物車
                "<td><a href=\"shop.php?pid=$pid\">放入購物車</a></td></tr>\n";
            }else{
                echo
                //名稱
                "<tr id = \"productNum\"><td>{$cakeNum[0]}</td>",
                //照片
                "<td><img src = \"../shop/img/{$cakeNum[1]}\"/></td>",
                //價錢
                "<td>NT\${$cakeNum[2]}</td>",
                //放入購物車
                "<td><a href=\"shop.php?pid=$pid\">放入購物車</a></td></tr>\n";
            }
        }
    ?>
    </table>
        <!-- 到購物車頁面 -->
        <input type="button" id="goCart" value="查看購物車" onclick="location.href='cart.php'">
    </div>
    </body>
</html>