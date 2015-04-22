<?php
require("./model/pdo_connect.php");
require("./model/db_functions.php");
//Read mode
$mode = "";
if (isset($_REQUEST['mode']))
        $mode = $_REQUEST['mode'];
switch ($mode){
        case 'list_products':
                // Get a list of products using the selected category
                $category = $_REQUEST['category'];
                $sql = "SELECT product_id, product_title, product_description , unit_price, image FROM products 
                            WHERE product_type=:type ORDER by product_title";
                $values = array(':type'=>$category);
                $product_list = getAll($sql, $values);
                include("./view/product_view.php");
                break;

	case 'list_customers':

		 $sql = "SELECT customer_id, first_name, last_name from customers";

		$values = "";
                $customer_list = getAll($sql, $values);
echo "test".count($customer_list);
		include("./view/customer_view.php");


break;



        default:
                include("./view/default_view.php");
                break;
}

?>
