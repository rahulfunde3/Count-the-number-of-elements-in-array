<html>
<head>
<title>Solution 1</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="solution1.php">Solution 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="solution2.php">Solution 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="solution3.php">Solution 3</a>
    </li>
  </ul>
</nav>
<h2>Solution 1</h2>
<h3>Problem</h3>
<p>Given an array of numbers, output the unique values and the times it was repeated.</br></p>
<b>Input:</b>
<p>The first line is N : number of values</p>
N values follow</br>
<b>Test Case:</b>
<p><b>INPUT:</b>
5
14
22
37
22
37
</p>
<p><b>Output:</b>
14:1
22:2
37:3</p>
<hr>
<section>
</h2>Solution</h2>
<?php
$numbers = array(5, 14, 22, 37, 22, 37);
sort($numbers);

$arrlength = count($numbers);
if (!$arrlength)
	{
		echo "No Sorthing";
	}
	echo"<h4>Sorted Array<?h4> ";
	echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
	
   echo $numbers[$x];
    echo "<br>";
}
echo"<hr>";
echo "Final Solution";
echo "<br>";
$solution = print_r(array_count_values($numbers));
?>
</section>
<div class="footer"style="background-color:#E9E9E9;color:#000000">
<p>THANK YOU FOR THE OPPORTUNITY.</p>
</div>
</body>
</html>