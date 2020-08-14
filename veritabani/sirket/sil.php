<?php 
error_reporting(0);
?>
<?php include('../head.php')?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('../sidebar.php')?>
<div class="w3-container" style="padding:32px">

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
  <tr>
  <th style='text-align:center;'>
  firma adı
  </th>
  <th style='text-align:center;'>
  Sil
  </th>
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
    echo "<td style='text-align:center;'> <button class='firmadel' id=".$row['firma_id'].">Sil</button>";
}
    ?>
</table>
</div>

</div>



</div>



</div>

<?php include("../footer.php");?>
     
</div>

     
</body>
</html> 
