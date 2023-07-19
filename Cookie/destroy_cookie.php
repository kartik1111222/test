<?php
setcookie("Test_Item", "Car", time() + 1 * 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
     setcookie("Test_Item", "", time() - 60);
    echo 'cookie destroy succcessfully!'
    ?>

    
</body>
</html>