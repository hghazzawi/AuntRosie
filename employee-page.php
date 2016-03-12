<?php $title="Ingredient Inventory"; include("templates/header.php"); ?>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Add New Order</a></li>
    <li><a href="#tab-ing-list">Ingredients Inventory</a></li>
    <li><a href="#tab-menu-inv">Menu Inventory</a></li>
	<li><a href="#tab-material-inv">Materials Inventory</a></li>
  </ul>
  <div id="employeename">
	Welcome, [employee]
  </div>
  <div id="tabs-1">
	<p>Sample description </p>
  </div>
  <div id="tab-ing-list">
	<form>
  <fieldset>
    <legend>Fruit</legend>
    <table>
	<tr>
		<th></th>
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
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
</form>
  
  </div>
  <div id="tab-material-inv">
  <form>
  <fieldset>
    <legend>Materials</legend>
    <table>
	<tr>
		<th></th>
		<th>Add</th>
		<th>Remove</th>
		<th>Quantity</th>
		<th>On Hand</th>
	</tr>
	<tr>
		<td><label for="ingredient">Pie Plate</label></td>
        <td><input id="amount" name="amount" value="1"/></td>
		<td><input type="image" src="img\controls\More.png" alt="add ingredient" /></td>
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

<?php include("templates/footer.php"); ?>