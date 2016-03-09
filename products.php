<?php $title="Products"; include("templates/header.php");

$product_data = pg_fetch_all(pg_execute($connection, "get_all_products"));
echo '<div id="product_listing">';
foreach($product_data as $this_product)
{
  echo '<a href="product_details.php?id='.$this_product['ProductCode'].'"><img src="" /><span>'.$this_product['ProductName'].'</span></a>';
  //could use: GroupCode, ProductType, ProductImageSmall
}
echo '</div>';
include("templates/footer.php");
