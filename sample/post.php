<?php

$host = 'localhost'; //127.0.0.1:[ポート番号]でも良い
$dbname = 'wp_db';
$dbuser = 'root';
$dbpassword = 'root';
$flag = false;
$users = array();
$date = new DateTime('now');
$date = $date->format('Y-m-d H:i:s');




$users[]=$_GET['look'];

echo json_encode( $users ) ;

if(!empty($_GET['look'])) {

  try{
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$dbuser","$dbpassword");
/*
    $num = 0;

    if($num == 0){
    $del = $db->prepare('DELETE FROM test3');
    $del->execute();
    $num = 1;
  }
  */


    $write=$db->prepare('INSERT INTO user2 (pose, time) VALUES(:pose, :time)');

    $write->bindParam(':pose',$_GET['look']);
    // $write->bindParam(':data',$_POST['Second']);
    $write->bindValue(':time',$date);
    $write->execute();



    $db=null;



  }catch(PDOException $e){
    exit('データベース接続失敗。'.$e->getMessage());
  }
}

/*$array = array(
	"title" => "ABC" ,
	"gender" => "F"
);
*/



 ?>
