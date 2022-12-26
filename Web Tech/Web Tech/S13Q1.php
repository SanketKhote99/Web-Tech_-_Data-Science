<script>table {
   border: 1px solid black;
}

td {
   height: 30px;
   width: 30px;
}

.black {
   background: black;
}
</script>
   <?php
   include '/home/adika/NetBeansProjects/Practicals/S13Q1.css';
   echo"<table>";
      for($row = 1; $row <= 8; $row++){
          
         echo "<tr>";
            for($column = 1; $column <= 8; $column++){
               if(($row + $column) % 2 == 0){
                  echo "<td class='black'></td>";
               } else {
                  echo "<td></td>";
               }    
            }
         echo "</tr>";
         
      }
      echo"</table>";
   ?>
