<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
    <title>Gestion des événements</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="js/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="js/jquery.datetimepicker.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php
include("db.php");
$title = '';
$description= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM evenement WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
      $destination =  $row['destination'];
  $debut =  $row['debut'];
  $fin =  $row['fin'];
  $prix =  $row['prix'];
    $photo =  $row['photo'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
    $destination = $_POST['destination'];
  $debut = $_POST['debut'];
  $fin = $_POST['fin'];
  $prix = $_POST['tarif'];
      $photo =  $_POST['photo'];


  $query = "UPDATE evenement set destination = '$destination', debut = '$debut', fin = '$fin', prix ='$prix', photo='$photo'  WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Evenement modifier avec succés';
  $_SESSION['message_type'] = 'warning';
  header('Location: afficher_event.php');
}

?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

          <div class="form-group">
          <a1>Destination : </a1>
          <input  name="destination" class="form-control" value="<?php echo $destination; ?>" placeholder="Destination" autofocus>
          </div>
          <div class="form-group">
          <a1> Date de départ  : </a1>
          <input name="debut" type="date" class="form-control" value="<?php echo $debut; ?>" placeholder="Date départ" autofocus>
          </div>
          <div class="form-group">
            <a1>Date de retour : </a1>
          <input name="fin" type="date" class="form-control" value="<?php echo $fin; ?>" placeholder="Date retour" autofocus>
          </div>
          <div class="form-group">
          <a1>Tarif : </a1>
          <input type="text" name="tarif" class="form-control" value="<?php echo $prix; ?>" placeholder="Tarif" autofocus>
          </div>
            <div class="form-group">
          <a1>Photo de l'event : </a1>
          <input type="file" name="photo" class="form-control" placeholder="Photo"  autofocus>
          </div>

        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
    <!-- Js Plugins -->
    <script src="js/jquery-ui.js" type ="text/javascript"></script>
    <script src="js/jquery.js" type ="text/javascript" ></script>
    <script src="js/jquery-3.3.1.min.js" type ="text/javascript" ></script>
    <script src="js/bootstrap.min.js" type ="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.datetimepicker.full.js"></script>
    <script >
      


        $("#datetime").datetimepicker();
          
       
       
    </script>


 <script >
    
$("#datetime2").datetimepicker()
    </script>
</body>

</html>