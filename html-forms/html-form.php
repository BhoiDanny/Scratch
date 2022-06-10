<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html-Form</title>
</head>
<body>
<form action="html-form-processor.php" method="post">
    <label>
        <input type="text" name="surname" placeholder="Type your Surname">
    </label>
    <label>
       Male <input type="radio" name="gender" value="male">
    </label>
    <label>
        Female <input type="radio" name="gender" value="female">
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>
