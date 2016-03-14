<?php 
$title="Homepage";
include("templates/header.php"); ?>

<br>

<div  id="banner">
	<a href="products.php"><img style="margin-left: auto ;margin-right: auto ;" src="img/banner.png"/></a>
</div>

<br>
<br>
<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

<div >
	<br>
	<h1 style="font-weight:bold;text-align: center">Best Selling Pies</h3><br>
	
	<div style="margin-left: auto ;margin-right: auto ;width:94%">
		<ul class="rig columns-4">
		
			<?php 
			
				$result = pg_query($connection, "select*from main where producttype='Pie' order by saleamount DESC limit 4");
				
				while ($row = pg_fetch_assoc($result)) {			
					echo "<a href='product-details.php?prod_code=".$row['productcode']."'>
							<li>
								<img src='img/products/".$row['productimagebig']."' />
								<h3 style='text-align: center'>".$row['productname']."</h3>
							</li>
						</a>
					";
				}
				
			?>
			
		
			
			
			
		</ul>
	</div>
	
</div>
<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
<div>
	<br>
	<h1 style="font-weight:bold;text-align: center" >Best Selling Preserves</h3><br>
	<div style="margin-left: auto ;margin-right: auto ;width:94%">
		<ul class="rig columns-4">
			
			<?php 
			
				$result = pg_query($connection, "select*from main where producttype='Preserve' order by saleamount DESC limit 4");
				
				while ($row = pg_fetch_assoc($result)) {			
					echo "<a href='product-details.php?prod_code=".$row['productcode']."'>
							<li>
								<img src='img/products/".$row['productimagebig']."' />
								<h3 style='text-align: center'>".$row['productname']."</h3>
							</li>
						</a>
					";
				}
				
			?>
			
			
		</ul>
	</div>
</div>

<?php include("templates/footer.php"); ?>