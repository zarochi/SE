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
	
<h4>This section will teach you how to search the databases you have selected.</h4>
<ol>
<li>Start by pasting this entire question into the search box: Does bulling affect teenagers' decisions about substance use, and what are some of the best practices or interventions in this area?</li>
<img src="search1.png">
</br></br>You will notice that we have a reasonably large number of results, and none of them are really relevant to what we are looking for.</br></br>
<li>Let's try to narrow our results and get more relevant articles. <b>Keywords</b> help us find the information we are looking for more easily. Try entering: bullying substance use.</li>
<img src="search2.png">
</br></br>You will notice that we have far fewer results this time, and that our results are much more relevant to what we are looking for.</br></br>
<li>Now try searching Bull*.</li>
<img src="search4.png">
</br></br>You will notice that we have a very large number of results, but this is a good way to get randomized articles relating to bullying.</br></br>
<li>Now try searching: Bull* substance use.</li>
<img src="search3.png">
You will notice that we have a few more results than when we searched bullying substance abuse. This is an even better search because it will also get articles that contain bullied and bully while keeping your results low.
</ol>
Click continue to view the tutorial for advanced searching</br>
<a href="advanced.php">Continue</a>

        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
