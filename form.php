<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bio.php" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="email">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="age">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="password">
        </div>
        <input type="submit" value="Submit Data" name="submitBtn">
    </form>
</body>
</html>