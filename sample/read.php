<?php



$host = 'localhost'; //127.0.0.1:[ポート番号]でも良い
$dbname = 'wp_db';
$dbuser = 'root';
$dbpassword = 'root';

try{
	$users = null;
	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$dbuser","$dbpassword");
	$sql = 'SELECT * FROM user2 WHERE (pose,time) IN(SELECT pose,max(time) FROM user2 GROUP BY pose)';
	$stmt = $db -> prepare($sql);
  $stmt -> execute();


   while ($row = $stmt->fetchObject()) {
        $users[] = array(
          'pose'=>$row->pose
         // ,'data'=>$row->data
         ,'time'=>$row->time
                    );
}

    //JSONデータ出力
    header('Content-type: application/json; charset=utf-8 ');
    echo json_encode($users);
    exit;

  } catch (Exception $e) {
    die('Error:' . $e->getMessage());
}

?>
