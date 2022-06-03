<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST['user'];
    $y = $_POST['age'];
    if (empty($x)) {
        print "What is your username? <br>";
    } else {
        print "Hello $x <br>";
    }
    if (empty($y)) {
        print "How old are you? <br>";
    } else {
        print "Your age is $y <br>";
    }
}


?>


</body>
</html>
