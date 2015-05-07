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
require_once('question.php');
$question = new question();
$file = fopen("questions.txt", "r") or die("Cannot open question file");
$num=0;
$lines = count(file("questions.txt"));
if ($lines%6 == 0)
{
	$array = array();
	while(($line = fgets($file)) != false)
	{
		$question->setQuestion($line);
		$question->setAnswers(fgets($file), fgets($file), fgets($file), fgets($file), fgets($file));
		array_push($array, $question, $_POST["a".$num], $_POST["r".$num], $_POST["n".$num]);
		$num++;
		$question = new question();
	}
	for ($x=0;$x<$num*4;$x++)
	{
		if ($x%4 == 0)
			echo "<b>".$array[$x]->question."</b>";	
		if ($x%4 == 1)
		{
			$selection=-1;
			$correct=-1;
			if ($array[$x] == "A" || $array[$x] == "a")
				$selection=1;
			if ($array[$x] == "B" || $array[$x] == "b")
				$selection=2;
			if ($array[$x] == "C" || $array[$x] == "c")
				$selection=3;
			if ($array[$x] == "D" || $array[$x] == "d")
				$selection=4;
			if ($array[$x-1]->correct == $array[$x-1]->answer1)
				$correct=1;
			if ($array[$x-1]->correct == $array[$x-1]->answer2)
				$correct=2;
			if ($array[$x-1]->correct == $array[$x-1]->answer3)
				$correct=3;
			if ($array[$x-1]->correct == $array[$x-1]->answer4)
				$correct=4;
			if ($array[$x] == null)
			echo "<table><tr><td>Answer: ".$array[$x]."</td><td>There was no input.</td></tr>";
			elseif ($correct == $selection)
			echo "<table><tr><td>Answer: ".$array[$x]."</td><td>Correct</td></tr>";
			else
			echo "<table><tr><td>Answer: ".$array[$x]."</td><td>Incorrect</td></tr>";
		}
		if ($x%4 == 2)
		{
			if ($array[$x] == null)
			echo "<tr><td>Result number answer was found on: ".$array[$x]."</td><td>There was no input.</td></tr>";
			elseif ($array[$x]<1)
			echo "<tr><td>Result number answer was found on: ".$array[$x]."</td><td>Value entered is not valid.</td></tr>";
			elseif ($array[$x] <= 3)
			echo "<tr><td>Result number answer was found on: ".$array[$x]."</td><td>Good Searching!</td></tr>";
			else
			echo "<tr><td>Result number answer was found on: ".$array[$x]."</td><td>Answer was found too low in the results. See here for some searching tips:<form action='tips.php'><input type='submit' value='Tips'></form></td></tr>";
		}
		if ($x%4 == 3)
		{
			if ($array[$x] == null)
			echo "<tr><td>Number results found: ".$array[$x]."</td><td>There was no input.</td></tr></table></br>";
			elseif ($array[$x]<1)
			echo "<tr><td>Number results found: ".$array[$x]."</td><td>Value entered is not valid.</td></tr></table></br>";
			elseif ($array[$x] <= 500)
			echo "<tr><td>Number results found: ".$array[$x]."</td><td>Good Searching!</td></tr></table></br>";
			elseif ($array[$x] >= 501 && $array[$x] <= 1000)
			echo "<tr><td>Number results found: ".$array[$x]."</td><td>Reasonable Searching.</td></tr></table></br>";
			elseif ($array[$x] >= 1001)
			echo "<tr><td>Number results found: ".$array[$x]."</td><td>Try and lower your search results!</td></tr></table></br>";
		}
	}
}
else
{
echo "Questions file has an incorrect number of lines";
}
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
