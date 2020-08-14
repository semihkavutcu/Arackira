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
 $garson_ad1="";
 $garson_ad2="";

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM odeme inner join firma on (firma_id=odeme_firma_id) where odeme_id= ".$id." limit 1");
 while ($row = $query->fetch()) {
  $garson_ad1=$row['firma_ad'];
    $garson_ad2=$row['odeme_toplam'];
 }

echo json_encode(array('a' => $garson_ad ,'b' => $garson_ad1,'c' => $garson_ad2 ,'f'=>$id)); 

?>