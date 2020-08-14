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
 $query = $conn->query("SELECT * FROM firma  where firma_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $garson_ad=$row['firma_ad'];
    $garson_ad1=$row['firma_adres'];
    $garson_ad2=$row['firma_yetkili_ad'];
 }

echo json_encode(array('a' => $garson_ad ,'b' => $garson_ad2,'c' => $garson_ad2 ,'f'=>$id)); 

?>