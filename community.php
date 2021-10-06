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
<h1 style="font-family: algina;">COMMUNITY</h1>


  <section>
  <!-- ADD RESIDENT MODAL -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Resident</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="index/add_resident_user.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> First Name </label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required="" style="text-transform: capitalize;">
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle Name" required="" style="text-transform: capitalize;">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required="" style="text-transform: capitalize;">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="age" class="form-control" placeholder="Age" required="">
            </div>
              <div class="form-group">
                <label>Birthday</label>
                <input type="date" name="birthday" class="form-control" required="">
            </div>

            <div class="form-group">
                <label>Civil Status</label>
                <select name="civil_status" required="" class="form-control" style="text-transform: uppercase;">
                  <option value="">Select Civil Status</option>
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="divorced">Divorced</option>
                  <option value="widowed">Widowed</option>
                 

                </select>
            </div>

              <div class="form-group">
                <label>Blood Type</label>
                <select name="blood_type" required="" class="form-control" style="text-transform: uppercase;">
                  <option value="">Select Blood Type</option>
                  <option value="a+">A+</option>
                  <option value="a-">A-</option>
                  <option value="b+">B+</option>
                  <option value="b-">B-</option>
                  <option value="o+">O+</option>
                  <option value="o-">O-</option>
                  <option value="ab+">AB+</option>
                  <option value="ab-">AB-</option>

                </select>
            </div>
              
              <div class="form-group">
                <label>Purok/Street</label>
                <input type="text" name="purok_street" class="form-control" placeholder="Purok/Street" required="" style="text-transform: capitalize;">
            </div>

            <div class="form-group">
                <label>House Number</label>
                <input type="number" name="house_no" class="form-control" placeholder="House Number" required="">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phone_no" class="form-control" placeholder="Phone Number" required="">
            </div>

            <div class="form-group">
              <img src="img/noimage.jpg" width="40%" height="40%">
              <br>
              <label>Upload Image</label>
              <br>
              <input type='file' name='file' >
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- REPORT MODAL -->
<div class="modal fade" id="user_report_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="index/add_resident_user.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

           
            <div class="form-group">
                <label>Type of Report</label>
                <select name="type_of_report" required="" class="form-control">
                  <option value="">Select Report</option>
                  <option value="Complaints">Complaints</option>
                  <option value="Emergency">Emergency</option>
                  <option value="Blotter">Blotter</option>
                  <option value="Incidents">Incidents</option>
                 

                </select>
            </div>

              
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="first_name" required="" style="text-transform: capitalize;">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="house_no" class="form-control" placeholder="last_name" required="">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="number" name="phone_no" class="form-control" placeholder="Phone Number" required="">
            </div>
             <div class="form-group">
                <label>House number</label>
                <input type="number" name="house_no" class="form-control" placeholder="House Number" required="">
            </div>
             <div class="form-group">
                <label>Purok_Street</label>
                <input type="text" name="purok_street" class="form-control" placeholder="Purok_Street" required="">
            </div>
           

              <div class="form-group">
                <label>Full Details</label>
               <textarea class="form-control" type = "text" required="" name = "full_details"></textarea>
            </div>

             <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>


            

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Send Report</button>
        </div>
      </form>

    </div>
  </div>
</div>







<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <?php if (isset($_GET['error'])) {
    ?> <p style="
  background: #F2DEDE;
  color: #A94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
"><?php echo $_GET['error']; ?> </p>
  <?php } ?>

<?php if (isset($_GET['success'])) {
    ?> <p style="
  background: #aafad1;
  color: #05a855;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
"><?php echo $_GET['success']; ?> </p>
  <?php } ?>

   

   
           
           <div class="col-md-6">
         <h6 class="m-0 font-weight-bold text-primary">If you are a legitimate San Roque Resident -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Register Here
            </button>
          </h6>
    
</div>

</div>

  </div>
    <h6 class="m-0 font-weight-bold text-success text-center"> COVID UPDATES </h6>
  <br>

       
 
  

      <?php
        include ('./index/includes/scripts.php');
        $pdo = Database::connect();
        $sql = "SELECT * FROM residents WHERE status =  'verified' ";
       
        ?>

           
        


  <div class="row">
    <?php
  
 
  $sql = 'SELECT * FROM residents WHERE covid_status = "Positive"';
  $query = $pdo->prepare($sql);
  $query->execute(array());
  $count = $query->rowCount();

  ?>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Number of Covid Cases</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php echo $count?>

              </div>
            </div>
            <div class="col-auto">
              
              <i class="fas fa-user-lock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
  
 
  $sql = 'SELECT * FROM residents WHERE covid_status = "Asymptomatic"';
  $query = $pdo->prepare($sql);
  $query->execute(array());
  $count = $query->rowCount();

  ?>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Number of Asymptomatic Cases</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php echo $count?>

              </div>
            </div>
            <div class="col-auto">
              
              <i class="fas fa-user-lock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
 <?php
  
 
  $sql = 'SELECT * FROM residents WHERE covid_status = "Under Observation"';
  $query = $pdo->prepare($sql);
  $query->execute(array());
  $count = $query->rowCount();

  ?>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of Under Observation Cases</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php echo $count?>

              </div>
            </div>
            <div class="col-auto">
              
              <i class="fas fa-user-lock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

     <?php
  
 
  $sql = 'SELECT * FROM  residents WHERE covid_status = "Negative"';
  $query = $pdo->prepare($sql);
  $query->execute(array());
  $count = $query->rowCount();

  ?>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Number of Negative Cases</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <?php echo $count?>

              </div>
            </div>
            <div class="col-auto">
              
              <i class="fas fa-user-lock fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
     
</section>
<section>
  <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
             <div class="col-md-6">
         <h6 class="m-0 font-weight-bold text-primary">If you have any concerns click this button -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#user_report_modal">
              Report
            </button>
          </h6>
    
</div>

</div>

  </div>
</section>
 <!-- footer -->
  <footer style="margin-top: -350px;"><br>
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
</footer>
<!-- end footer -->

    

 

    
 

	


</body>
</html>