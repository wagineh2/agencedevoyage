<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

          

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des promotions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="tables.php">Afficahge des promotions</a><a class="nav-link" style="font-size: 13px;" href="index.html">Ajouts des promotions</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="../../../categorie/views/tables.php">Afficahge des categories</a><a class="nav-link" style="font-size: 13px;" href="../../../categorie/views/index.html">Ajouts des categories</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des évenements
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="afficher_event.php">Afficahge des évenements</a><a class="nav-link" style="font-size: 13px;" href="ajouter_event.php">Ajouts des évenements</a>
                                                                    <a class="nav-link" style="font-size: 13px;" href="afficher_reservation.php">Afficher les réservations</a></nav>

                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
   

          <!-- Page Heading -->
        
        <!-- /.container-fluid -->


   <div id="layoutSidenav_content">
                <main style="padding: 30px;">
                    <div class="container-fluid">
                        <h1 class="text-center font-weight-light my-1" style="padding-bottom: 30px;padding-top: 30px;">Gestions des évenements</h1>
                        <center>  

  <center>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET">
          <div class="input-group">
            <input name="acin" type="text" class="form-control bg-light border-0 small" placeholder="Recherche par ID " aria-label="Search" aria-describedby="basic-addon2"/>
              <div class="input-group-append">

<button name="but8" class="btn btn-primary"  type="submit">
                  <i class="fas fa-search fa-sm"></i>

                </button>
              </div>

            </div>
          </form>
<center/>
           <br> 

          <form  method="GET">
          <div class="input-group">

            <input name="date1" type="date" class="form-control "  aria-label="Search" aria-describedby="basic-addon2"/>
            <input name="date2" type="date" class="form-control " aria-label="Search" aria-describedby="basic-addon2"/>

             <input type="submit" name="tridate" class="btn btn-primary"  value="Rechercher">

            </div>
          </form>
<br> <br>
   

      
    </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID de l'évenement</th>
            <th>Destination</th>
            <th>Debut</th>
            <th>Fin</th>
            <th>Tarif</th>
            <th>Photo</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>

          
<?php 

if (!isset($_GET['tridate'])) 
  {   
      $query = "SELECT * FROM evenement   ORDER BY id asc" ;

$result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
                       <td><?php echo $row['id']; ?></td>

           <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['debut']; ?></td>
            <td><?php echo $row['fin']; ?></td>
            <td><?php echo $row['prix']; ?></td>
             <td><?php echo $row['photo']; ?></td>

           
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
         <?php   }}
    if (isset($_GET['tridate'])) 
  {   if (empty($_GET['date1']and $_GET['date2'] )){
   
      $query = "SELECT * FROM evenement   ORDER BY id asc" ;

   }
   else {
   $date1= $_GET['date1'];
      $date2= $_GET['date2'];
        echo 'Du '.$date1 ; echo '   Au '.$date2;
          $query = "SELECT * FROM evenement where (debut between '$date1' and '$date2') and  (fin between '$date1' and '$date2') ";}

$result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
                       <td><?php echo $row['id']; ?></td>

           <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['debut']; ?></td>
            <td><?php echo $row['fin']; ?></td>
            <td><?php echo $row['prix']; ?></td>
             <td><?php echo $row['photo']; ?></td>

           
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
         <?php   }}
        

 elseif (isset($_GET['but8']))  
{
{   
 if (empty($_GET['acin'])){
 
   $query = "SELECT * FROM evenement order by id asc" ;
 }
 else {
 $acin= $_GET['acin'];
        $query = "SELECT * FROM evenement where id=$acin ";}

          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['debut']; ?></td>
            <td><?php echo $row['fin']; ?></td>
            <td><?php echo $row['prix']; ?></td>
                         <td><?php echo $row['photo']; ?></td>

           
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
           <?php }}}?>
        </tbody>
      </table>

                            </main>
 
           
            </div>
        </div> 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
