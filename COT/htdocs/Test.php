<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
     function calAdd($num1,$num2){
        $value=$num1 + $num2;
        return $value;
     }
     echo calAdd(3,8);
    ?>
    
</body>
</html>