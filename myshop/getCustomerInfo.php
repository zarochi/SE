<?php
require("./model/pdo_connect.php");
require("./model/db_functions.php");

$category = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];

                $sql = "SELECT p.product_title, p.unit_price FROM products as p, customers as c, sales as s WHERE s.customer_id = c.customer_id AND p.product_id = s.product_id AND c.customer_id = :customer_id";
                $values = array(':customer_id'=>$id);
                $sales_list = getAll($sql, $values);
/*
		$msg="";
		for ($i=0; $i<count($sales_list); $i++){
                $msg.="<p> Product: ".$sales_list[$i]['product_title'];
                $msg.=" List Price: ".$sales_list[$i]['unit_price'];
                $msg.="<div class='col-xs-12'>";
                $msg.="<p>List Price: ".$sales_list[$i]['unit_price']."</p>\n";
                $msg.="</div></div>";

}*/

$list = json_encode($sales_list);

echo $list;
} else 
echo "-1";

?>
