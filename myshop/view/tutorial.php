<!doctype html>
<html><head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='../css/styles.css'>

</style>

<script>
$(document).ready(function(){
        $('.p-link').click(function(){
        //read its id
        var category = $(this).attr('id');
$.ajax({
type: 'get',
url: 'myshop/getProducts.php',
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
                <h2>Ebsco Tutorial</h2>
                <div class='nav-menu'>
                        <ul >
                                <li role="presentation" class="menu-item"><a class='a-menu' href="index.php">Home</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="signin.php">Sign in</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="quiz.php">Quiz</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="tutorial.php">Tutorial</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="about.php">About</a></li>
                        </ul>
                </div>
        </div>
   </div>
   <div class='row'><!-- middle box -->
        <div class='col-xs-10 content'><!-- right section: content -->
	
<h3>Welcome to the EBSCO host tutorial!</h3>
<h5>This first section will show you how to select a database. Please follow the steps below to select and search the PsycARTICLES database.</h5>
<ol>
<li>Select P at the top of the page.</li>
<img src="selectingP.png">
<li>Scroll down the page until you reach the PsycARTICLES option, and click on PsycARTICLES.</li>
<img src="SelectingArticles.png">
<li>You will be taken to a search page where you can search the PsycARTICLES database. Above the search bar EBSCO host will show you which database you are searching.</li>
<img src="searchbar.png">
<li>You can also select multiple databases to search. Click the choose databases hyperlink above the search bar.</li>
<img src="choosedatabases.png">
<li>You will notice that there are a large number of databases. Scroll down the page until you reach the PsycInfo database, and click the checkbox next to it. After that, click ok at the top or bottom of the page, and you will be able to search both databases at the same time!</li>
<img src="selectpsychinfo.png">
</ol>

Click continue to learn about searching with EBSCO host.</br>
<a href="searching.php">Continue</a>

        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
