<?php $title="Products"; include("templates/header.php");

$product_data = pg_fetch_all(pg_execute($connection, "get_all_products", Array()));
echo '<div id="product_listing">';
foreach($product_data as $this_product)
{
  echo '<a href="product_details.php?id='.$this_product['productcode'].'"><img src="" /><span>'.$this_product['productname'].'</span></a>';
  //could use: groupcode, producttype, productimagesmall
}
echo '</div>';


?>

<a href="product-details.php">Product Details</a>

<?php include("templates/footer.php"); ?>