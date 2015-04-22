<!doctype html>
<html><head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/styles.css'>
</style>
<script>
$(document).ready(function(){
	$('.p-link').click(function(){
	//read its id
	var category = $(this).attr('id');
$.ajax({
type: 'get',
url: 'http://washington.uww.edu/cs482/brehmpj09/myshop/getProducts.php',
data: 'category=' + category,
success: function(response){
	if (response != '-1'){
			$('#category-info').html(response);
	//What to do with the resposnse
	} else
		alert("Could not get the data!");

	}

	});

	});

	});

</script>


</head>
<body>
<div class='container' id='outer-box' >
  <div class='row'><!--  Header -->
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
                        <li><a href='?mode=list_products&category=computer'>Computers</a></li>
                        <li><a href='?mode=list_products&category=tv'>HDTV</a></li>
                        <li><a href='?mode=list_products&category=cell'>Cell phones</a></li>
                </ul>
        </div>
        <div class='col-xs-10 content'> <!-- right section: content -->
        <!-- display selected product -->
        <?php
        /* $product_list contains a list of all the available products of a selected category  */
        for ($i=0; $i<count($product_list); $i++){
                echo "<div class='row product'>";
                echo "<h3>".$product_list[$i]['product_title']."</h3>";
                echo "<div class='col-xs-12'>";
                echo "<p>List Price: ".$product_list[$i]['unit_price']."</p>\n";
                echo "<h3>Description</h3><p>".$product_list[$i]['product_description']."</p>";
                echo "</div></div>";
        }
        ?>

        </div><!-- end section -->
   </div>
   <div class='row'><!-- footer -->
                <div class='col-xs-12 footer'>@ mydigitalstore.com</div>
   </div>
</div>
</body>
</html>
