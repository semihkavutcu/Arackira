<?php
error_reporting(0);
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
 if($_POST){
  $garson_id=$_POST['id'];
  $garson_ad=$_POST['gad'];
  $garson_ad1=$_POST['firmaadres'];
  $garson_ad2=$_POST['firmayetkili'];
 
  if($garson_id!="" && $garson_ad!=""){
    $sonuc = $conn->exec("UPDATE firma SET firma_ad ='$garson_ad' ,firma_adres ='$garson_ad1',firma_yetkili_ad ='$garson_ad2' WHERE firma_id='$garson_id'");
  }else{
  header ('Location:duzen.php?sonuc=not');
}

if($sonuc){
header ('Location:duzen.php?sonuc=basarı');
}
else	{
header ('Location:duzen.php?sonuc=not');
}
}


?>
<?php include('../head.php')?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('../sidebar.php')?>




<div class="w3-container" style="padding:32px">

<h2>Firma  Düzenleme</h2>

<p>Firma düzenlemek için lütfen Firma seçiniz</p>
<?php /*
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
  
  }*/
?>
<div style="border:2px solid black;border-radius:20px;">
<div class="w3-container">
<?php
if($_GET['sonuc']=="basarı" ){

  echo  '<div class="succ-alert" id="alert">';
  echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
  echo  '<strong>Başarılı!</strong> Kayıt başarıyla düzenlendi..';
  echo  '</div>';
 
 }
 if($_GET['sonuc']=="not"){
 
   echo  '<div class="danger-alert" id="alert">';
   echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
   echo  '<strong>Başarısız!!!</strong> Kayıt düzenlenirken hatayla karşılaşıldı lütfen alanları doğru doldurduğuza emin olunuz veya serverin aktif olduğunu doğrulayınız..';
   echo  '</div>';
  
  }
?>
  <table class="w3-table w3-striped">
  <tr ><th style='text-align:center;'>Firma adi</th>
  <th style='text-align:center;'>Firmada Yetkili Kişi</th>
    <th style='text-align:center;'> Düzenle</th>
    </tr>

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
 $query = $conn->query("SELECT * FROM firma");

 while ($row = $query->fetch()) {
  echo "<tr ><td style='text-align:center;'>".$row['firma_ad']."</td>";
  echo "<td style='text-align:center;'>".$row['firma_yetkili_ad']."</td>";
    echo "<td style='text-align:center;'> <button class='firmaduzen' id=".$row['firma_id'].">Düzenle</button>";
}

    ?>
</table>
</div>

</div>



</div>


     
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2> <span id="garson_adi"></span> Firma düzenliyorsunuz</h2>
    </div>
    <div class="modal-body">
    <div class="container">
  <form action="duzen.php" method="post">
  <input type="hidden" value="" id="garson_id" name="id">
    <label for="fname">firma adı</label>
    <input type="text" id="fname" name="gad"  placeholder="firma adı">
    <label for="firmaadres">firma adresı</label>
    <input type="text" id="firmaadres" name="firmaadres"  placeholder="firma adresi">
    <label for="firmayetkili">firmadaki yetkilinin adı</label>
    <input type="text" id="firmayetkili" name="firmayetkili"  placeholder="firmadaki yetkilinin adı">
    <div style="display: flex;  justify-content: center;  align-items: center;;">
    <input type="submit" value="Düzenle" style="width:50%;">
</div>
  </form>
</div>
      
    </div>
  </div>

</div>


<?php include("../footer.php");?>
</body>
</html> 
