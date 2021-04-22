
<?php 
require "config.php";



function  get_product($conn,$limit = '',  $cat_id = '' , $product_id ='')
{

  $sql = "SELECT product. *,categories.categories FROM product,categories WHERE product.status = 1 ";

    if ($cat_id != '') {


        $sql .= " AND product.categories_id=$cat_id";
    }
    if ($product_id != '') {

        $sql .= " AND product.id=$product_id";

    }
    $sql .= " AND product.categories_id=categories.id";
    $sql .= " ORDER BY product.id DESC";

    if ($limit != '') {

        $sql .= "product.limit $limit";
    }

    $result = mysqli_query($conn, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}


?>
<?php 
define("PRODUCT_IMAGE_SITE_PATH","SITE_PATH","media/product");
// define("GREETING",'SERVER_PATH',"Hello you! How are you today?");

?>