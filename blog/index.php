<?php
    include_once "../others/header.php";
?>
<html>
    <div class="sidebar">
    <a href="post.php" class="post-button">Pujar un post</a>
    <br><br><br>
</html>
<?php
    foreach (glob("posts/*.html") as $filename)
    {
        include $filename;
        echo "<br>";
    }
?>
</div>