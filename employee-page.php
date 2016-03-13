<?php $title="Ingredient Inventory"; include("templates/header.php"); ?>
<br>
<?php $result = pg_query($connection, "SELECT ");?>
<div style="width: 1200px ;margin-left: auto ;margin-right: auto ;">
<div id="tabs">
  <ul>
    <li><a href="#tab-order">Add New Order</a></li>
    <li><a href="#tab-ing-list">Ingredients Inventory</a></li>
    <li><a href="#tab-menu-inv">Menu Inventory</a></li>
	<li><a href="#tab-material-inv">Materials Inventory</a></li>
  </ul>
  <div id="employeename">
	Welcome, [employee]
  </div>
  
  <div id="tab-order"> 
	<div id="item-form">
	<table><tr><td>
	
	<form>
  <fieldset>
    <legend>Pies</legend>
    <table>
	<tr>
		<td><label for="ingredient">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">1kg</option>
			<option value="small">500g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
    </tr>
	<tr>
		<td><label for="ingredient">Steak and Kidney</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">1kg</option>
			<option value="small">500g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
    </tr>
	<tr>
		<td><label for="ingredient">Ox Liver</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">1kg</option>
			<option value="small">500g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
    </tr>
	</table>
  </fieldset>
  <fieldset>
    <legend>Preserves</legend>
    <table>
	<tr>
		<td><label for="ingredient">Horseradish</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">500g</option>
			<option value="small">250g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		
    </tr>
	<tr>
		<td><label for="ingredient">Strawberry Jelly</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">500g</option>
			<option value="small">250g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		
    </tr>
	<tr>
		<td><label for="ingredient">Apple Butter</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><select>
			<option value="large">500g</option>
			<option value="small">250g</option>
		</select></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		
    </tr>
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
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Strawberry Jelly</label></td>
        <td><label for="amount" name="amount"/>9</td>
		<td><label for="price">$34.96</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Steak and Stout</label></td>
        <td><label for="amount" name="amount"/>1</td>
		<td><label for="price">$7.99</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Ox Liver</label></td>
        <td><label for="amount" name="amount"/>1</td>
		<td><label for="price">$8.99</label></td>
    </tr>
	<tr>
		<td><input type="image" src="img\controls\Cross.png" alt="Remove Item" /></td>
		<td><label for="ingredient">Apple Butter</label></td>
        <td><label for="amount" name="amount"/>9</td>
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
	<form>
  <fieldset>
    <legend>Fruit</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>
	<tr>
		<td><label for="ingredient">Lemon</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
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
	</tr>
	<tr>
		<td><label for="ingredient">Steak</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
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
	</tr>
	<tr>
		<td><label for="ingredient">Potato</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
	</table>
  </fieldset>
</form>
	
  </div>
  <div id="tab-menu-inv">
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
	</tr>
	<tr>
		<td><label for="pie">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
	</table>
	<legend>500g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>
	<tr>
		<td><label for="ingredient">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
	</table>
  </fieldset>
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
	</tr>
	<tr>
		<td><label for="pie">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
	</table>
	<legend>500g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>
	<tr>
		<td><label for="ingredient">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
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
	</tr>
	<tr>
		<td><label for="pie">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
	</table>
	<legend>250g</legend>
    <table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Add</th>
		<th>Remove</th>
		<th>On Hand</th>
	</tr>
	<tr>
		<td><label for="ingredient">Steak and Stout</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="quantity">[quantity]</label></td>
    </tr>
	</table>
  </fieldset>
  </fieldset>
</form>
  
  </div>
  <div id="tab-material-inv">
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
	</tr>
	<tr>
		<td><label for="ingredient">Pie Plate</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src=".\img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
	<tr>
		<td><label for="ingredient">Jar, 250ml</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
	<tr>
		<td><label for="ingredient">Jar, 500ml</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
		<td><input type="image" src="img\controls\Less.png" alt="remove ingredient" /></td>
		<td><label for="punchstrength">[quantity]</label></td>
    </tr>
	</table>
  </fieldset>
</form>
  </div>
</div>

</div>

<?php include("templates/footer.php"); ?>