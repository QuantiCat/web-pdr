<?php
    include_once "../others/header.php"
?>
<?php
    $error = "";
        if($_POST){
        $number = $_POST['number'];
        if($number == 123456){
            echo '<meta http-equiv="refresh" content="0; URL=../">';
        }else{
            $error = "<br><h2>Codi incorrecte</h2>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma el teu mail</title>
</head>
<body>
    <div class="login">
        <form method="POST" action="">
            <br><br><br>
            <h2>Introdueix el codi enviat al teu correu</h2>
            <br>
            <input type="text" id="username" name="number" maxlength="6">
            <br>
            <?php
                echo $error;
            ?>
            <br>
            <input type="submit" value="Confirmar">
        </form>
    </div>
</body>
</html>