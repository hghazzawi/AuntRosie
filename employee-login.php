<?php $title="Homepage"; include("templates/header.php"); ?>
<br/>
<div style="width: 700px ;margin-left: auto ;margin-right: auto ;">
	<form class="customform">
	   <h1>Employee Login</h1>
	   <br/>
	   <p>Email Address:</p> <input type="email" name="email-address"><br>
	   <p>Password:</p><input type="password" name="password">
	   <input type="submit" value="submit">
	</form>
</div>

<?php include("templates/footer.php"); ?>