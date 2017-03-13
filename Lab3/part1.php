<?php 
session_start();
if(isset($_SESSION['views']))
	$_SESSION['views'] = $_SESSION['views'] + 1;
else
	$_SESSION['views'] = 1;
print "views = ". $_SESSION['views'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CPS530 Lab03 Part1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" title="Bootstrap" charset="utf-8">
</head>
<body>
<form method="get" action="http://webdev.scs.ryerson.ca:8080/jkhudada/part2.asp">
            <button type="submit">part2</button>
        </form>
<h2>Multiplication table between 3x3 up to 12x12</h2>
<form action="part1.php" method="post">
	<label for="quantity">Please enter a number that you wish to multiple (3-12)</label>
	<input name="tSize" type="text" type="text">
	<input type="submit" name="submit">
</form>

<?php 
session_start();
$tb_len = $_POST['tSize'];
if($tb_len < 3)
	$tb_len = 3;
if($tb_len > 12)
	$tb_len = 12;
print "<table border=\"1\" align=\"left\">";
print "<h2 align=\"left\">Multiplication Table</h2>";
print "<tr>";
print "<td>";
print "*";
print "</td>";
for($i = 1; $i <= $tb_len; $i+=1){
	print "<td>";
	print $i;
	print "</td>";
}

for($var= 1; $var <= $tb_len; $var +=1)
{
	print "<tr>";
	print "<td>";
	print $var;
	print "</td>";
	for($i = 1 ; $i <= $tb_len; $i +=1)
	{
		print "<td>";
		print $var * $i."</br>";
		print "</td>";
	}
	print "</tr>";
	$lowerLimit +=1;
}
print "</table>"
 ?>
</body>
</html>

