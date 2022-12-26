<!DOCTYPE html>
<html>
<head>
<title>High Temperatures Array</title>
</head>
<body bgcolor="blue">
<h2>High Temperatures for Spring Month</h2>
<?php
$highTemps = array(68, 70, 72, 58, 60, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

$count = count($highTemps);
$total = 0;
foreach ($highTemps as $h) {
$total += $h;
}
$avg = round($total / $count);
echo "<p>The average high temperature for the month was $avg &amp;deg;F.</p>\n";
rsort($highTemps);
$topTemps = array_slice($highTemps, 0, 5);
echo "<p>The warmest five high temperatures were: <br />\n";

foreach ($topTemps as $t) {
echo "$t &amp;deg;F <br/> \n";
}
echo "</p>";
?>
</body>
</html>