<?php
  $answer1 = $_POST["Question1"];
  $answer2 = $_POST["Question2"];
  $answer3 = $_POST["Question3"];
  $answer4 = $_POST["Question4"];
  $answer5 = $_POST["Question5"];
  $score = 0;
  $submit = $_POST["Submit"];

  if($answer1 == "Medivh"){
    $score ++;
  }
  if($answer2 == "Llane Wrynn"){
    $score ++;
  }
  if($answer3 == "Lordaeron"){
    $score ++;
  }
  if($answer4 == "Orgrim Doomhammer"){
    $score ++;
  }
  if($answer5 == "Capital City (Lordaeron)"){
    $score ++;
  }
  echo "Your answer: ".$answer1."<br>";
  echo "Correct answer: Medivh"."<br><br>";
  echo "Your answer: ".$answer2."<br>";
  echo "Correct answer: Llane Wrynn"."<br><br>";
  echo "Your answer: ".$answer3."<br>";
  echo "Correct answer: Lordaeron"."<br><br>";
  echo "Your answer: ".$answer4."<br>";
  echo "Correct answer: Orgrim Doomhammer"."<br><br>";
  echo "Your answer: ".$answer5."<br>";
  echo "Correct answer: Capital City (Lordaeron)"."<br><br>";
  echo "Your score: ". $score."/5"."<br>";
  echo "You got a ". $score * 20 ."%"."<br>";
?>
