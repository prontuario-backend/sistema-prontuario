<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset ($_POST["btn"])) {
        echo 'ok';
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" name="btn">teste</button>

    </form>


</body>

</html>