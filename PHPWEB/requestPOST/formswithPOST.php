<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test forms with POST method</title>
</head>

<body>
    <form action="cadaster.php" method="post">
        <div>
            <input type="text" name="car" placeholder="Car name">
        </div>

        <div>
            <input type="text" name="money" placeholder="Money car">
        </div>

        <div>
            <input type="checkbox" name="option[]" value="teto solar"> Teto Solar
        </div>
        <div>
            <input type="checkbox" name="option[]" value="blindado"> Blindado
        </div>
        <div>
            <input type="checkbox" name="option[]" value="pelicula"> Película
        </div>

        <div>
            <button type="submit" value="send">Send</button>
        </div>
    </form>
</body>

</html>