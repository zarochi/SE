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
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="btutorial.php">Basic Tutorial</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="about.php">About</a></li>
                        </ul>
                </div>
        </div>
   </div>
   <div class='row'><!-- middle box -->
        <div class='col-xs-10 content'><!-- right section: content -->
	
<form name="check" action="check.php" method="post">
<?php
require_once('question.php');
$question = new question();
$file = fopen("questions.txt", "r") or die("Cannot open question file");
$num=0;
$lines = count(file("questions.txt"));
if ($lines%6 == 0)
{
while(($line = fgets($file)) != false)
{
$question->setQuestion($line);
$question->setAnswers(fgets($file), fgets($file), fgets($file), fgets($file), fgets($file));
$question->showQuestion();
echo "<table><tr><td>Answer:</td><td><input type='text' name='a".$num."'></td></tr>";
echo "<tr><td>Result answer was found on:</td><td><input type='text' name='r".$num."'></td></tr>";
echo "<tr><td>Number results found:</td><td><input type='text' name='n".$num."'></td></tr>";
echo "</table>";
$num++;
echo "</br>";
}
}
else
{
echo "Questions file has an incorrect number of lines";
}

fclose($file);
?>
<input value="Submit" type="submit">
</form>

        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
