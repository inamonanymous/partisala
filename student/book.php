<?php	
   include "connection.php";
   include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Books</title>
</head>
<body>
   <h2>List Of Books</h2>
   <?php

    $res=mysqli_query($db,"SELECT * FROM `books`;");

    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color: white;'>";

      echo "<th>";   echo "ISDBN";   echo "</th>";
      echo "<th>";   echo "Book-Name";   echo "</th>";
      echo "<th>";   echo "Authors";   echo "</th>";
      echo "<th>";   echo "Status";   echo "</th>";
      echo "<th>";   echo "Quantity";   echo "</th>";
   echo "</tr>";

   while($row=mysqli_fetch_assoc($res))
         {
            echo "<tr style= 'background-color: white'>";
            echo "<td>"; echo $row['isbn']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['status']; echo "</td>";
            echo "<td>"; echo $row['quantity']; echo "</td>";

            echo "</tr>";
         }
         echo "</table>"
;   ?>
</body>
</html>