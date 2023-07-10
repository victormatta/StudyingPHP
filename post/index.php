<?php

$arrayName = ["Victor", "Rafaella", "Roberto", "Janaína", "Maressa", "Juvendinho", "Luis Roberto"];

$name = filter_input(INPUT_POST, "txtName", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_STRING);
// $employedCode = filter_input(INPUT_POST, "employed", FILTER_SANITIZE_NUMBER_INT);
$employed = "";

// if ($employedCode) {
//     $employed = $arrayName[$employedCode];
// }

// if (isset($_POST["txtName"])) {
//     $name = $_POST["txtName"];
// }

// if (isset($_POST["txtEmail"])) {
//     $email = $_POST["txtEmail"];
// }

if (isset($_POST["employed"])) {
    $employed = $arrayName[$_POST["employed"]];
}


if (!empty($email)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // O e-mail é válido
        echo "Valid e-mail: " . $email;
    } else {
        // O e-mail é inválido
        echo "Invalid e-mail.";
    }
} else {
    // O campo de e-mail está vazio
    echo "Empty e-mail.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
        }

        input,
        select {
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>Name: <input type="text" name="txtName"></li>
            <li>Email: <input type="text" name="txtEmail"></li>
            <li>Employed:
                <select name="employed">
                    <option value="">Select</option>
                    <?php
                    for ($i = 0; $i < count($arrayName); $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $arrayName[$i]; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Sign UP"></li>
        </ul>
    </form>

    <br>
    <hr> <br>
    <p>Name:
        <?= $name ?>
    </p>
    <p>Email:
        <?= $email ?>
    </p>
    <p>Employed:
        <?= $employed ?>
    </p>

</body>

</html>