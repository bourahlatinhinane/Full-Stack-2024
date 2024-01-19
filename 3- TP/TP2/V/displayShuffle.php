<?php
session_start();
//var_dump($_SESSION["students"]);
?>
<table  border = "1">
  <th> place </th>
  <th> prenom </th>
  
  <?php foreach ($_SESSION["studentsToDisplay"] as $key => $value) { ?>
    
  <tr>
    <td>
      <?php echo $key ?>
    </td>
    <td>
      <?php echo $value; } ?>
    </td>
  
    
 
   
  </tr>

</table>
