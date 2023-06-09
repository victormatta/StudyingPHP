<?php

$filme = [
    "title" => "Pokemon",
    "sinopse" => "Ash catch Pikachu",
    "year" => 2023,
    "hours" => [
        "16:00",
        "20:00",
        "22:00"
    ]
];

$jsonstr = json_encode($filme);

// echo $jsonstr;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="json/script.js"></script>
    <script src="code.jquery.com_jquery-3.7.0.min"></script>
</head>

<body>
    <h1>AJAX with PHP</h1>
    <form action="index.php" method="post">
        <div class="name">
            <p>Full Name</p>
            <input type="text" name="name" placeholder="Full Name">
        </div>

        <div class="email">
            <p>Email</p>
            <input type="text" name="email" placeholder="Main Email">
        </div>

        <div class="number">
            <p>Phone Number</p>
            <input type="text" name="number" placeholder="(00) 00000-0000">
        </div>

        <div class="button">
            <button type="submit" value="send">Register</button>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolorum, saepe perferendis molestiae
                voluptatum a! Nisi ad omnis adipisci exercitationem officiis, voluptatem aspernatur reprehenderit
                voluptate asperiores incidunt enim facere laboriosam.</p>
        </div>
    </form>
</body>

</html>

<style>
    .body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    h1 {
        margin-left: 100px;
    }

    p {
        font-weight: bold;
    }

    .button button {
        background-color: #0088ff;
        color: #fff;
        width: 95px;
        height: 35px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        margin-left: 100px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .name {
        display: flex;
        flex-direction: column;
        margin-left: 100px;
        margin-right: 100px;
    }

    .name input {
        width: 100%;
        height: 35px;
        border-radius: 5px;
        padding: 5px;
        font-weight: bold;
    }

    .email {
        display: flex;
        flex-direction: column;
        margin-left: 100px;
        margin-right: 100px;
    }

    .email input {
        width: 100%;
        height: 35px;
        border-radius: 5px;
        padding: 5px;
        font-weight: bold
    }

    .number {
        display: flex;
        flex-direction: column;
        margin-left: 100px;
        margin-right: 100px;

    }

    .number input {
        width: 100%;
        height: 35px;
        margin-bottom: 50px;
        border-radius: 5px;
        padding: 5px;
        font-weight: bold
    }
</style>