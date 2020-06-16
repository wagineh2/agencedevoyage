<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'maro'
) or die(mysqli_erro($mysqli));

?>
