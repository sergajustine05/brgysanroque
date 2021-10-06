
<head>
	<title>prototype</title>
</head>


<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css">
  

<link rel="stylesheet" type="text/css" href="./assets/css/main.css">


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

<body>

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
      <h1 style="font-family: algina;">ANNOUNCEMENTS</h1>

     <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead style="background-color: #02383b; color: yellow;">
          <tr>
            <th> WHAT</th>
            <th>WHEN</th>
            <th>WHERE </th>
            <th> full details </th>
          </tr>
        </thead>

      <?php
        include ('index/includes/scripts.php');
        $pdo = Database::connect();
        $sql = "SELECT * FROM announcements ORDER BY id ASC";
        if(!empty($sql))
        {
          foreach ($pdo->query($sql) as $row)
           {
            echo "<tr>";
            echo "<td>" . $row['what_announcement'] ;
            
            echo "<td>" . $row['when_announcement'];
             echo "<td>" . $row['where_announcement'];
            echo "<td>"  . $row['full_details'];
                

            
            
            echo "</td>";
           

          echo '</tr>';
          }
        }
        





