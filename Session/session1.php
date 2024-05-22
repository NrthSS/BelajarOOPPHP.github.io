<?php 

// Start The session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    // Set The variables 
    $_SESSION['favcolor'] = "Green";
    $_SESSION['favanimal'] = "Cat";
    echo "Session variable are set.";
    ?>

</body>
</html>