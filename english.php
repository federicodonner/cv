<?php
$eng = false;
$link = "";
if($_GET['lang'] == "eng"){$eng = true; $link = "?lang=eng";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="cv.css" type="text/css" media="screen" />  


<title>
   <?php if($eng){ ?>
    Federico Donner CV | English 
    <?php }else{ ?>
    Federico Donner CV | Inglés 
    <?php } ?></title>
</head>
<body>
<div class="seccionWrapper">
<div class="banda" style="background-color: #ee6b4c;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="bottom: 14px;" src="images/imagen3.jpg" />
    <div class="titulo" style="color: #ee6b4c;">
 <?php if($eng){ ?>
  English
    <?php }else{ ?>
    Inglés
    <?php } ?>
  </div>
    <div class="text">
    <?php if($eng){ ?>
 Below you will find diplomas for the english courses I took.<br/><br/>
      Click on any of the thumbnails to see them full size.
    <?php }else{ ?>
   Debajo pueden encontrar los diplomas de los cursos de inglés que he tomado.<br/><br/>
   Pueden clickear en las imágenes para verlos en tamaño completo.
    <?php } ?>

      
<br/><br/>
     <table>
     <tr height="400">
       <td width="300" align="center"><a href="certificados/CambridgeFirstCertificate.jpg" target="_blank"><img class="diploma" src="certificados/CambridgeFirstCertificate.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/CambridgeProficiency.jpg" target="_blank"><img class="diploma" src="certificados/CambridgeProficiency.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center"> Cambridge First Certificate</td>
     	<td align="center"> Cambridge Proficiency </td>
     </tr>
      <tr height="300">
       <td width="300" align="center"><a href="certificados/MichiganProficiency.jpg" target="_blank"><img class="diploma" src="certificados/MichiganProficiency.jpg" width="250"/></a></td>
     </tr>
       <tr>
     	<td align="center"> Michigan Proficiency </td>
     </tr>
    
 </table>
    </div>
  </div>
</div>
</body>
</html>