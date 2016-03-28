<?php $title="Ingredient Inventory"; include("templates/header.php"); ?>
<br>

<div style="width: 1200px ;margin-left: auto ;margin-right: auto ;">
<div id="tabs">
  <ul>
    <li><a href="#tab-order">Add New Order</a></li>
    <li><a href="#tab-ing-list">Ingredients Inventory</a></li>
    <li><a href="#tab-menu-inv">Menu Inventory</a></li>
	<li><a href="#tab-material-inv">Materials Inventory</a></li>
  </ul>
  <br />
  <div style="font-size:14pt;text-align:center" id="employeename">
	Welcome, Thor Hart
  </div>
  <br>
  <hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
		<br>
  
  <div id="tab-order"> 
	<div id="item-form">
	
<?php
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT main.productname FROM main WHERE main.productsize = '1000'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo"
	<table><tr><td>
	
	<form>
  <fieldset>
    <legend>Pies</legend>
    <table>";

while ($row = pg_fetch_assoc($result)) {
	
	echo" 	
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		
	";	
		
        $mainResult = pg_query($connection, "SELECT main.productname FROM main WHERE main.productsize = '1000'");
        $mainResult=pg_fetch_array($mainResult);
        $dropdownResult = pg_query($connection, "SELECT productsize FROM main WHERE productname = '".$mainResult['productname']."'");
        echo "<td width='25%'><select>";
        while ($row = pg_fetch_assoc($dropdownResult)) {            
                    echo "<option>".$row['productsize']."g</option>
                    ";
                }
        echo "</select></td>";

	echo"
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
    </tr>";
}
	echo"
	</table>
  </fieldset>
  <fieldset>
    <legend>Preserves</legend>
    <table>";

$result = pg_query($connection, "SELECT main.productname FROM main WHERE main.productsize = '250'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_assoc($result)) {
	
	echo" 	
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		
	";	
		
        $mainResult = pg_query($connection, "SELECT main.productname FROM main WHERE main.productsize = '250'");
        $mainResult=pg_fetch_array($mainResult);
        $dropdownResult = pg_query($connection, "SELECT productsize FROM main WHERE productname = '".$mainResult['productname']."'");
        echo "<td width='25%'><select>";
        while ($row = pg_fetch_assoc($dropdownResult)) {            
                    echo "<option>".$row['productsize']."g</option>
                    ";
                }
        echo "</select></td>";

	echo"
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
    </tr>";
}
?>  
	</table>
  </fieldset>
  </form>
  </td><td valign="top">
  <div id="receipt-panel">
  <form>
  <fieldset>
    <legend>Order: [OrderID] -- Date: [2016-06-06]</legend>
    <table>
	<tr>
		<th></th>
		<th>Product</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<tr id="chickenpot">
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" onclick="document.getElementById('chickenpot').style.visible = 'false';"/></td>
		<td><label for="ingredient">Strawberry Jam</label></td>
        <td><label for="amount" name="amount"/>9</td>
		<td><label for="price">$34.96</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Steak and Stilton</label></td>
        <td><label for="amount" name="amount"/>1</td>
		<td><label for="price">$7.99</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Stew Pie</label></td>
        <td><label for="amount" name="amount"/>1</td>
		<td><label for="price">$8.99</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Peach Butter</label></td>
        <td><label for="amount" name="amount"/>1</td>
		<td><label for="price">$5.96</label></td>
    </tr>
	<tfoot>
		<td></td>
		<td></td>
		<td><label for="">Total:</label></td>
		<td><label for="Totalprice">$57.90</label></td>
	</tfoot>
	</table>
	</form>
  </div>
		</td></tr></table>
	</div>
	
  </div>
  <div id="tab-ing-list">
<?php  
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT IngredientName, QuantityOnHand, CategoryID FROM IngredientInventory WHERE CategoryID = '2'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
echo "<form>
  <fieldset>
    <legend>Fruit</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
while ($row = pg_fetch_assoc($result)) {
	
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['ingredientname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
	</tr>";
}
	
    echo"
	</table>
  </fieldset>
  <fieldset>
    <legend>Meat</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
	
 
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT IngredientName, QuantityOnHand, CategoryID FROM IngredientInventory WHERE CategoryID = '1'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['ingredientname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo "
	</table>
  </fieldset>
  <fieldset>
  <legend>Vegetables</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";

if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT IngredientName, QuantityOnHand, CategoryID FROM IngredientInventory WHERE CategoryID = '3'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
	
while ($row = pg_fetch_assoc($result)) {
	echo"	
	<tr>
		<td width='30%'><label for='ingredient'>".$row['ingredientname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}

echo"
	</table>
  </fieldset>
  <fieldset>
  <legend>Other</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";

if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT IngredientName, QuantityOnHand, CategoryID FROM IngredientInventory WHERE CategoryID = '4'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
	
while ($row = pg_fetch_assoc($result)) {
	echo"	
	<tr>
		<td width='30%'><label for='ingredient'>".$row['ingredientname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}

echo"
	</table>
  </fieldset>
</form>
	
  </div>
";

// ***********************  MENU DIV  *****************************************************************
//*****************************************************************************************************
  ?>
  
<?php  
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '1000' AND MAIN.PRODUCTTYPE = 'Pie'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
echo"
  <div id='tab-menu-inv'>
  <form>
  <fieldset>
    <legend>Frozen Pies</legend>
	<legend>1 Kg</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";

while ($row = pg_fetch_assoc($result)) {
	echo"
	
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
	<legend>500g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
	
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '500' AND MAIN.PRODUCTTYPE = 'Pie'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}	
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
  </fieldset>
  <fieldset>
    <legend>Fresh Pies</legend>
	<legend>1 Kg</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";

if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '1000' AND MAIN.PRODUCTTYPE = 'Pie'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}	
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient' id='".$row['productname']."'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
	<legend>500g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
	
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '500' AND MAIN.PRODUCTTYPE = 'Pie'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}		
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
	</fieldset>
	<fieldset>
	<legend>Preserves</legend>
	<legend>500g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
	
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '500' AND MAIN.PRODUCTTYPE = 'Preserve'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}		
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
	<legend>250g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";
	
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT ProductInventory.quantityonhand, main.Productname
FROM productinventory, main
WHERE productinventory.productcode = main.productcode AND MAIN.PRODUCTSIZE = '250' AND MAIN.PRODUCTTYPE = 'Preserve'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}		
while ($row = pg_fetch_assoc($result)) {
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['productname']."</label></td>
        <td width='25%'><input id='amount' name='amount' value='1'/></td>
		<td width='10%'><input type='image' src='img\controls\More.png' alt='add ingredient' /></td>
		<td width='10%'><input type='image' src='img\controls\Less.png' alt='remove ingredient' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	</table>
  </fieldset>
  </fieldset>
</form>";

//***************************** MATERIAL DIV *************************
//*****************************  *********  **************************

echo"
  </div>
  <div id='tab-material-inv'>
  <form>
  <fieldset>
    <legend>Materials</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>";

if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, "SELECT accessorycode, name, quantityonhand FROM Accessories");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_assoc($result)) {
	$acodeInput=$row['accessorycode'];
	
	echo"
	<tr>
		<td width='30%'><label for='ingredient'>".$row['name']."</label></td>
        <td width='25%'><input id='".$row['accessorycode']."' class='numberinput' name='amount' value='1'/></td>
		<td width='10%'><a href='addQuantity.php?acode=".$row['accessorycode']."'> <img src='img\controls\more.png' alt='add ingredient' /></a></td>
		<td width='10%'><input type='image' src='img\controls\less.png' alt='remove ingredient' onclick='removeQuantity()' /></td>
		<td width='25%'><label for='quantity'>".$row['quantityonhand']."</label></td>
    </tr>";
}
echo"
	
	</table>
  </fieldset>
</form>
  </div>
  <br />
</div>

</div>";
 ?>

<?php include("templates/footer.php"); ?>