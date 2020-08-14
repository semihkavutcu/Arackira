<?php 
$host='localhost';
$db = 'odev2';
$username = 'postgres';
$password = '123456';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
try{
  $conn = new PDO($dsn);
 
  if($conn){
  
  }
 }catch (PDOException $e){
     header ('404.php');
 }

 $garson_ad="";
 $kat="";
 $marka="";
 $fiyat="";
 $urun_ad="";
 $katliste=[];
 $katlisteid=[];
 $markalis=[];
 $markaid=[];

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM cicek inner join stok on (cicek_id=stok_id) where stok_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kat=$row['cicek_id'];
    $fiyat=$row['stok_miktar'];
 }
 $query = $conn->query("SELECT * FROM  cicek");
 while ($row = $query->fetch()) {
    array_push($katliste,$row['cicek_ad']);
    array_push($katlisteid,$row['cicek_id']);
 }


echo json_encode(array('a' => $fiyat ,'b'=>$kat,'c'=>$katliste,'d'=>$katlisteid,'j'=>$id)); 