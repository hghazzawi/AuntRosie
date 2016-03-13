<?php $title="Products"; include("templates/header.php");




<<<<<<< HEAD
if (!$connection) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($connection, 'SELECT * FROM "public"."main"');
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

 dump($result);




=======
>>>>>>> 4d00a4bbd3237fadd074d0f9b7db29aaa694e838
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
