<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Välkommen</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 3px;
        padding: 5px;
      }
     </style>
   </head>
   <body>

<h1>Välkommen <?php echo $_SESSION['Förnamn'] ?><?php echo "  "?><?php echo  $_SESSION['Efternamn']."!" ?></h1>
<p>till <a href="medlemsregister.php">medlemsregistret</a></p>


   </body>
   </html>
