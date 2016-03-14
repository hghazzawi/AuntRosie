<?php $title="Products"; include("templates/header.php");





if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, 'SELECT * FROM "public"."main"');
if (!$result) {
  echo "An error occurred.\n";
  exit;
}



// dump($result);





?>

	<br>


    <div style="margin-left: auto ;margin-right: auto ;width:95%">
		<ul class="rig columns-4">
		
			<?php 
			
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

<?php include("templates/footer.php"); ?>
