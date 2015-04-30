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
	

<!-- <p>The basic tutorial is coming soon!</p> -->

<h3>
<ol>
<li>Click on Articles/Databases</li></br>
(Picture here)<br/>
<li>Select "PsychARTICLES"</li><br/><br/>
<li>Click Choose Databases</li><br/><br/>
<b>So, you start by exploring this question.<br/>
Copy and paste this entire question into the ssearch box in PsychInfo/PsychArticles. What happens?<br/><br/>
* I don't get relevant results.<br/><br/>
* I get plenty of relevant results.<br/><br/>
PsychInfo/Psychrticles aren't as userfriendly as an internet search engines sach as Google where you can type in complete sentences and Google will be able to find what you're looking for.<br/>
(Picture Here)<br/>
In PsychInfo and PsychArticles, you will need to use keywords.</br>
<li>Select PsychINFO</li><br/>
(Picture Here)<br/>
Now let's try a sample search.<br/><br/>
Let's say you want to search for information about the following research questions:<br/><br/>
Does bullying affect teenager's decisions about substance abuse?<br/>
</b> You will get more relevant results by using <b>keywords</b>.<br/>
(Picture Here)<br/>
Try searching using the <b>keywords</b> <i>bullying substance use.</i><br/>
</h3><h5>This should narrow your search to much more relevant results<br/>
Your results should include articles about bullying/substance use and bullying/drug use.</h5>
<h3><li>Now try searching <i>bull*.</i></li></h3><br/>
<h5>By searching bull* your results should include different forms of bull* including bulling, bullied, bully, and bullies.</h5>
<h3><li>Some of your results may not have a PDF link for the full text.</li></h3><br/>
(Picture here)<br/>
<h5>By clicking the purple Find It! button, links may be provided to other websites that will give you access to the article. If the article is something that you need to access and no other websites are provided, you can request the article through the interlibrary loan for a small fee. ~$1.00</h5><br/><br/>
<h3><li>By clicking <i>Advanced Search</i> you can narrow your search results:</li><br/><br/>
<h5>For example, you can limit your results to include full text only articles, specify the year of publication, and limit your search to peer reviewed articles</h5><br/>
(Picture here)
</ol>

        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
