<?php
include 'CONFIG/connection.php';


@$pLocation = $_GET['pLocation'];
@$priceRange = $_GET['priceRange'];

switch ($priceRange){
    
    case 0:
        $sql = "SELECT * FROM properties";
        break;
    case 1:
        $sql = "SELECT * FROM properties WHERE price > 150000 AND price < 200000 AND city = '$pLocation'";
        break;
    case 2:
        $sql = "SELECT * FROM properties WHERE price > 200000 AND price < 250000 AND city = '$pLocation'";
        break;
    case 3:
        $sql = "SELECT * FROM properties WHERE price > 250000 AND price < 350000 AND city = '$pLocation'";
        break;
    case 4:
        $sql = "SELECT * FROM properties WHERE price > 350000 AND price < 500000 AND city = '$pLocation'";
        break;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        
        
        table, th, td {
                    border: 1px solid black;
                    width: 15%;   
                    width: 600px;
        }
        

    </style>
        
<title>LIT Realty</title>
</head>
<body>
    <a href="index.php"><img src="Capture.PNG" width="30%" height="30%" alt="Logo"/></a>
 <?php 
$result3 = $conn->query($sql);
if ($result3->num_rows > 0) {
    ?>
   <table >    
       <tr>
            <td>Street</td>
            <td>Bedrooms</td>
            <td>Bathrooms</td>
            <td>Squarefeet</td>
            <td>Description</td>
            <td>Photo</td>
            <td>Price</td>
       </tr>
    
    <?php
    
    while($row = $result3->fetch_assoc()) 
                {   
            $img = $row['photo'];?>
               <tr> 
                   <td><?php  echo $row['street'];?></td>
                   <td><?php  echo $row['bedrooms'];?></td>
                   <td><?php  echo $row['bathrooms'];?></td>
                   <td><?php  echo $row['squarefeet'];?></td>
                   <td><?php  echo $row['description'];?></td>
                   <td><a href="propertyDetails.php?pid=<?php echo $row['id']."&aID=".$row['agentId'] ;?> "><img src='images/thumbnails/<?php echo $img?>'/></a></td>        
                   <td><?php  echo $row['price'];?></td>
              <tr>
     
 
                    <?php 

	  
		}?>
               
    </table>   
   <?php				
}  else {
    ?>
   
   <p>Unfortunately no properties matched your search criteria in <u><?php echo $pLocation; ?></u>. Please. <a href="index.php">try again</a></p>
   <?php
}

	
?>
    
 
</body>
</html>