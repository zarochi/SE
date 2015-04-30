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
	
<h4>This section will teach you how to use the advanced search feature of EBSCO host.</h4>
<ol>
<li>At the top of the page select the Advanced Search option. This will open up other ways for us to search the database.</li>
<img src="selectadvanced.png">
<li>Using the advanced search you can select to use <b>and</b>, <b>not</b>, and <b>or</b> keywords. If you use the <b>and</b> option all the words you enter will be searched. If you use the <b>or</b> option articles matching either condition will be searched. Finally, the <b>not</b> option will exclude those words from the search. You will also notice that you can select a field to search. This is very useful if you are looking for something by a specific author.</li>
<img src="advancedview.png">
<li>You will notice that there are additional search modes on the bottom of the page. These can be used to further narrow your search. A large majority of these options are database specific, so make sure to check them out!</li>
<img src="searchmodes.png">
<li>If you scroll further down the page you will see that there are also special limiters available for some databases. These can help us narrow our search down even more than using the search modes alone.</li>
<img src="speciallimiters.png">
</ol>
Congratulations! You have completed the EBSCO host tutorial. Try navigating to the Quiz section for an assessment of your searching skills!
        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
