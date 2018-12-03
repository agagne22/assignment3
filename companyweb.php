<!DOCTYPE html>
<html>
<head>
	<title>Gagne's Sports apparel</title>
</head>
<body bgcolor="#E6E6FA">
<!-- connect to database -->
<?php
	include "connecttodb.php";
?>
<h1>Gagne's Sports Apparel </h1>
<h2> Our Customers </h2>
<!-- list all customers and then have a submit button so they can see the purchases of a customer -->
<form action = "getpurchases.php" method = "post"> 
<?php
	include "getcompany.php";
?>
<input type = "submit" value="Get Customer's purchases">
</form>
<p>
<hr>
<p>
<!-- list products based either on price or description -->
<h2>List of all products</h2>
<h3>How would you like the products ordered?</h3>
<form action = "getproducts.php" method = "post">
	<input type = "radio" name = "order" value = "costperitem"> Price <br>
	<input type = "radio" name = "order" value = "description"> Description <br>
<input type = "submit" value="List all products">
</form>
<p>
<hr>
<p>
<!-- adding a new purchase a customer has made -->
<h2>Inserting a customer's new purchase</h2>
<form action="addpurchase.php" method="post">
Customer id:<select name="selectcustomerid" id="selectcustomerid">
<option value = "1" > Select Here </option>

<?php
	include "getcustomerid.php";
?>
</select>
<br>
Product id: <select name="selectproductid" id="selectproductid">
<option value = "1" > Select Here </option>
<?php
	include "getproductid.php";
?>
</select>
<br>
Amount purchased: <input type = "text" name="quantity">
<br>
<br>
<input type = "Submit" value = "Add new purchase">
</form>
<p>
<hr>
<p>
<!-- adding a new customer to the database -->
<h2>Insert new customer </h2>
<form action = "addcustomer.php" method = "post">
<br>
First name: <input type = "text" name = "firstname">
<br>
Last name: <input type = "text" name = "lastname"> 
<br>
City: <input type = "text" name = "city">
<br>
Phone number: <input type = "text" name = "phonenumber">
<br>
Agent id : <select name="selectagentid" id="selectagentid">
<option value = "1" > Select Here </option>
<?php
	include "getagentid.php";
?>
</select>
<br>
<br>
<input type = "submit" value = "add new customer">
</form>
<p>
<hr>
<p>
<!-- giving a customer's phone number and then let them update it -->
<h2> Updating a customer's phone number </h2>
<form action = "updatephone.php" method = "post">
Customer id: <select name = "custid" id="custid">
<option value = "1" > Select Here </option>
<?php
	include "getcustomerid.php";
?>
</select>
<br>
<br>
<input type = "submit" value= "current phone number">
</form>
<!--Deleting a customer-->
<p>
<hr>
<p>
<h2>Deleting a customer </h2>
<form action = "deletecustomer.php" method = "post">
Customer id: <select name = "delcustid" id = "delcustid">
<option value = "1"> Select Here </option>
<?php
	include "getcustomerid.php";
?>
</select>
<br>
<input type = "submit" value = " I would like to delete this customer">
</form>
<!-- Showing all customer's and how much they've purchased of something -->
<p>
<hr>
<p>
<h2>Seeing who has bought more than a certain  quantity of one of our products</h2>
<form action = "displayquantity.php" method = "post">
Quantity: <input type = "text" name = "minquantity">
<br>
<input type = "submit" value = "display">
</form>
<p>
<hr>
<p>
<!-- Show all products no one has bought -->
<h2> Products which have never been purchased </h2>
<?php
	include "getneverpurchase.php";
?>
<p>
<hr>
<p>
<!-- Show total sales -->
<h2> Display total sales of a specific product </h2>
<form action="getsales.php" method="post">
Product id: <select name="selprodid" id="selprodid">
<option value = "1" > Select Here </option>
<?php
     	include "getproductid.php";
?>
</select>
<br>
<br>
<input type = "Submit" value = "View sales">
</form>
</body>
</html>
