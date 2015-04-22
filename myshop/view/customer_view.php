<!doctype html>
<html><head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/styles.css'>

</style>

<script>
$(document).ready(function(){
        $('#customer-list').change(function(){
        //read its id
        var id = $(this).val();
$.ajax({
type: 'get',
url: 'http://washington.uww.edu/cs482/brehmpj09/myshop/getCustomerInfo.php',
dataType: 'json',
data: 'id=' + id,
success: function(response){
        if (response != '-1'){
                        //$('#category-info').html(response);
        //What to do with the resposnse
	var msg = "";
if (response.length ==0)
	msg = "Your list is empty";
	else{
	for (var i=0; i<response.length;i++){
	msg+="<p>Title: " + response[i].product_title;
	msg+=", Cost: " + response[i].unit_price;
	msg+="</p>";
	
}	$('#category-info').html(msg);

}

        } else
                alert("Could not get the data!");

        }

        });

        });

        });

</script>


</head>
<body>
<div class='container' id='outer-box' ><!-- outer box -->
  <div class='row'><!-- top box -->
        <div class='col-xs-12 header'>
                <h2>My Digital Store</h2>
                <div class='nav-menu'>
                        <ul >
                                <li role="presentation" class="menu-item"><a class='a-menu' href="index.php">Home</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="index.php">Sign in</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="index.php">Admin</a></li>
                        </ul>
                </div>
        </div>
   </div>
   <div class='row'><!-- middle box -->
        <div class='col-xs-2 content'><!-- left section: menu -->
                <h3>Categories</h3>
                <ul>
                        <li><span class='p-link' id='computer'>Computers</span></li>
			<li><span class='p-link' id='tv'>HDTV</span></li>
			<li><span class='p-link' id='cell'>Cell Phones</span></li>
			
                </ul>
        </div>
        <div class='col-xs-10 content'><!-- right section: content -->
                <h2>Welcome to my digital store</h2>
                <p>My electronic shop has a greate selection of state of the art digital equipments.</p>
                <p>We are constantly adding more to give you the best selection possible!</p>
	<p>List of customers: <select id ='customer-list'>
		<option value = '0'>--Select customer</option>

		<?php
			
			for ($i=0;$i<count($customer_list);$i++){
			echo "<option value='".$customer_list[$i]['customer_id']."' >".$customer_list[$i]['first_name'].", ".$customer_list[$i]['last_name']."</option>\n";

}

		?>

	</select></p><div id='category-info'></div>
        </div><!-- end section -->
  </div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ mydigitalstore.com</div>
  </div>
</div>
</body>
</html>
