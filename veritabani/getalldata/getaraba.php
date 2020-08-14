<?php 
$host='localhost';
$db = 'araba';
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
 $query = $conn->query("SELECT * FROM araba inner join kategori on(kategori.kat_id=araba.katag_id) inner join marka on (marka.marka_id=araba.markas_id)  where cicek_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $garson_ad=$row['cicek_ad'];
    $kat=$row['katag_id'];
    $marka=$row['tur_id'];
    $fiyat=$row['fiyat'];
 }
 $query = $conn->query("SELECT * FROM  kategori");
 while ($row = $query->fetch()) {
    array_push($katliste,$row['kat_ad']);
    array_push($katlisteid,$row['kat_id']);
 }
 $query = $conn->query("SELECT * FROM  marka");
 while ($row = $query->fetch()) {
    array_push($markalis,$row['marka_ad']);
    array_push($markaid,$row['marka_id']);
 }


echo json_encode(array('a' => $garson_ad ,'b'=>$kat,'c'=>$katliste,'d'=>$katlisteid,'e'=>$id,'f'=>$markalis,'g'=>$markaid,'h'=>$marka,'j'=>$id,'z'=>$fiyat)); 