<!-- 登入 -->
<?php
session_start();
if(isset($_SESSION["account"])){
    header("Location: ../shop/shop.php");
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
    <title>Login</title>
</head>
<body>
    <style type="text/css">
    #container{
        background-color:#6C7B8B;
        margin:auto;
        padding:30px 15px;
        text-align:center;
        width:300px;
        height:300px;
        border-radius:15px;
    }
    table{
        /* width:300px;
        padding:5; */
        margin:auto;
        margin-left:auto; 
        margin-right:auto;
    }
    td{
        align:center;
    }
    body{
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
        font-size:25px;
        display: flex;
        height: 100vh;
        justify-content: center; /* 水平置中 */
        align-items: center;     /* 垂直置中 */
    }
    #submit{
        font-size:20px;
        background-color:#9FB6CD;
        width:100px;
    }
    #reset{
        font-size:20px;
        background-color:#9FB6CD;
        width:100px;
    }
    </style>
    <div id="container">
    <h1>Login</h1>
    <form method="post" action="backend.php">
    <table>
        <tr>
            <td width="80"valign="baseline">帳號</td>
            <td valign="baseline">
            <input type="text" name="account" id="account" value=""></td>
        </tr>
        <tr>
            <td width="80" valign="baseline">密碼</td>
            <td valign="baseline">
            <input type="password" name="pwd" id="pwd" value=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" id="submit">登入</button>
                <input type=reset id="reset" value=" 清除 ">
        </tr>
    </table>
</form>
</div>
</body>
</html>