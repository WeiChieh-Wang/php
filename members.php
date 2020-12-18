<?php
header("Content-Type:text/html; charset=utf-8");


  //建立連線：
  $link = mysql_pconnect("localhost", "xxxxxxx", "xxxxxx"); //$link宣告連線，mysql_pconnet("主機名稱","資料庫帳號","資料庫密碼");
  //選擇資料庫：
  mysql_select_db("login") or die("無法選擇資料庫"); // 選擇資料庫：mysql_select_db("資料庫名稱") or die ("失敗顯示字");
  //二、執行SQL語法
  $account = mysql_real_escape_string($_POST['account']);
  $password = mysql_real_escape_string($_POST['password']);
//在html的name上面寫什麼這邊就宣告什麼，後面POST是資料庫欄位
  // 建立SQL語法，使用$query
  $query = "INSERT INTO login (account, password) VALUES ('$account','$password')";
//$query = "insert into 資料表名稱(資料表欄位,資料表欄位2) values ('輸入值1','輸入值2'); 由於html欄位name=account，這邊就也是$account（已宣告過）
  //送出SQL語法到資料庫系統
  mysql_query($query) or die("無法送出" . mysql_error( ));
//下方javascript，用來回首頁，javascript在php中需要使用echo來輸出
  $url = "index.html";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
?>