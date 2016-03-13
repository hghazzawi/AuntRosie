<?php $title="NewsLetter"; include("templates/header.php"); ?>
<br><br>
<div style="width: 700px ;margin-left: auto ;margin-right: auto ;">

	<p>Sign up to our newsletter and get </p>
	<ul>
		<li>Exclusive offers !</li>
		<li>The latest events happening with Aunt Rosie</li>
		<li>Exclusive discount codes</li>
		
	</ul>
	
	<br/>


	<form class="customform" action="" >
		<p>Email:<input type="email"/></p>
		<p>First Name : <input type="text" /></p>
		<p>Last Name : <input type="text" /></p>
		<p>Gender:<select >
					<option>Male</option>
					<option>Female</option>
				</select></p>
		<input type="checkbox" name="emailSub" value="Bike">I would like to receive information about Aunt Rosie&#39;s upcoming events<br>
		<input type="checkbox" name="updates" value="Car">Yes, I would like updates and pie news via email, and I am 16 years or older 
		<p>By clicking subscribe I agree to the privacy policy</p>
		<br/>
		<p style="text-align:center">
		<input style="width: 300px" type="submit" value="Subscribe">
	   </p>
		<br/>
	</form>
</div>


<?php include("templates/footer.php"); ?>