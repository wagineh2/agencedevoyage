<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $destination = $_POST['destination'];
  $debut = $_POST['debut'];
  $fin = $_POST['fin'];
  $prix = $_POST['tarif'];
  $photo = $_POST['photo'];



  $query = "INSERT INTO evenement(destination,debut ,fin, prix,photo) VALUES ('$destination','$debut','$fin','$prix','$photo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
echo "<script type = \"text/javascript\">
                     alert(\"Erreur !\");
                      window.location = (\"ajouter_event.php\")
                       </script>";
  }
  else
  {
    echo "<script type = \"text/javascript\">
                     alert(\"évenement ajouté avec succés!\");
                      window.location = (\"afficher_event.php\")
                       </script>";
  }
  $_SESSION['message'] = 'Evenement ajouter avec succés';
  $_SESSION['message_type'] = 'success';
  header('Location: afficher_event.php');

}

?>
