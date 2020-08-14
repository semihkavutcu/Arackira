  <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SİTEM 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']?>/projeler/veritabani/js/demo/chart-pie-demo.js"></script>
    <script>
$('.arabaduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"<?php echo "http://$_SERVER[HTTP_HOST]/veritabani/getalldata/getaraba.php"?>",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
    $('#garson_id').val(html.e);
    $('#fname').val(html.a);
    $('#fiyat').val(html.z);
    for (var i = 0; i <  html.d.length; i++) {
      $('#kateg').append('<option value=' + html.d[i] + '>' + html.c[i] + '</option>');
      }
    $('#kateg option[value="'+html.b+'"]').prop('selected', true);
    for (var i = 0; i <  html.e.length; i++) {
      $('#tur').append('<option value=' + html.g[i] + '>' + html.f[i] + '</option>');
      }
    $('#tur option[value="'+html.h+'"]').prop('selected', true);
    $('#exampleModal').modal('show')
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});

$('.firmaduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"getsirket.php",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
     $('#garson_id').val(html.f)
    $('#fname').val(html.a);
    $("#garson_adi").html(html.a);
    $("#firmaadres").val(html.b);
    $("#firmayetkili").val(html.c);
    document.getElementById("myModal").style.display="block";
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});
$('.odemeduzen').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"getodeme.php",
   type: 'get',
   data: "id="+id,
   Type:"json",
   success:function(html){
     console.log(html);
     html=$.parseJSON(html);
     $('#garson_id').val(html.f)
    $('#garson_adi').html(html.b);
    $("#fname").val(html.b);
    $("#firmayetkili").val(html.c);
    document.getElementById("myModal").style.display="block";
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});
$('.firmadel').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"sirketsil.php",
   type: 'get',
   data: "id="+id,
   success:function(html){
    // console.log(html);
   location.href="sil.php?sonuc="+html
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });

});
$('.odemedel').click( function(){
  var id = $(this).attr('id');
 
  $.ajax({
   url:"odemesil.php",
   type: 'get',
   data: "id="+id,
   success:function(html){
    // console.log(html);
   location.href="osil.php?sonuc="+html
   },
   error:function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
  }
 
   });
});

//timer
var seconds_left = 3;
var x = document.getElementById("alert")
var myVar = setInterval(myTimer, 1000);
function myTimer() {
    if (seconds_left == 0)
    {
  document.getElementById('alert').style.display = 'none'
    }
    seconds_left-=1;
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByName("duzen");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>