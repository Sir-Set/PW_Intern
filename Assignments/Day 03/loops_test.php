<!DOCTYPE html>
<html>
<head>
    <title>PHP Loops</title>
</head>
<body>

<h2>For Loop</h2>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>

<h2>While Loop</h2>

<?php
$number = 1;

while ($number <= 5) {
    echo $number . "<br>";
    $number++;
}
?>

<h2>Foreach Loop</h2>

<?php
$names = ["Tashu", "Riya", "Aman"];

foreach ($names as $name) {
    echo $name . "<br>";
}
?>

</body>
</html>
