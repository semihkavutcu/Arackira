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
 $id= $_GET['id'] ;

 if($_GET) 
		{
      
				if($sonuc = $conn ->query("DELETE FROM firma WHERE firma_id=$id")==true){
         echo "basarı";
        }
        else
        {
          echo "not";
        }
    }
    else{
      echo "not";
    }
		
 ?>