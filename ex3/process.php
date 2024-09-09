<?php

  $comment = $_POST["comment"];
  $file = "logs.txt";


  file_put_contents($file, $comment . PHP_EOL, FILE_APPEND);


  header('Location: http://localhost:3000/ex3/index.php');
  exit();
?>
