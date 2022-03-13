<?php
        include_once "../../header.php";
?>
<script type="text/javascript">
var segundos = 0
var minutos = 0
    setInterval(function(){
        segundos = segundos + 1;
        if(segundos >= 60){
            segundos = 0
            minutos = minutos + 1
            if(minutos>=10){
                document.getElementById("p1").innerHTML = (minutos + ":" + segundos + "0");
            }else{
                document.getElementById("p1").innerHTML = ("0" + minutos + ":0" + segundos);
            }
        }else{
            if(minutos>=10){
                if(segundos>=10){
                    document.getElementById("p1").innerHTML = (minutos + ":" + segundos);
                }else{
                    document.getElementById("p1").innerHTML = (minutos + ":0" + segundos);
                }
            }else{
                if(segundos>=10){
                    document.getElementById("p1").innerHTML = ("0" + minutos + ":" + segundos);
                }else{
                    document.getElementById("p1").innerHTML = ("0" + minutos + ":0" + segundos);
                }
            }
        }
    }, 1000)
    
        function reset(){
        segundos = 0
        minutos = 0
        document.getElementById("p1").innerHTML = "00:00";
    }
    </script>
<body style="text-align: center; font-size: large;">
    <p style="font-size: 8em; text-align: center;" id="p1">00:00</p>
    <button onclick="reset()">Reiniciar</button>
</body>