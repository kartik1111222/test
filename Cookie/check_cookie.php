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
      if (isset($_COOKIE["Test_Item"]))
      {
          echo "Test Item is a  " . $_COOKIE["Test_Item"];
      }
      else
      {
          echo "No items.";
      }
    ?>
    
</body>
</html>