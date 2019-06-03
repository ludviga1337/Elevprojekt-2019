<?php
  session_start();
  include_once "installningar.php";
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Medlemsregister</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 2px;
        padding: 10px;
      }
     </style>
   </head>
   <body>

     <h1>Hjärtligt välkommen till medlemsregistret!</h1>
     <br><br>
<form action="filtrat.php" method="post">
    Välj:
      <select name="Val">
        <option value="Förnamn">Förnamn</option>
        <option value="Efternamn">Efternamn</option>
        <option value="Telefonnummer">Telefonnummer</option>
        </select>
      <br>
    Fullständig matchning:
    <input type="radio" name="matchning" value="fullstandig"><br>
    Ofullständig matchning:
    <input type="radio" name="matchning" value="ofullstandig"><br>
    Filtrera:
    <input type="text" name="filter"><br>
     <input type="submit" value="OK"><br>
   </form>
<br><br>


<table>
  <tr><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>

  <?php
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM tb_medlemsregister");
  while($row = $stmt->fetch())
  {
    echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
  }
 ?>

</table>

<?php echo "<br><br>"?>
<a href="greeting.php">Tillbaka</a><br>

   </body>
   </html>
