<html>
<head>
	<title>order</title>
	<h1>order</h1>
</head>
<body>
<?php
	@$db = new mysqli('localhost', 'hcho2', 'Hcho21166!', 'hcho2');
	if($db->connect_error) {
		echo "Connection error";
		exit;
	} 
	else {
		echo "connected";
	}
	$query1 = "SELECT deliverer.DelivName as deliverer_name, restaurant.RestStreet, customer.CustName, ordered.OrderDate
			 FROM ordered 
			 LEFT JOIN restaurant ON ordered.RestaurantID = restaurant.RestaurantID
			 LEFT JOIN customer ON ordered.CustomerID = customer.CustomerID
			 LEFT JOIN deliverer ON ordered.DelivererID = deliverer.DelivererID
			 ORDER BY deliverer_name, ordered.OrderDate";
	$result1 = $db->query($query1);
  
  echo "<table><tr><caption>ORDERS BY DELIVERER</caption></tr>";
  echo "<tr><th>Deliverer Name</th><th>Restaurant Address</th><th>Customer Name</th><th>Date</th></tr>";
  while($row = mysqli_fetch_assoc($result1))
  {
    echo "<tr>";
    echo "<td>" . $row['deliverer_name'] . "</td>";
	echo "<td>" . $row['RestStreet'] . "</td>";
    echo "<td>" . $row['CustName'] . "</td>";
    echo "<td>" . $row['OrderDate'] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>";
  
  $db->close();
?>
</body>
</html>