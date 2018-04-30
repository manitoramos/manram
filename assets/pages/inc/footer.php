<!-- Footer -->
<footer class="footer bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 
          <?php echo ( $_SERVER['SERVER_NAME'] == "manitoramos" ? "manitoramos.dev" : $_SERVER['SERVER_NAME'] ); ?> 
          2016-<?php echo date("Y");?>. <small>Developed by Tiago Ramos</small>
        </p>
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
</footer>

<!-- Bootstrap / jquery / modal js -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/login.js"></script>

    <script>
    /*Dropdown on mouse over 
      $(document).ready(function(){
      $(".cross").hover(            
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
              $(this).toggleClass('open');        
          },
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
              $(this).toggleClass('open');       
          }
      );
    });*/
    </script>
    
<!-- MODAL DE LOGIN -->
<?php
if($_SERVER['REQUEST_URI'] == "/home" || $_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == ""){
  include('assets/pages/inc/modal.php');
}else{
  include('inc/modal.php');
}
?>