<?php
class question
{
	public $question, $results, $answer1, $answer2, $answer3, $answer4, $correct;

	function __construct()
	{
	}

	public function setQuestion($q)
	{
		$this->question = $q;
	}

	public function setAnswers($a1, $a2, $a3, $a4, $c)
	{
		$this->answer1=$a1;
		$this->answer2=$a2;
		$this->answer3=$a3;
		$this->answer4=$a4;
		$this->correct=$c;
	}

	public function showQuestion()
	{
		echo "<table><tr><td>".$this->question."</td></tr>";
		echo "<tr><td>A: ".$this->answer1."</td></tr>";
		echo "<tr><td>B: ".$this->answer2."</td></tr>";
		echo "<tr><td>C: ".$this->answer3."</td></tr>";
		echo "<tr><td>D: ".$this->answer4."</td></tr>";
		echo "<tr><td></td></tr>";
		echo "</table>";
	}
}
?>
