	<link rel="stylesheet" href = "../css/style.css" type = "text/css">
<?php
	$username = $_POST["Username"];
	$password = $_POST["Password"];
	$quantity1 = $_POST["Quantity1"];
	$quantity2 = $_POST["Quantity2"];
	$quantity3 = $_POST["Quantity3"];
	$shipping = $_POST["shipping"];
	
	$cost1 = 5000;
	$cost2 = 10000;
	$cost3 = 7000;
	$shippingCost = 0;
	
	if($shipping == "Free 7 Day"){
		$shippingCost = 0;
	}
	else if($shipping == "$50 Overnight"){
		$shippingCost = 50;
	}
	else if($shipping == "$5.00 Three Day"){
		$shippingCost = 5;
	}
	
	echo "<h1>"."Welcome ".$username."!"."</h1>"."<br>"."Your password is: ".$password."<br>";
	
	echo "<table>"."<tr>";
	echo "<th>"."</th>";
	echo "<th>"."Quantity"."</th>";
	echo "<th>"."Cost Per Item"."</th>";
	echo "<th>"."Sub Total"."</th>";
	echo "</tr><tr>";
	echo "<th>"."Shalamayne"."</th>";
	echo "<td>".$quantity1."</td>";
	echo "<td>"."$".$cost1.".00"."</td>";
	echo "<td>"."$".$quantity1*$cost1."</td></tr>";
	echo "<tr><th>"."Frostmorne"."</th>";
	echo "<td>".$quantity2."</td>";
	echo "<td>"."$".$cost2.".00"."</td>";
	echo "<td>"."$".$quantity2*$cost2."</td></tr>";
	echo "<tr><th>"."Doomhammer"."</th>";
	echo "<td>".$quantity3."</td>";
	echo "<td>"."$".$cost3.".00"."</td>";
	echo "<td>"."$".$quantity3*$cost3."</td></tr>";
	echo "<tr><th>"."Shipping"."</th>";
	echo "<td colspan ='2'>".$shipping."</td>";
	echo "<td>"."$".$shippingCost."</td></tr>";
	echo "<tr><th colspan = '3'>"."Total Cost"."</th>";
	echo "<th>"."$".($quantity1*$cost1+$quantity2*$cost2+$quantity3*$cost3+$shippingCost)."</th></tr>";
	echo "</table>";

	
?>