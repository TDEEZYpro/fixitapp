<?php
session_start();

if(!isset($_SESSION["username"]))
{
  header("location:../index.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body> <h1>Fixit</h1>
     <?php echo $_SESSION["username"] ?>
    <div>
     
      <table>
            <tr>
              <th>Student NO.</th>
              <th>Lastname Intitals</th>
              <th>Report Type</th>
              <th>Location</th>
            </tr>
            <tr>
              <td>21854578</td>
              <td>Smith, John</td>
              <td>plumbing</td>
              <tb>E410</tb>
            </tr>
            <tr>
              <td>219094317</td>
              <td>Jackson, Eve</td>
              <td>Electricity</td>
              <tb>F216</tb>
            </tr>
      </table>  
      
  </div>
    <a href="logout.php">Logout</a>
</body>
</html>