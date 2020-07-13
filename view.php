<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Take A Look!!!!!!! </title>
</head>

<body>
    <h3> lab 8! </h3>
    <?php
    if (isset($_SESSION['name'])) {
        echo "<p> Hi there " . $_SESSION['name'] . "!";
    } else {
        echo "<p> Hi there! ";
    }
    ?>
    <a href="destroy.php"> Forget Me ! </a>
</body>

</html>
