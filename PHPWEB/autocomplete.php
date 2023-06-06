<?php

$data = [
    "name" => "Victor",
    "password" => "1234",
    "job" => "Software Developer"
];

if (isset($data)) {
    $name = $data["name"];
    $password = $data["password"];
    $job = $data["job"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoComplete Request</title>
</head>

<body>
    <form action="autocomplete.php" method="post">
        <div>
            <input type="text" name="name" placeholder="name" value=<?= $name ?> </div>

            <div>
                <input type="password" name="password" placeholder="password" value=<?= $password ?>>
            </div>

            <div>
                <input type="text" name="job" placeholder="job" value=<?= $job ?>>
            </div>

            <div>
                <button type="submit" value="send">Send</button>
            </div>
    </form>
</body>

</html>