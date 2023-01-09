<html>
<head>
	<title>Home: All tables and entries</title>
	<h1>Home: All tables and entries</h1>
	<style>
      table {
		padding: 5px;
        border: 10px solid white;
        border-collapse: collapse;
		float: left;
	  }
	  th, td {
        padding: 5px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>
<body>
<?php
	@$db = new mysqli('localhost', 'hcho2', 'Hcho21166!', 'hcho2');
	if(mysqli_connect_errno()) {
		echo "Connection error".mysqli_connect_error();
		exit;
	} 
	
	#Restaurant Table
	$restaurantQuery = "SELECT * from restaurant";
	$restaurantQ = $db->query($restaurantQuery);
	echo "<table>";
	echo "<caption>Restaurant</caption>";
	echo "<th>ID</th><th>street</th><th>city</th><th>state</th><th>zip</th><th>phone</th>";
  
	while($row = mysqli_fetch_assoc($restaurantQ)) {
		echo "<tr>";
		echo "<td>" . $row['RestaurantID'] . "</td>";
		echo "<td>" . $row['RestStreet'] . "</td>";
		echo "<td>" . $row['RestCity'] . "</td>";
		echo "<td>" . $row['RestState'] . "</td>";
		echo "<td>" . $row['RestZipcode'] . "</td>";
		echo "<td>" . $row['RestPhone'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	#Customer Table
	$CustQuery = "SELECT * from customer";
	$CustQ = $db->query($CustQuery);
	
	echo "<table>";
	echo "<caption>Customer</caption>";
	echo "<th>ID</th><th>name</th><th>phone</th>";
	while($row = mysqli_fetch_assoc($CustQ)) {
		echo "<tr>";
		echo "<td>".$row['CustomerID']."</td>";
		echo "<td>".$row['CustName']."</td>";
		echo "<td>".$row['CustPhone']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	#Deliverer Table
	$DelivQuery = "SELECT * from deliverer";
	$DelivQ = $db->query($DelivQuery);
	echo "<table>";
	echo "<caption>Deliverer</caption>";
	echo "<th>ID</th><th>name</th><th>phone</th>";
	while($row = mysqli_fetch_assoc($DelivQ)) {
		echo "<tr>";
		echo "<td>".$row['DelivererID']."</td>";
		echo "<td>".$row['DelivName']."</td>";
		echo "<td>".$row['DelivPhone']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	#Ordered table
	$OrdQuery = "SELECT * from ordered";
	$OrdQ = $db->query($OrdQuery);
	echo "<table>";
	echo "<caption>Ordered</caption>";
	echo "<th>ID</th><th>date</th><th>time</th>";
	while($row = mysqli_fetch_assoc($OrdQ)) {
		echo "<tr>";
		echo "<td>".$row['OrderID']."</td>";
		echo "<td>".$row['OrderDate']."</td>";
		echo "<td>".$row['OrderTime']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	$db->close();
?>
</body>
</html>