<!-- 帳密錯誤 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <title>ERROR！</title>
</head>
<style>
    body{
        font-size:25px;
        background-image:url('../shop/img/bg.png');
        font-family: 'Akaya Kanadaka', cursive;
    }
    #container{
        background-color:#6C7B8B;
        margin:auto;
        padding:30px 15px;
        text-align:center;
        width:400px;
        height:300px;
        border-radius:15px;
    }
    #again{
        font-size:30px;
        background-color:#9FB6CD;
        width:150px;
        align:center;
    }
</style>
<body>
    <div id="container">
    <h2>ERROR！</h2>
    <h3>未輸入帳號或密碼，</br>或帳號、密碼不正確 </h3>
    <input type="button" id="again" value="重新輸入" onclick="location.href='login.php'">
    </div>
</body>
</html>