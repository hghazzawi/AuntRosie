<?php $title="NewsLetter"; include("templates/header.php"); ?>
<br><br>
<div style="width: 700px ;margin-left: auto ;margin-right: auto ;">
	<h1 style="text-align: center">Newsletter</h1>
	<br/>
	<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
	<br/>
	
	
	<p  style="color:#15A5AA;text-align: center;font-size:14pt;font-weight:bold;font-family:Roboto" id="confirmationMessage"><br><br></p>

	
	<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Sign up to our newsletter and get </p>
	<ul style="font-size:14pt;font-weight:bold;font-family:Roboto">
		<li>Exclusive offers !</li>
		<li>The latest events happening with Aunt Rosie</li>
		<li>Exclusive discount codes</li>
		
	</ul>
	
	<br/>


	<form  class="customform"  action="#">
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Email:<br><input type="email"/></p>
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">First Name :<br> <input type="text" /></p>
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Last Name : <br><input type="text" /></p>
		<p style="font-size:14pt;font-weight:bold;font-family:Roboto">Gender:<br><select >
					<option>Male</option>
					<option>Female</option>
				</select></p>
		<p style="font-size:12pt;font-weight:bold;font-family:Roboto"><input type="checkbox" name="emailSub" value="Bike">I would like to receive information about Aunt Rosie&#39;s upcoming events<br></p>
		<p style="font-size:12pt;font-weight:bold;font-family:Roboto"><input type="checkbox" name="updates" value="Car">Yes, I would like updates and pie news via email, and I am 16 years or older </p>
		<hr style="border: 0; height: 0; 
		   border-top: 1px solid rgba(0, 0, 0, 0.1); 
		   border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
			<br/>
		<p style="font-size:11pt;font-weight:bold;font-family:Roboto">By clicking subscribe I agree to the privacy policy</p>
		<br/>
		 
		 <p style="font-size:14pt;font-weight:bold;font-family:Roboto;text-align:center">
		<input style="width: 300px" onClick="displayConfirmation();" type="submit" value="Subscribe">
	   </p>
		<br/>
	</form>
</div>


<?php include("templates/footer.php"); ?>