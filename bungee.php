<?php
$eng = false;
if($_GET['lang'] == "eng"){$eng = true;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="cv.css" type="text/css" media="screen" />  


<title>Federico Donner CV | Bungee </title>
</head>
<body>
<div class="seccionWrapper">
<div class="banda" style="background-color: black;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="bottom:  28px;" src="images/imagen10.jpg" />
    <div class="titulo" style="color: black;">Bungee</div>
    <div class="text">
    	   <?php if($eng){ ?>
    This is some of the work I've done with Bungee. The ammount of material we produced is enormous, so this is just a small sample. 
<br/><br/>
Bungee is:<br/>
Álvaro Rabaquino: lead singer, bass<br/>
Federico Rabaquino: drums, backing vocals<br/>
Diego Sansonetti: guitar, backing vocals
<br/><br/>
You can find their music in Spotify.

<br/><br/>
This is our only full fledged music video, "Descarrilado". I wrote the script, directed and edited it, including the visual effects. You can see me as one of the TV faces next to the green car.
    <?php }else{ ?>
    Esto es algo del material que generé para Bungee. La cantidad producida es realmente enorme, esta es sólo una pequeña muestra.
<br/><br/>
Bungee es:<br/>
Álvaro Rabaquino: cantante principal, bajo<br/>
Federico Rabaquino: batería, coros<br/>
Diego Sansonetti: guitarra, coros
<br/><br/>
Pueden encontrar el último disco en Spotify.
<br/><br/>
Esta primera pieza es nuestro único videoclip, "Descarrilado". Yo escribí el guión, dirigí y edité el video, incluso los efectos especiales. Pueden verme además como uno de los cabeza de TV, al lado del auto verde.
    <?php } ?>

<br/><br/>
<iframe width="640" height="360" src="https://www.youtube.com/embed/Av7sdCvQgLk?rel=0" frameborder="0" allowfullscreen></iframe>
<br/><br/>
<br/><br/>
   <?php if($eng){ ?>
    I edited and mixed most of the videos we produced.
    <?php }else{ ?>
    Edité y mezcle la mayoría de los videos que produjimos.
    <?php } ?>

<br/><br/>
<iframe width="640" height="480" src="https://www.youtube.com/embed/DiFDsREihZ8?rel=0" frameborder="0" allowfullscreen></iframe>
<iframe width="640" height="360" src="https://www.youtube.com/embed/K5avP69dGZY?rel=0" frameborder="0" allowfullscreen></iframe>
<iframe width="640" height="480" src="https://www.youtube.com/embed/uZALkBFw4qc?rel=0" frameborder="0" allowfullscreen></iframe>
<iframe width="640" height="360" src="https://www.youtube.com/embed/7egL7DMdxxA?rel=0" frameborder="0" allowfullscreen></iframe>
<br/><br/>
<br/><br/>

   <?php if($eng){ ?>
    I also did all the graphic material for the band, for print and web. I designed both versions of the art for the last record (independent and signed).
    <?php }else{ ?>
    También edité todo el material gráfico para la banda, ya sea para imprenta o web. Diseñé ambas versiones del arte del último disco (editado independiente y a través de un sello).
    <?php } ?>

<br/><br/>
<img src="images/bungee1.jpg" />
<img src="images/bungee2.jpg" />
<img src="images/bungee3.jpg" />
<img src="images/bungee4.jpg" />
<img src="images/bungee5.jpg" />
<img src="images/bungee6.jpg" />
<br/><br/>
<br/><br/>
<br/><br/>


    </div>
  </div>
</div>
</body>
</html>