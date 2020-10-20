<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Kamil Agdere | MD2Ba</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Kamil Agdere">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    
    <body>
    <form name="login" action="" method="POST">
    <input type="text" name="email" value="example@mail.com">
    <input type="password" name="password" value="password">
    <input type="submit" name="submit" value=" login ">
    </form>
    <?php 
    if(isset($_POST['submit'])) {
        echo "-----------Backend----------";
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "<br>e-mail: $email";
        echo "<br>password: $password";
    }
    ?>

    </body>
    <!-- <script src="script.js"></script> -->
</html>