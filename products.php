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


    <ul class="rig columns-4">
    	<li>
    		<img src="img/pies/pie.jpg" />
    		<h3>Best PIE</h3>

    		
			<a href="product-details.php"><button>View Details</button></a>


			<button href="product-details.php">View Details</button>

    	</li>
    	<li>
    		<img src="img/pies/pie.jpg" />
    		<h3>Best PIE</h3>
    		
			<a href="product-details.php"><button>View Details</button></a>
    	</li>
		<li>
    		<img src="img/pies/pie.jpg" />
    		<h3>Best PIE</h3>
    		
			<a href="product-details.php"><button>View Details</button></a>
    	</li>
		<li>
    		<img src="img/pies/pie.jpg" />
    		<h3>Best PIE</h3>
    		
			<a href="product-details.php"><button>View Details</button></a>
    	</li>

    </ul>

<?php include("templates/footer.php"); ?>
