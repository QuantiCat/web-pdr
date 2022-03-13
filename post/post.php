<?php
    include_once "../others/header.php"
?>
<?php
if(isset($_POST['cover_up']))
    {

    $imgFile = $_FILES['coverimg']['name'];
    $tmp_dir = $_FILES['coverimg']['tmp_name'];
    $imgSize = $_FILES['coverimg']['size'];
    $FileName = $_POST['name'];

    if(!empty($imgFile))
        {

        $upload_dir = '../img/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        // rename uploading image --> rand(1000,1000000).".".
        $coverpic = rand(1000,1000000).".". $imgExt; 
        $imgFile = $coverpic;
        // allow valid image file formats
        if(in_array($imgExt, $valid_extensions))
            {
            // Check file size '5MB'
            if($imgSize < 5000000)
                {
                    move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
                    echo "Subido correctamente <br> ";
                    $handle = fopen ("files/" . $imgFile . ".php", "a");
                    fwrite($handle, '
<div class="gallery">
    <a target="_blank" href="../img/' . $imgFile . '">
        <img src="../img/' . $imgFile . '" alt="' . $FileName . '" width="600" height="400">
    </a>
    <div class="desc">' . $FileName . '</div>
</div>' . PHP_EOL);
                    fclose($handle);
                $handle = fopen ("../admin/adminfiles/" . $imgFile . ".php", "a");
                fwrite($handle, '
<div class="gallery">
<a target="_blank" href="../img/' . $imgFile . '">
    <img src="../img/' . $imgFile . '" alt="' . $FileName . '" width="600" height="400">
</a>
<form action="" method="POST">
        <input type="hidden" name="image" value="' . $imgFile . '">
        <input type="submit" value="delete">
</form>
<div class="desc">' . $FileName . '</div>
</div>' . PHP_EOL);
                fclose($handle);
            }
                else{
                    $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        }
    }

?>