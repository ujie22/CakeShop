<?php
//在網頁啟用session
session_start(); 
// 接收前端輸入的帳號密碼
if(!(isset($_POST['account']) || isset($_POST['pwd']))){
    header("Location: ../login_inc.php");
}else{
    $account = $_POST['account'];
    $pwd = $_POST['pwd'];
}
// 讀入檔案，檢查登入的帳號密碼是否在資料庫
$data = file("customer.txt");
for ($i = 0; $i <count($data); $i++) {
  $data[$i] = explode(",",$data[$i]);
  // 先檢查帳號
  if ($account == $data[$i][0]) {
    // 再檢查密碼
    if ($pwd == $data[$i][1]) {
      // 發現帳號密碼都比對一樣，把account&level資料傳給shop.php
      $_SESSION["account"] = $account; 
      $_SESSION["level"] = $data[$i][2];
      // 前往shop.php
      header("Location: ../shop/shop.php");
      //表示到這邊就不用繼續往下走了
      return; 
    }
  }
}
// 如果沒有輸入正確就重新導回登入錯誤頁面
header("Location: ../shop/login_inc.php");
?>