<html>
<head>

<script type="text/javascript" src="TypingText.js">

</script>


<script type="text/javascript">
function unhide() {
    var el = document.getElementById('info'),
        opac = 0,
        interval = setInterval(function () {
            opac += 0.1;
            if (opac >= 1) {
                clearInterval(interval);
                opac = 1;
            }
            el.style.opacity = opac;
        }, 100);
    el.style.opacity = 0;
    el.style.visibility = 'visible';
}
function changetune(){
document.getElementById('ShowButton').value= "Show Data";
}


</script>
</head>
<body>
<div>

<p id="intro">Residents of Earth, prepare for transmission:   <br>      Uhh.......... Hey!  <br>  -  -  -  -  -.  <br>  Transmission complete.  <br> Please accept this data as way of apology. </p>

<script type="text/javascript">


new TypingText(document.getElementById("intro"), 100, function(i){ var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length % ar.length]; });

//Type out examples:
TypingText.runAll();

setTimeout(unhide, 16000);
 


</script>
</div>

<div class="info1" id="info" style="visibility: hidden">
 
<?php
    phpinfo();

?>
</div>
</body>
</html>