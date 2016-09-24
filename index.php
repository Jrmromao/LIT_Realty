<?php
include 'CONFIG/connection.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>LIT Realty</title>
</head>
<body>

    <img src="Capture.PNG" width="30%" height="30%" alt="Logo"/>


    <form name="form" action="HandleQuery.php" method="GET">
        Enter Property Location 
        <br><input type="text" name="pLocation" placeholder="Enter Location"/>
        <br>
        <br>
        Select Price Range   <br>
        <select name="priceRange" placeholder="Select Price">
            <option></option>
            <option value="0">Any</option>
            <option value="1">€150,000 – €200,000</option>
            <option value="2">€200,000 – €250,000 </option>
            <option value="3">€250,000 - €350,000 </option>
            <option value="4">€350,000 - €500,000</option>
        </select>    
        <br>
        <input type="submit" name="submit">
    </form>


</body>
</html>