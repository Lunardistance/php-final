<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile and Leaderboard</title>
</head>
<body>
    <h1>Your Profile</h1>
    <ul>
        <li><?=$userArray->username ?></li>
        <li><?=$userArray->chips ?></li>
    </ul>

    <a href = "index.php"><button value = "Play">Play!</button></a>
    <a href = "../logout.php"><button value = "Play">Logout</button></a>


</body>
</html>