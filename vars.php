<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// try some numeric variables
$x = 20;
$y = 10;
$z = $x + $y;

echo $z;

// try some string variables
$a = "Some";
$b = "One";
$c = $a . $b;

echo $c;

echo "<h1>This is a concatenated string $c</h1>";
echo '<h1>This is a concatenated string ' . $c . '</h1>';
?>

<h1>This is a concatenated string <?php echo $c; ?></h1>


</body>
</html>
