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

 $kat="";
 $fiyat="";

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM firmalar where firma_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kat=$row['firma_adi'];
    $fiyat=$row['firma_adresi'];
 }


echo json_encode(array('a' => $kat ,'b'=>$fiyat,'j'=>$id)); 