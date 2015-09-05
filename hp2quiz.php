<html>
<head>
<title>Scores</title>
</head>
<body bgcolor="#FF99CC">
<?php
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$score=0;
if(!$q1 || !$q2 || !$q3 || !$q4 || !$q5 || !$q6 || !$q7 || !$q8 || !$q9 || !$q10)
header("location:hp2quiz.html");
if($q1=='a3')
{
$score=$score+1;
}

if($q2=='a4')
{
$score=$score+1;
}

if($q3=='a2')
{
$score=$score+1;
}

if($q4=='a3')
{
$score=$score+1;
}

if($q5=='a1')
{
$score=$score+1;
}

if($q6=='a1')
{
$score=$score+1;
}

if($q7=='a2')
{
$score=$score+1;
}
if($q8=='a1')
{
$score=$score+1;
}

if($q9=='a3')
{
$score=$score+1;
}

if($q10=='a3')
{
$score=$score+1;
}
?>
<font size="5" face="cursive">
<p align="center">
<?php
echo "<br><br><br><br>";
if($score<=3)
echo "SORRY..... Your score is $score :(:(:(";
if($score>3&&$score<7)
echo "GOOD..... Your score is $score...";
if($score>=7)
echo "EXCELLENT..... Your score is $score :):):)";
?>
<br>
<br>
<a href="quiz.php" style="text-decoration:none">Back to the main page</a><br>
<a href="hp3quiz.html" style="text-decoration:none">Continue the Quiz</a>
</p>
</font>
</body>
</html>