<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM evenement WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'evenement annuler avec succés';
  $_SESSION['message_type'] = 'danger';
  header('Location: afficher_event.php');
}

?>
