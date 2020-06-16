
<?php include("db.php"); ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WHYRIM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
    
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
   
              <i class="fa fa-globe"></i> <a><img src="img/logo.png" alt=""></a> <center> <?php if(isset($_GET['evenement'])) {
  
  $id_reservation=$_GET['evenement'];

 $query1 = "SELECT * FROM `reservation` WHERE id=$id_reservation ";
    $result_tasks1 = mysqli_query($conn, $query1);   
    while($row = mysqli_fetch_assoc($result_tasks1)) {?> <h3>Réservation n°</3><?php  echo $row['id']; }} ?> </center> 
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        De
        <address>
          <strong>Whyrim </strong><br>
         
Omran, Tunis<br>
rue 507<br>

+1 253 565 2365<br>
Mon to Fri 9am to 6pm<br>

Whyrim@esprit.tn<br>
Send us your query anytime!<br>

        </address>
        <br><br>


        <br><br>
      </div>
       <div class="container" center>
<table class="table table-bordered">
  <thead>
    <tr>
            <th>ID de la réservation </th>
            <th>ID de l'evenement</th>
            <th>Nom du client</th>
            <th>Prénom du client</th>
            <th>Numéro de téléphone</th>
            <th>Email du client</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    if(isset($_GET['evenement'])) {
  
  $id_reservation=$_GET['evenement'];


    $query = "SELECT * FROM `reservation` WHERE id=$id_reservation ";
    $result_tasks = mysqli_query($conn, $query);    

    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
    <tr>
     <td><?php echo $row['id']; ?></td>

           <td><?php echo $row['evenement']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
             <td><?php echo $row['tel']; ?></td>
                          <td><?php echo $row['mail']; ?></td>
     
    </tr>
    <?php }} ?>
        </tbody>
      </table>

    <!-- /.row -->

   
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div> 
<br><br><br>

    <br><br> <a style="padding-left: 500px;font-size: 20px; font-weight: bold">  Signature : </a>

<!-- ./wrapper -->

</body>
</html>
