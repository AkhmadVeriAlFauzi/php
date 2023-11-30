<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="outputpost.php" method="post">
    Name: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    Jenis Kelamin: <br>
    male : <input type="radio" name="gender" value="male"> 
    female : <input type="radio" name="gender" value="female"> <br>

    <?php 
    $a = 4;
    $b = 19;
    
    echo $a + $b;
    ?>
    <input type="submit">
    </form>


</body>
</html>