<?php
  require('includes/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}
?>

<div class="x--main-container">
  <div class="container py-5"> 

    <div class="bg-light rounded border border-dark">

      <div class="container py-3">
        <div class="row h-100 align-items-center py-5 mx-3">
          
            <div class="col-lg-4 px-1 mx-auto order-1 order-lg-3">
              <img src="../img/teacher.png" alt="Boy Sitting" class="img-fluid mb-4 mb-lg-0">
            </div>

            <div class="col-lg-4 text-center order-lg-2">
              <i class="fa fa-group fa-2x mb-3 text-primary" aria-hidden="true"></i>
              <h1 class="display-4">ABOUT US</h1>
              <p class="lead text-muted mb-0">Create a minimal about us page using Bootstrap 4.</p>
            </div>  

            <div class="col-lg-4 px-1 mx-auto order-1 order-lg-1">
              <img src="../img/manWorkingRemotely.png" alt="Man Working Remotely" class="img-fluid mb-4 mb-lg-0">
            </div>

        </div>
      </div>


      <div class="container pb-5">

        <div class="row align-items-center mb-5 text-center">

          <div class="col-lg-6 order-2 order-lg-1 pl-3 text-end"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <div class="col-lg-5 px-5 text-start order-1 order-lg-2">
            <img src="../img/twoGirlsTalking.png" alt="Two Girls Talking" style="width: 60rem" class="img-fluid mb-4 mb-lg-0">
          </div>

        </div>

        <div class="row align-items-center">

          <div class="col-lg-5 text-end">
            <img src="../img/laptop.png" alt="" class="img-fluid mb-4 mb-lg-0">
          </div>

          <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary text-start"></i>
            <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
            <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

        </div>

      </div>


  <div class="container py-5">

    <div class="row mb-4 justify-content-center">
      <div class="col-lg-5 text-center">
        <h2 class="display-4 font-weight-light">Our team</h2>
        <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>

    <div class="row text-center mx-4">


      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Andriel Gabriel</h5><span class="small text-uppercase text-muted">ATABS KO</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../img/EnriqueGil.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Daniel Sigue</h5><span class="small text-uppercase text-muted">Bata mo</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      </div>
      <!-- End-->

      </div>
    </div>

    </div>  
  </div>
</div>

<?php
require('includes/Footer.php');
?>

