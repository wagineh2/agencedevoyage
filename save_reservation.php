<?php

include('db.php');

if (isset($_POST['save_reservation'])) {
  $nom = $_POST['nom'];
  $prenom =  $_POST['prenom'];
  $tel = $_POST['tel'];
  $mail = $_POST['mail'];
    $evenement = $_POST['evenement'];

 
  $query = "INSERT INTO reservation(evenement,nom, prenom,tel,mail) VALUES ( '$evenement','$nom','$prenom','$tel','$mail')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
    echo "<script type = \"text/javascript\">
                     alert(\"Erreur !\");
                      window.location = (\"reservation.php\")
                       </script>";
  }
  else
  {
    echo "<script type = \"text/javascript\">
                     alert(\"Réservation effectué !\");
                      window.location = (\"evenement.php\")
                       </script>";
  }

  $_SESSION['message_type'] = 'success';
  header('Location: evenement.php');

}

?>
