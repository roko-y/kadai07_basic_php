<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信画面</title>
</head>
<body>
 <form action="write.php" method="post">
    名前：   <input type="text" name="name"><br>
    メール： <input type="text" name="mail"><br>
    備考：<textarea name="memo" cols="30" rows="10"></textarea><br>
    <button type="submit">送信 </button>
  </form>
    
</body>
</html>