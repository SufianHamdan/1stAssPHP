<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- Ass1 -->
<?php
  echo "Q1 ------> "; 
  $printHello =  "sufian ";

  echo $printHello;

  $var1 = "variable 1";
  $var2 = "variable 2";
  
  echo "<br> <br> <br>";
  echo "Q2 ------> ";
  echo $var1." , ".$var2;

  echo "<br> <br> <br>";
  echo "Q3: ";
  echo "<h1>This is an h1 tag inside a php script</h1>";
  echo "<p>This is a paragraph tag inside a php script</p>";

  echo "This is the end of Assignment 1 <hr>";
?>

<!-- Ass2 -->
<h4>Return the Length of a String</h4>
<form action="index.php" method="post" >
  <label for="textLength">Type your text:</label>
  <input type="text" id="textLength" name="textLength"><br><br>
  <input type="submit" value="Length">
</form>
    
<?php 
  echo "<br>";

  
  if (isset($_POST['textLength'])) {
    echo "The String length is --> " . strlen($_POST['textLength'])  . "<br> <br>"; // outputs 12
  }
?>
<h4>Count Words in a String</h4>
<form action="index.php" method="post" >
  <label for="word_count">Type your text:</label>
  <input type="text" id="word_count" name="word_count"><br><br>
  <input type="submit" value="Count">
</form>
<?php 
  echo "<br>";
  if (isset($_POST['word_count'])) {
    echo "The word count is --> " . str_word_count($_POST['word_count'])  . "<br> <br>"; // outputs 12
  }
  echo "<br>";
?>

<h4>Reverse a String</h4>
<form action="index.php" method="post" >
  <label for="reverse">Type your text:</label>
  <input type="text" id="reverse" name="reverse"><br><br>
  <input type="submit" value="Reverse">
</form>
<?php 
  echo "<br>";
  if (isset($_POST['reverse'])) {
    echo "The word in reverse is --> " . strrev($_POST['reverse'])  . "<br> <br>"; // outputs 12
  }
  echo "<br>";
?>

<h4>Search For a Text Within a String</h4>
<h5>This is a test text to search for a string!</h5>
<form action="index.php" method="post" >
  <label for="pos">Search for a string from the above sentence:</label>
  <input type="text" id="pos" name="pos"><br><br>
  <input type="submit" value="Search">
</form>
<?php 
  echo "<br>";
  if (isset($_POST['pos'])) {
    echo "The text position is --> " . strpos("This is a test text to search for a string!", $_POST['pos'])  . "<br> <br>"; // outputs 12
  }
  echo "<br>";
?>

<h4>Replace Text Within a String</h4>
<h5>This is a test text to replace a text within this string!</h5>
<form action="index.php" method="post" >
  <label for="oldStr">Type your desired word to be replaced:</label>
  <input type="text" id="oldStr" name="oldStr"><br><br>
  <label for="newStr">Type your new word to be replaced:</label>
  <input type="text" id="newStr" name="newStr"><br><br>
  <input type="submit" value="Change">
</form>
<?php 
  echo "<br>";
  if (isset($_POST['oldStr'] ) && isset($_POST['oldStr'] )) {
    echo "Result is --> " . str_replace($_POST['oldStr'], $_POST['newStr'], "This is a test text to replace a text within this string!")  . "<br> <br>"; // outputs 12
  }

  echo "This is the end of Assignment 2 <hr>";
  echo "<br>";
?>

<!-- Ass3 -->
<?php
$flt = 3.6;
echo 'datatype name for $n = 3.6 is --> ';
var_dump($flt);
echo "<br>";

$int = 57584;
echo 'datatype name for $n = 57584 is --> ';
var_dump($int);
echo "<br>";

$bol = false;
echo 'datatype name for $n = false is --> ';
var_dump($bol);
echo "<br>";

$str = "farah";
echo 'datatype name for $n = "farah" is --> ';
var_dump($str);
echo "<br>";

$nl = null;
echo 'datatype name for $n = null is --> ';
var_dump($nl);
echo "<br>";

$arr = array("red", "blue", "pink");
echo 'datatype name for $n = array("red", "blue", "pink") is --> ';
var_dump($arr);
?>

<h4>What is the output of these scripts</h4>
<?php 
$code = '<?php
$n = "do your task";
echo $n;
?>

<?php
echo strlen("what is your name?"); 
?>

<?php
echo str_word_count("my name is farah"); 
?>

<?php
echo strrev("my name is farah"); 
?>

<?php
echo strpos("welcome to my task page", "task"); ?>

<?php
echo str_replace("farah", "sara", "this is farah page");
?>

<?php
define("name", "farah");
$name = "sara";
echo name;
?>
';
highlight_string($code);

?>
<h5>OUTPUT</h5>
<?php
$n = "do your task";
echo $n . "<br>";
?>

<?php
echo strlen("what is your name?") . "<br>"; 
?>

<?php
echo str_word_count("my name is farah") . "<br>";
?>

<?php
echo strrev("my name is farah") . "<br>"; 
?>

<?php
echo strpos("welcome to my task page", "task") . "<br>"; ?>

<?php
echo str_replace("farah", "sara", "this is farah page") . "<br>";
?>

<?php
define("name", "farah") . "<br>";
$name = "sara";
echo name;
?>
</body>
</html>

