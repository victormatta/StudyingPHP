<?php

$validations = [];

if (count($_POST) > 0) {

    if ($_POST["name"] === "") {
        $validations[] = "Write your name, pls.";
    }

    if ($_POST["email"] === "") {
        $validations[] = "Write your email, pls";
    }

    if ($_POST["password"] === "") {
        $validations[] = "Write your password, pls";
    }

    if ($_POST["password"] != $_POST["confirmation"]) {
        $validations[] = "The passwords need to be the same!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>
</head>

<body>
    <h1>My WebSite</h1>

    <?php if (count($validations)): ?>
        <ul>
            <?php foreach ($validations as $validation): ?>
                <li>
                    <?= $validation ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>

    <form action="index.php" method="post">
        <div>
            <input type="text" name="name" placeholder="Type your name">
        </div>

        <div>
            <input type="text" name="email" placeholder="Type your email">
        </div>

        <div>
            <input type="password" name="password" placeholder="Type your password">
        </div>

        <div>
            <input type="password" name="confirmation" placeholder="Confirm your password">
        </div>

        <div>
            <button type="submit" value="send">Send</button>
        </div>
    </form>
</body>

</html>