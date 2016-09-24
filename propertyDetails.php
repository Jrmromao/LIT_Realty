<?php
   include 'CONFIG/connection.php';
   
   $pID = $_GET['pid'];
   $aID = $_GET['aID'];
   $sql = "SELECT * FROM properties WHERE id = '$pID'";
   $sql2 = "SELECT * FROM agents WHERE agentId = '$aID'";
      
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>LIT Realty</title>
   
   </head>
   <body>
      <img src="Capture.PNG" width="30%" height="30%" alt="Logo"/>
      <?php
        
         $result3 = $conn->query($sql);
        
         if (($result3->num_rows > 0)) {

         while($row = $result3->fetch_assoc()) 
                  {   
              $img = $row['photo'];
 
         ?>            
      <table>
         <tr>
            <td>Street: </td>
            <td> <?php echo $row['street'];?> </td>
            <td rowspan="5"><img src='images/full/<?php echo $img?>'/></td>
         </tr>
         <tr>
            <td>Bedrooms: </td>
            <td><?php echo $row['bedrooms'];?> </td>
         </tr>
         <tr>
            <td>Bathrooms: </td>
            <td><?php echo $row['bathrooms'];?> </td>
         </tr>
         <tr>
            <td>Squarefeet: </td>
            <td><?php echo $row['squarefeet'];?></td>
         </tr>
         <tr>
            <td>Price:</td>
            <td><?php echo " €".$row['price'];?> 
         </tr>
         <tr>
            <td>Description:</td>
            <td colspan="2"><?php echo $row['description'];?> </td>
         </tr>
  
      <?php
              }
                 
       }
         $result = $conn->query($sql2);
        
         if (($result->num_rows > 0)) {

         while($row = $result->fetch_assoc()) 
                  {
             ?>
         <tr>
             <td><u>Contact:</u> </td>
             <td><?php  echo "Name: ".$row['name'].", "?></td>
             <td> <?php echo " Email: ".$row['email'].",  Tel: ".$row['phone'].",  Fax: ".$row['fax'];?></td>   
         </tr>
            
             <?php 
         }   
                  }
 ?>
             
           </table>
      <a href="HandleQuery.php"><button type="submit" value="Go Back">Go Back</button></a>

      
   </body>
</html>