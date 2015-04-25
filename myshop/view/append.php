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
	
<?php
$q=$_POST['question'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$correct=$_POST['correct'];
if ($correct != "1" && $correct != "2" && $correct != "3" && $correct != "4")
	echo "Your selection for a correct answer was not valid. Please hit the back button on your browser and try again.";
else
{
$file=fopen("questions.txt", "a") or die("Cannot open questions file.");
fwrite($file, $q.PHP_EOL);
fwrite($file, $a1.PHP_EOL);
fwrite($file, $a2.PHP_EOL);
fwrite($file, $a3.PHP_EOL);
fwrite($file, $a4.PHP_EOL);
if ($correct == "1")
	fwrite($file, $a1.PHP_EOL);
elseif ($correct == "2")
	fwrite($file, $a2.PHP_EOL);
elseif ($correct == "3")
	fwrite($file, $a3.PHP_EOL);
elseif ($correct == "4")
	fwrite($file, $a4.PHP_EOL);
echo "Question added.";
}
echo "<form action='authenticate.php'>";
echo "<input type='submit' value='Back to editor'>";
echo "</form>";
?>

        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
