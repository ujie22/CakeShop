<!-- 購物車 -->
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
    <title>Cart</title>
    <style>
    img{
        width:50%;
        height: 200px;
        padding:5px 5px;
    }
    #container{
        position: relative;
        text-align:center;
        width:900px;
        padding:10px 15px;
        margin:auto;
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
    h1{
        text-align:center;
        background-color:#FFF5EE;
    }
    body{
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
        font-size:25px;
    }
    #buy{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
    }
    #checkList{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
    }
    </style>
</head>
<body>
<?php
    echo "<h1>".$_SESSION["account"]." 的購物清單 ："."</h1>";
?>
    <div id="container">
    <table>
        <tr>
            <th>商品名稱</th>
            <th>商品照片</th>
            <th>商品價格</th>
            <th>商品數量</th>
        </tr>
<?php
    if(isset($_SESSION["cart"])){
        foreach($_SESSION["cart"] as $pid => $itemNum){//$_SESSION["cart"][$pid] => $itemNum
            echo
            //名稱
            "<tr><td>{$product[$pid][0]}</td>",
            //照片
            "<td><img src = \"../shop/img/{$product[$pid][1]}\"/></td>",
            //價錢
            "<td>NT\${$product[$pid][2]}</td>",
            //數量
            "<td>$itemNum</td>",
            "</tr>";
        }
    }
?>
    </table>
        <!-- 回到商店頁面 -->
        <input type="button" id="buy" value="繼續購物" onclick="location.href='shop.php'">
        <!-- 結帳 -->
        <input type="button" id="checkList" value="結帳清單" onclick="location.href='list.php'">
    </div>
</body>
</html>