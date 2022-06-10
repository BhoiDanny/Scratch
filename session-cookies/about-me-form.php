<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
</head>
<body>
    <form action="about-me-process.php" method="post">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="number" name="age" placeholder="Enter Age">
        <select name="favoriteColor">
            <option value="Red">Red</option>
            <option value="Yellow">Yellow</option>
            <option value="Indigo">Indigo</option>
        </select>
        <input type="submit" name="aboutMe" value="Submit">
    </form>
</body>
</html>
