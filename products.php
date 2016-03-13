<?php $title="Products"; include("templates/header.php");

$product_data = pg_fetch_all(pg_execute($connection, "get_all_products", Array()));
echo '<div id="product_listing">';
foreach($product_data as $this_product)
{
  echo '<a href="product_details.php?id='.$this_product['productcode'].'"><img src="'.$this_product['productimgsmall'].'" /><span>'.$this_product['productname'].'</span></a>';
  //could use: groupcode, producttype,
}
echo '</div>';


?>

	<br>


    <div style="margin-left: auto ;margin-right: auto ;width:1500px">
		<ul class="rig columns-4">
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
			<a href="product-details.php">
				<li>
					<img src="img/pies/pie.jpg" />
					<h3 style="text-align: center">Best PIE</h3>
					
					 
				</li>
			</a>
			
			
		</ul>
	</div>

<?php include("templates/footer.php"); ?>
