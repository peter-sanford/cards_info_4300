<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peter's Blackjack</title>
</head>
<body>
    <form action="drawtwo.php" method="get">
        Draw two cards <input type="submit" value="Draw">
   </form>
</body>
</html>