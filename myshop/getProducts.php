<?php
require("./model/pdo_connect.php");
require("./model/db_functions.php");

$category = "";
if (isset($_GET['category'])) {
	$category = $_GET['category'];

                $sql = "SELECT product_id, product_title, product_description , unit_price, image FROM products 
                            WHERE product_type=:type ORDER by product_title";
                $values = array(':type'=>$category);
                $product_list = getAll($sql, $values);

		$msg="";
		
		for ($i=0; $i<count($product_list); $i++){
                $msg.="<div class='row product'>";
                $msg.="<h3>".$product_list[$i]['product_title']."</h3>";
                $msg.="<div class='col-xs-12'>";
                $msg.="<p>List Price: ".$product_list[$i]['unit_price']."</p>\n";
                $msg.="<h3>Description</h3><p>".$product_list[$i]['product_description']."</p>";
                $msg.="</div></div>";

}
echo $msg;
} else 
echo "-1";

?>
