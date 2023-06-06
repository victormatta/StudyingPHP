<?php

if (isset($_POST["options"])) {
    $options = $_POST["options"];

    if (isset($options[0])) {
        $value1 = $options[0];
    }
    if (isset($options[1])) {
        $value2 = $options[1];
    }
    if (isset($options[2])) {
        $value3 = $options[2];
    }
    if (isset($options[3])) {
        $value4 = $options[3];
    }
    if (isset($options[4])) {
        $value5 = $options[4];
    }
    if (isset($options[5])) {
        $value6 = $options[5];
    }
    if (isset($options[6])) {
        $value7 = $options[6];
    }
    if (isset($options[7])) {
        $value8 = $options[7];
    }
    if (isset($options[8])) {
        $value9 = $options[8];
    }
    if (isset($options[9])) {
        $value10 = $options[9];
    }
    if (isset($options[10])) {
        $value11 = $options[10];
    }
}

?>

<h1> Your list:</h1>
<br>

<?php if (isset($value1)): ?>
    <h2>
        <?= $value1 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value2)): ?>
    <h2>
        <?= $value2 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value3)): ?>
    <h2>
        <?= $value3 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value4)): ?>
    <h2>
        <?= $value4 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value5)): ?>
    <h2>
        <?= $value5 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value6)): ?>
    <h2>
        <?= $value6 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value7)): ?>
    <h2>
        <?= $value7 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value8)): ?>
    <h2>
        <?= $value8 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value9)): ?>
    <h2>
        <?= $value9 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value10)): ?>
    <h2>
        <?= $value10 ?>
    </h2>
    <br>
<?php endif; ?>
<?php if (isset($value11)): ?>
    <h2>
        <?= $value11 ?>
    </h2>
    <br>
<?php endif; ?>