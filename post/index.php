<?php
    include_once "../others/header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="text-align: center;" action="post.php">
        <br>
        <div id="yourBtn" onclick="getFile()">click to upload a file</div>
        <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onchange="sub(this)" /></div>
        <br><br>
        <input type="text" name="title" id="" placeholder="Titulo">
        <br><br>
        <textarea name="text" id="" cols="30" rows="10" placeholder="Descripción"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
<script type="text/javascript">
    function getFile() {
        document.getElementById("upfile").click();
        }

        function sub(obj) {
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
        document.myForm.submit();
        event.preventDefault();
        }
</script>
<style>
#yourBtn {
  color: #ffff;
  position: relative;
  top: 150px;
  font-family: calibri;
  width: 150px;
  padding: 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border: 1px dashed #262626;
  text-align: center;
  background-color: #616161;
  cursor: pointer;
}
</style>
</html>