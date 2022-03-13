<?php
    include_once "../others/header.php"
?>
<?php
if(isset($_SESSION['user'])) {
    echo "<p>Iniciado como: " . $_SESSION['user'] . "<a href='logout.php'> Cerrar sesión</a></p>";
}
?>
<body class="login">
<br>
<h2>Inicio de sesión</h2>
<div class="login">
<br>
    <form action="" method="POST" class="login">
        <input type="text" name="username" placeholder="Nombre de usuario" id=""><br>
        <input type="password" name="password" placeholder="Contraseña" id=""><br>
        <input type="submit" value="Iniciar sesión">
        <p>No tienes cuenta? <a href="register.php">Registrar</a></p>
    </form>
</div>
<?php
    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        include_once "config.php";
        $sql = "SELECT username, password FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($password == $row["password"]){
                echo "<p>Éxito!</p>";
                $_SESSION['user'] = $username;
                echo $_SESSION['user'];
                echo '<meta http-equiv="refresh" content="0; URL=mailconfirm.php">';
            }else{
                echo "<p>Contraseña incorrecta (Error 002)<br>Has olvidado tu contraseña? <a href='mailto:carlo.stich@institut22.cat'>Restabelecer contaseña</a></p>";
            }
        }
        } else {
        echo "<p>Usuario no encontrado (Error 001)</p>";
        }
        $conn->close();
    }
?>
</body>