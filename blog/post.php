<?php
    include_once "../others/header.php";
    if (isset($_POST["title"])){
        if (isset($_SESSION['user'])){
            $nombre_fichero = "last-post-id.txt";
            $gestor = fopen($nombre_fichero, "w");
            $contenido = file_get_contents($nombre_fichero);
            $currentId = (int)$contenido + 1;
            $author = $_SESSION['user'];
            $title = $_POST["title"];
            $text = $_POST["text"];
            fwrite($gestor, $currentId);
            fclose($gestor);
            $file = fopen("posts/" . $contenido . "-" . $title . ".html", "w");
            fwrite($file, "<div class='post'>\n<h3>" . $title . "</h3>\n<p>" . $text . "</p>\n - <b>" . $author . "</b>\n</div>");
            fclose($file);
        }else{
            echo "<script type='text/javascript'>
            $(window).on('load', function() {
                $('#exampleModal').modal('show');
            });
            </script>";
        }
    }
?>
<?php
    if (!isset($_SESSION['user'])){
        echo "<script type='text/javascript'>
        $(window).on('load', function() {
            $('#exampleModal').modal('show');
        });
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error al pujar el blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="modal-text">Tens que accedir per pujar un blog</p>
        <br>
        <?php
        if (isset ($_POST["text"])){
            echo "Copia el text per no tornar a començar: <br>";
            echo $_POST["text"];
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
        <a href="../auth/login.php"><button type="button" class="btn btn-primary">Accedir</button></a>
      </div>
    </div>
  </div>
</div>
  <div class="sidebar">
    <a class="post-button" href="index.php">Blogs</a>
    <form class="blogpost" action="" method="POST">
        <br><br><br>
        <p>Titol</p>
        <input type="text" name="title" id="" placeholder="Titol">
        <br><br>
        <p>Text</p>
        <textarea name="text" id="" cols="100" rows="7" placeholder="Text"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>