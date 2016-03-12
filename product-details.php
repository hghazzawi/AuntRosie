<?php $title="Product Details"; include("templates/header.php"); ?>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Description</a></li>
    <li><a href="#tabs-2">Nutritional Information</a></li>
    <li><a href="#tabs-3">Ingredients list</a></li>
  </ul>
  <div id="tabs-1">
	<p>Sample description </p>
  </div>
  <div id="tabs-2">
	<script>$('#test1').nutritionLabel();</script>
  </div>
  <div id="tabs-3">
  </div>
</div>

<?php include("templates/footer.php"); ?>