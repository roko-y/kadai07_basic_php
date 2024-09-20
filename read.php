<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>読み込みページ</title>
</head>
<body>
    <h1>データはこちら</h1>

    <?php
    //データの読み込む
    $file = fopen("data.csv", "r");

    //テーブルのHTML作成
    echo "<table>
            <tr>
               <th>名前</th>
               <th>メール</th>
               <th>備考</th>
            </tr>";

    // csvのデータを配列に変換する
    //fgetcsvで読み込んだ配列を$lineに代入、while文で配列を1行ずつ取得
    while($line = fgetcsv($file)) {    
        echo "<tr>";
        // $lineの中身を順番に取り出して、tdタグの要素として挿入
        for ($i=0;$i<count($line);$i++) {
            echo "<td>" . $line[$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // ファイルを閉じる
    fclose($file);

    ?>
    
</body>
</html>