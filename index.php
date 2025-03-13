<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- get variable is insecure because it's append the info in the site url that why we should use post -->
    <!-- <form action="index.php" method="get"> -->
    <form action="index.php" method="post">
        <label for="name">User Name:</label><br>
        <input type="text" name="name"><br>
        <label for="name">Password:</label><br>
        <input type="text" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>

<?php
// echo $_GET; // get all value of form
// echo $_GET["name"]; // get specific value of form 

echo $_POST["name"];
?>