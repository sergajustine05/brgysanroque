<!DOCTYPE html>
<html>
<head>
	<title>Officials</title>
	<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css">
  

<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
<link rel="stylesheet" type="text/css" href="./assets/css/viewofficials.css">

<!-- Scripts -->
<script type="text/javascript" src="jquery-master/test/data/jquery-1.9.1.js"></script>
 
 <script type="text/javascript" src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://kit.fontawesome.com/696604e393.js" crossorigin="anonymous"></script>

<!-- custom scripts-->
<script src="assets/scripts/skript.js"></script>
<script type = "text/javascript">
    window.addEventListener('scroll', function(){
        var scroll = document.querySelector('.scrollTop');
        scroll.classList.toggle("active", window.scrollY >500)
    })
</script>
	<!-- NAV BAR -->
<center><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://www.gov.ph/" >GOVPH </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 14px;" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="community.php">Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="view_officials.php">Officials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="view_announcements_user.php">Announcement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="index/login.php"><i class="fa fa-user-circle" aria-hidden="true"> Login As Admin</i></a>
      </li>
      
    </ul>

   
  </div>
</nav><br></center>
<!-- END NAV BAR -->

<!-- HEADER -->
<div style="background-color: green;height: 150px;"><br>
<div class="container">
   <div> <a href="index.php"><img src="assets/images/LOGO.png" style=" width: 40%; margin-top: -35px;"></a></div>
 <div style="margin-top: -35%;text-align: right;"><iframe src="https://free.timeanddate.com/clock/i7zwk1p6/n145/tlph56/fn17/fcfff/tct/pct/ftb/tt0/tw0/tb4" frameborder="0" width="162" height="36" allowtransparency="true"></iframe>
</div>
</div>
</div>
<!-- END HEADER -->
<h1 style="font-family: algina;">BARANGAY OFFICIALS</h1>
<?php include 'officials_modal.php' ?>
	<!-- modal -->


  
      <!-- col #1 -->
       <div class="container">
       <div class="row">
        <div class="col-md-4"> </div>
           <div class="col-md-4">

         <div class="hovereffect">
                   <img src="assets/images/kap.jpg" style="width:160px; height: 170px; border-radius: 40px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2>~~~ Barangay ~~~ <br>~~~ Captain ~~~</h2><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#barangaycaptainmodal" style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>
        <div class="col-md-4"> </div>
       </div>
     </div><br><br><br>
   <!-- col #1 END-->

        <!-- col #2 -->

      <div class="container">
      <div class="row">

         <div class="col-md-4">

         <div class="hovereffect">
                   <img src="assets/images/raquel.jpg" style="width:160px; height: 170px; border-radius: 40px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2>~~~ SECRETARY ~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#secretarymodal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>
       
         <div class="col-md-4">

         <div class="hovereffect">
                   <img src="assets/images/glo.jpg" style="width:160px; height: 170px; border-radius: 40px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2>~~~~~   CLERK   ~~~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clerkmodal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

          <div class="col-md-4">

         <div class="hovereffect">
                   <img src="assets/images/maya.jpg" style="width:160px; height: 170px; border-radius: 40px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2>~~~ TREASURER ~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#treasurermodal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

      </div>
    </div>
    </center><br><br><br><br>
    <!-- col #2 END-->


      <!-- col #3 -->
     <div class="container">
      <div class="row" >
         <div class="col-md-3">

         <div class="hovereffect1">
                   <img src="assets/images/rimedios.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay1" style="font-family: lato">
                  <h2 >~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad1modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

         <div class="col-md-3">

         <div class="hovereffect1">
                   <img src="assets/images/rico.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay1" style="font-family: lato">
                  <h2>~~~KAGAWAD~~~</h2><br><br><br>  
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad2modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>
       
         <div class="col-md-3">

         <div class="hovereffect1">
                   <img src="assets/images/kiko.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay1" style="font-family: lato">
                  <h2>~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad3modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

          <div class="col-md-3">

         <div class="hovereffect1">
                   <img src="assets/images/ronald.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay1" style="font-family: lato">
                  <h2>~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad4modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

      

      </div>
    </div>
    <br><br><br><br>
    <!-- col #3 EMD -->


      <!-- col #4  -->
      <div class="container">
      <div class="row">
         <div class="col-md-3">

         <div class="hovereffect">
                   <img src="assets/images/pio.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2>~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad5modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>
       
         <div class="col-md-3">

         <div class="hovereffect">
                   <img src="assets/images/josie.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay" style="font-family: lato">
                   <h2>~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad6modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

          <div class="col-md-3">

         <div class="hovereffect">
                   <img src="assets/images/apo.jpeg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay" style="font-family: lato">
                   <h2>~~~KAGAWAD~~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kagawad7modal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

        <div class="col-md-3">

         <div class="hovereffect">
                   <img src="assets/images/frank.jpg" style="width:150px; height: 170px; border-radius: 39px;border: double;">
                  <div class="overlay" style="font-family: lato">
                  <h2 style="font-size: 14PX;">~~ SK CHAIRMAN   ~~</h2><br><br><br>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#skmodal"style="font-size: 12px;">
                      More Info
                      </button>
                </div>
            </div>

        </div>

      </div>
    </div><br><br><br>
  
    <!-- col #4 END-->



    <!-- col #5 END-->




 <!-- footer -->
   <footer >
  <div class="container" style=" font-style: Sans-Serif;font-family: lato;font-size: 20px; border-radius: 10px;">
    <div class="row">
        
      <div class="col-sm-3 col-md-3">
        <p style="margin-top: 10% ">Keep Connected</p><span>Stay up to date.</span> <br>
          <img src="assets/images/barangay_logo.png" style="height: 200px;width: 200px; margin-top: 10%">
      </div>

<div class="col-sm-3 col-md-3" > <br>OFFICIALS
        <a href="#!" style="color: white;"><p>Elected Officials</p></a>
        <a href="#!" style="color: white;"><p>Goverment/Offices</p></a>

      </div>

        <div class="col-sm-3 col-md-3"><br>SERVICES
           <a href="#!" style="color: white;"><p>Taxes&Fees</p></a>
        <a href="#!" style="color: white;"><p>Social&Legal Servises</p></a>
        <a href="#!" style="color: white;"><p>Downloadables</p></a>
        </div>
        <div class="col-sm-3 col-md-3"><br>GOVERMENT
          <a href="#!" style="color: white;"><p>Exclusive Order</p></a>
        <a href="#!" style="color: white;"><p>Resulutios</p></a>
        <a href="#!" style="color: white;"><p>Ordinances</p></a>
        </div>
        
      </div>
  </div>
  COPYRIGHT © 2021. BARANGAY SAN ROQUE, MUNICIPALITY OF SAN ISIDRO, PROVINCE OF NUEVA ECIJA. ALL RIGHTS RESERVE
 <div id="#top"><a href="#top" class="scroll " style="font-size: 40px; color: gold;" ><i class="fas fa-angle-double-up"></i></a></div>
</footer><!-- footer END -->

    
 

	


</body>
</html>