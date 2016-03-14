<?php $title="Product Details"; include("templates/header.php"); 

    if (empty($_GET['prod_code']))
	{
		header("location:index.php");
		ob_flush();
	}
	
	else if (isset($_GET['prod_code']))
	{
		$productcode=$_GET['prod_code'];
		
		
		$q=pg_prepare($connection,"products","select*from main where productcode=$productcode");
		$result=pg_execute($connection,"products",array());
		
		$result_set=pg_fetch_assoc($result,0);
	}


?>
<br>
<div style="width: 1000px ;margin-left: auto ;margin-right: auto ;">
	
	<p>
	
	<div style="float:left;padding-right:20px;" id="productThumbnail">
		<img src="img/pies/pie.jpg" width="100px" /><br>
	</div>
	
		
	<div id="productDesc">
		<h3><?php echo $result_set['productname'] ?>  $9.99</h3>
		<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
		   
		<br>   
		
		<h3>Description</h3>
		<p style="font-size:14pt">For the best in homemade meat pies and preserves the 
		exacting and demanding foodie need look no further than Aunt Rosie. 
		Since the early 80’s, Rosie has been making and selling her fare 

		
		</p>

				<br>
				
		
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Quantity</p><input size="2" type="text" value="1" /><br>
		<br>
		
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Venue:<br><select >
					<option>Whitby - March 12 </option>
					<option>Oshawa - February 4</option>
		</select></p>
		<br>
		<a href=""><button class="styled-button">Add to Cart</button></a>
		
	</div>
	
	
	
		

	
	
	
	
	
	<br style="clear: both;" />
	
	
	</p>

	
	
	<div id="tabs">
	
	  <ul>
		<li><a href="#tabs-2">Nutritional Information</a></li>
		<li><a href="#tabs-3">Ingredients list</a></li>
	  </ul>

	  
	  <div  id="tabs-2">
	  
			<button  class="styled-button" onclick="printContent('nutrionLabel')">Print Nutritional Label</button>
			
			<div id="nutrionLabel">
			
			  <!--<header class="performance-facts__header">
				<h1 class="performance-facts__title"></h1>
				<p>Serving Size 1/2 cup (about 82g)
				<p>Serving Per Container 8</p>
			  </header>-->
			  <table class="performance-facts__table">
				<!--<thead>
				  <tr>
					<th colspan="3" class="small-info">
					  Amount Per Serving
					</th>
				  </tr>
				</thead>-->
				<tbody>
				  <tr>
					<th colspan="2">
					  <b>Calories</b>
					  <?PHP echo $result_set['calories'] ?>
					</th>
					<!--<td>
					  Calories from Fat
					  130
					</td>-->
				  </tr>
				  <tr class="thick-row">
					<td colspan="3" class="small-info">
					  <b>% Daily Value*</b>
					</td>
				  </tr>
				  <tr>
					<th colspan="2">
					  <b>Total Fat</b>
					  <?PHP echo $result_set['fat'] ?>
					</th>
					<!--<td>
					  <b>22%</b>
					</td>-->
				  </tr>
				  <tr>
					<td class="blank-cell">
					</td>
					<th>
					  Saturated Fat
					  <?PHP echo $result_set['saturatedfat'] ?>
					</th>
					<!--<td>
					  <b>22%</b>
					</td>-->
				  </tr>
				  <tr>
					<td class="blank-cell">
					</td>
					<th>
					  Trans Fat
					  <?PHP echo $result_set['transfat'] ?>
					</th>
					<td>
					</td>
				  </tr>
				  <tr>
					<th colspan="2">
					  <b>Cholesterol</b>
					 <?PHP echo $result_set['cholesterol'] ?>
					</th>
					<!--<td>
					  <b>18%</b>
					</td>-->
				  </tr>
				  <tr>
					<th colspan="2">
					  <b>Sodium</b>
					  <?PHP echo $result_set['sodium'] ?>
					</th>
					<!--<td>
					  <b>2%</b>
					</td>-->
				  </tr>
				  <tr>
					<th colspan="2">
					  <b>Total Carbohydrate</b>
					   <?PHP echo $result_set['carbohydrates'] ?>
					</th>
					<!--<td>
					  <b>6%</b>
					</td>-->
				  </tr>
				  <tr>
					<td class="blank-cell">
					</td>
					<th>
					  Dietary Fiber
					  <?PHP echo $result_set['dietaryfiber'] ?>
					</th>
					<!--<td>
					  <b>4%</b>
					</td>-->
				  </tr>
				  <tr>
					<td class="blank-cell">
					</td>
					<th>
					  Sugars
					  <?PHP echo $result_set['sugar'] ?>
					</th>
					<td>
					</td>
				  </tr>
				  <tr class="thick-end">
					<th colspan="2">
					  <b>Protein</b>
					  <?PHP echo $result_set['protein'] ?>
					</th>
					<td>
					</td>
				  </tr>
				</tbody>
			  </table>
			  
			  <!--<table class="performance-facts__table--grid">
				<tbody>
				  <tr>
					<td colspan="2">
					  Vitamin A
					  10%
					</td>
					<td>
					  Vitamin C
					  0%
					</td>
				  </tr>
				  <tr class="thin-end">
					<td colspan="2">
					  Calcium
					  10%
					</td>
					<td>
					  Iron
					  6%
					</td>
				  </tr>
				</tbody>
			  </table>-->
			  
			  <p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>
			  
			  <table class="performance-facts__table--small small-info">
				<thead>
				  <tr>
					<td colspan="2"></td>
					<th>Calories:</th>
					<th>2,000</th>
					<th>2,500</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th colspan="2">Total Fat</th>
					<td>Less than</td>
					<td>65g</td>
					<td>80g</td>
				  </tr>
				  <tr>
					<td class="blank-cell"></td>
					<th>Saturated Fat</th>
					<td>Less than</td>
					<td>20g</td>
					<td>25g</td>
				  </tr>
				  <tr>
					<th colspan="2">Cholesterol</th>
					<td>Less than</td>
					<td>300mg</td>
					<td>300 mg</td>
				  </tr>
				  <tr>
					<th colspan="2">Sodium</th>
					<td>Less than</td>
					<td>2,400mg</td>
					<td>2,400mg</td>
				  </tr>
				  <tr>
					<th colspan="3">Total Carbohydrate</th>
					<td>300g</td>
					<td>375g</td>
				  </tr>
				  <tr>
					<td class="blank-cell"></td>
					<th colspan="2">Dietary Fiber</th>
					<td>25g</td>
					<td>30g</td>
				  </tr>
				</tbody>
			  </table>
			  
			  <p class="small-info">
				Calories per gram:
			  </p>
			  <p class="small-info text-center">
				Fat 9
				&bull;
				Carbohydrate 4
				&bull;
				Protein 4
			  </p>
			
		</div>
			  <br>
			  

			
	  </div>
	  
	  <div id="tabs-3">
		     <button class="styled-button" onclick="printContent('ingredients-list')">Print Ingredients List</button>
			 <div id="ingredients-list">
				 <ul id="ingredients">
					 <li>250g plain flour</li>
					 <li>140g cold unsalted butter</li>
					 <li>1 large egg yolk</li>
					 <li>1 small egg whisked with 1 tbsp milk</li>
					 <li>1kg trimmed British top rump beef</li>
					 <li>1 ox kidney, about 400g/14oz</li>
					 <li>250g flat mushrooms</li>
				 </ul>
			 </div>
			
	  </div>
	</div>
</div>
	
	<br>
	
	<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
		   
	<br>
	
	
<div>
	<br>
	<h3 style="text-align: center" >Related Items</h3><br>
	<div style="margin-left: auto ;margin-right: auto ;width:800px">
		<ul class="rig columns-3">
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					
				</li>
			</a>
			
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					 
				</li>
			</a>
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					 
				</li>
			</a>
			
			
		</ul>
	</div>
</div>
	
	
	
<br>


<?php include("templates/footer.php"); ?>