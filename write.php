<?php
// データの受け取り
 $name = $_POST["name"];
 $mail = $_POST["mail"];
 $memo = $_POST["memo"];
 $c = ",";
 $str = $name.$c.$mail.$c.$memo; 

// ファイルへの書き込む
 $file = fopen("data.csv","a");
 fwrite($file,$str."\n");
 fclose($file);

 header("Location: index.php");
 exit;
 

?>