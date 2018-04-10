<?php
/* 読み込むCSVファイルを作成 */
$str = <<<EOD
Windows,Mac,Linux
MySQL,PostgreSQL,SQLite
EOD;
file_put_contents('/Users/x15064xx/Desktop/fileTest/fileTest/test.csv', $str);

/* ファイルポインタをオープン */
$file = fopen("test.csv", "r");

/* CSVファイルを配列へ */
if( $file ){
  while( !feof($file) ){
    var_dump( fgetcsv($file) );
  }
}

/* ファイルポインタをクローズ */
fclose($file);
?>
<html>
<head>
  <title>表示テスト</title>
</head>
<body>
  <p><?php echo $file;?></p>
</body>
</html>
