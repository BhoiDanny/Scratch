<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temperature</title>
</head>
<body>
    <form action="temperature-processor.php" method="post">
        <input type="number" name="temperature" placeholder="Enter Temperature">
        <label>
            C&deg; <input type="radio" name="mode" value="C">
        </label>
        <label>
            F&deg; <input type="radio" name="mode" value="F">
        </label>
        <select name="accuracy">
            <option value="0">Whole Number</option>
            <option value="1">1 decimal place</option>
            <option value="2">2 decimal place</option>
            <option value="3">3 decimal place</option>
        </select>

        <input type="submit" name="temp" value="Convert">
    </form>
</body>
</html>