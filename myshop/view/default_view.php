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
<div class='container' id='outer-box' ><!-- outer box -->
  <div class='row'><!-- top box -->
        <div class='col-xs-12 header'>
                <h2>My Digital Store</h2>
                <div class='nav-menu'>
                        <ul >
                                <li role="presentation" class="menu-item"><a class='a-menu' href="index.php">Home</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="index.php">Sign in</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="index.php?mode=list_customers">Customers</a></li>
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
        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ mydigitalstore.com</div>
  </div>
</div>
</body>
</html>
