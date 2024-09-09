<?php

  $current = "";


  if (file_exists("logs.txt")) {
      $file = "logs.txt";


      $current = file_get_contents($file);
  } else {

      file_put_contents("logs.txt", "");


      header("Refresh:0");
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Comment Page</title>
</head>
<body>
<main>
    <h1>GROUP 9 COMMENT PAGE</h1>


    <form action="process.php" method="post">
        <textarea class="textarea" rows="6" cols="50" name="comment" placeholder="Enter a message.."></textarea>
        <input id="button" type="submit" value="Submit">
    </form>

    <div>
        <a href="logs.txt">View Text file</a>
    </div>

    <?php include('condition.php'); ?>
</main>

<footer>
    <p>&copy; WE ARE GROUP 9 EXERCISE No3.</p>


</footer>

</body>

</html>
