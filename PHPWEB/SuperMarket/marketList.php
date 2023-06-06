<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market List</title>
</head>

<body>
    <h1>Super Market</h1>

    <form action="sm.php" method="post">
        <div>
            <input type="checkbox" name="options[]" value="apple"> Apple
        </div>
        <div>
            <input type="checkbox" name="options[]" value="tomato"> Tomato
        </div>
        <div>
            <input type="checkbox" name="options[]" value="stramberry"> Stramberry
        </div>
        <div>
            <input type="checkbox" name="options[]" value="orange"> Orange
        </div>
        <div>
            <input type="checkbox" name="options[]" value="rice"> Rice
        </div>
        <div>
            <input type="checkbox" name="options[]" value="beans"> Beans
        </div>
        <div>
            <input type="checkbox" name="options[]" value="meat"> Meat
        </div>
        <div>
            <input type="checkbox" name="options[]" value="chicken"> Chicken
        </div>
        <div>
            <input type="checkbox" name="options[]" value="water"> Water
        </div>
        <div>
            <input type="checkbox" name="options[]" value="juice"> Juice
        </div>
        <div>
            <input type="checkbox" name="options[]" value="refrigerent"> Refrigerent
        </div>

        <div>
            <button type="submit" value="send">Send</button>
        </div>
    </form>
</body>

</html>