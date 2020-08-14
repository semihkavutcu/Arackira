<?php 
error_reporting(0);
if($_POST){
$gad=$_POST['gad'];
$gad1=$_POST['gad1'];
$gad2=$_POST['gad2'];
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
 if($gad!="" ){
$query=$conn->exec("insert into firma (firma_ad,firma_adres,firma_yetkili_ad) VALUES('$gad','$gad1','$gad2')");
if($query)
header ('Location:ekle.php?sonuc=basarı');
else	
header ('Location:ekle.php?sonuc=not');
}
else
header ('Location:ekle.php?sonuc=not');
}

?>
<?php include('../head.php')?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('../sidebar.php')?>
<div class="w3-container" style="padding:32px">

<h2>Firma ekleme</h2>

<p>Firma eklemek için aşağıdaki bilgileri doldurunuz.</p>
<?php
if($_GET['sonuc']=="basarı" ){

  echo  '<div class="succ-alert" id="alert">';
  echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
  echo  '<strong>Başarılı!</strong> Kayıt başarıyla eklendi..';
  echo  '</div>';
 
 }
 if($_GET['sonuc']=="not"){
 
   echo  '<div class="danger-alert" id="alert">';
   echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
   echo  '<strong>Başarısız!!!</strong> Kayıt eklenirken hatayla karşılaşıldı lütfen alanları doğru doldurduğuza emin olunuz veya serverin aktif olduğunu doğrulayınız..';
   echo  '</div>';
  
  }
?>
<div class="container">
  <form action="ekle.php" method="post">

    <label for="fname">Firma adı</label>
    <input type="text" id="fname" name="gad">
    <label for="fname">Firma adresi</label>
    <input type="text" id="fname" name="gad1">
    <label for="fname">Firma Yetkisi adı</label>
    <input type="text" id="fname" name="gad2">
    <div style="display: flex;  justify-content: center;  align-items: center;;">
    <input type="submit" value="Ekle" style="width:50%;">
</div>
  </form>
</div>






<?php include("../footer.php");?>
     


     
</body>
</html> 
