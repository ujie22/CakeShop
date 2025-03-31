<!-- 結帳 -->
<?php
session_start();
include "product.php";
//確認帳號
if(!isset($_SESSION["account"])){
    header("Location: ../login.php");
}
//購物車加入的商品
if(!isset($_SESSION["cart"])){
    header("Location: ../cart.php");
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
    <title>Checkout</title>
    <style>
    img{
        width:70%;
        height: 200px;
        padding:5px 5px;
    }
    #container{
        position: relative;
        text-align:center;
        width:900px;
        padding:10px 20px;
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
    body{
        font-size:25px;
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
    }
    h1{
        text-align:center;
        background-color:#FFF5EE;
    }
    #goCart{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
    }
    #goEnd{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
    }
    #lv{
        color:red;
    }
    </style>
</head>
<body>
<?php
    echo "<h1>"." 結帳清單 ："."</h1>";
?>
    <div id="container">
    <table>
        <tr>
            <th>商品名稱</th>
            <th>商品照片</th>
            <th>商品價格</th>
            <th>購買數量</th>
            <th>加總金額</th>
        </tr>
<?php
    if(isset($_SESSION["cart"])){
        $totalCost = 0;
        foreach($_SESSION["cart"] as $pid => $itemNum){//$_SESSION["cart"][$pid] => $itemNum
            //計算購買的物品總價格
            //cost:個別總額
            $cost = $itemNum*$product[$pid][2];
            //totalCost:總金額
            $totalCost += $cost;
            echo
            //名稱
            "<tr><td>{$product[$pid][0]}</td>",
            //照片
            "<td><img src = \"../shop/img/{$product[$pid][1]}\"></td>",
            //價錢
            "<td>\${$product[$pid][2]}</td>",
            //數量
            "<td>$itemNum</td>",
            //加總金額
            "<td>$cost</td>",
            "</tr>";
        }
        //算總金額
        echo
        "<tr><td>總金額</td>",
        "<td colspan=\"4\">{$totalCost}</td></tr>",
        "<tr><td>會員等級</td>",
        "<td colspan=\"4\" id = \"lv\">{$_SESSION["level"]}</td><tr>";
        //依會員等級做出折扣
        //money:最後優惠價
        $money = 0;
        switch(trim($_SESSION["level"])){
            case 'VIP':
                //判斷總金額有沒有超過1500
                if($totalCost >= 1500){
                    $money = $totalCost * 0.7;
                }else{
                    $money = $totalCost * 0.8;
                }break;
            case 'Gold':
                if($totalCost >= 1500){
                    $money = $totalCost * 0.75;
                }else{
                    $money = $totalCost *0.85;
                }break;
            case 'Guest':
                if($totalCost >= 1500){
                    $money = $totalCost * 0.8;
                }else{
                    $money = $totalCost * 0.9;
                }break;
        }echo
        "<tr><td>優惠後價格</td>",
        "<td colspan=\"4\">{$money}</td></tr>";
    }
?>
</table>
    <!-- 確認結帳 -->
    <input type="button" id="goCart" value="取消" onclick="location.href='cart.php'">
    <input type="button" id="goEnd" value="結帳" onclick="location.href='end.php'">
</div>
</body>
</html>