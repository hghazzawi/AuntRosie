<?php $title="Homepage"; include("templates/header.php"); ?>
<br/>
<div style="width: 500px ;margin-left: auto ;margin-right: auto ;">
	<form action="employee-page.php" class="customform">
	   <h1 style="text-align: center">Employee Login</h1>
	   <br/>
	   <hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
	   <br/>
	    
	   <p style="font-size:14pt;font-weight:bold;font-family:Roboto">Email Address:</p> <br>
	   <input type="email" name="email-address">
	   <p style="font-size:14pt;font-weight:bold;font-family:Roboto">Password:</p><br><input type="password" name="password">
	   <p style="font-size:14pt;font-weight:bold;font-family:Roboto;text-align:center">
		<input style="width: 300px" type="submit" value="Login">
	   </p>
	</form>
</div>

<?php include("templates/footer.php"); ?>