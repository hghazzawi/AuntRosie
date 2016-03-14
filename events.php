<?php $title="Upcoming Events"; include("templates/header.php"); ?>

<br>
<div style="width: 50% ;margin-left: auto ;margin-right: auto ;">

	<h1 style="text-align: center">Upcoming Events</h1>
	<br/>
	<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
	<br/>
	
	<table style="font-size:12pt">
		<th>City</th>
		<th>Date</th>
		<?php 
			$result = pg_query($connection, "select venuelocation,venuedate from venuelocation");
				
				while ($row = pg_fetch_assoc($result)) {			
					echo "<tr><td>".$row['venuelocation']."</td><td>".$row['venuedate']."</td></tr>
					";
				}
		?>
		
	</table>
</div>

<br>
<br>


<?php include("templates/footer.php"); ?>