<?php
$eng = false;
if($_GET['lang'] == "eng"){$eng = true;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="cv.css" type="text/css" media="screen" />  


<title>
   <?php if($eng){ ?>
    Federico Donner CV | Education 
    <?php }else{ ?>
    Federico Donner CV | Educación 
    <?php } ?>
    </title>
</head>
<body>
<div class="seccionWrapper">
<div class="banda" style="background-color: #47487f;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="bottom: 18px;" src="images/imagen2.jpg" />
    <div class="titulo" style="color: #47487f;">
 <?php if($eng){ ?>
    Education
    <?php }else{ ?>
    Educación
    <?php } ?>
  </div>
    <div class="text">
      <?php if($eng){ ?>
      Below you will find certificates and diplomas for a few of the courses I took. You can also find my grades for engineering and the technical degree on sound design. <br/><br/>
      Click on any of the thumbnails to see them full size.
    <?php }else{ ?>
      Debajo podrán encontrar los certificados y diplomas de algunos de los cursos que tomé. También pueden encontrar los resultados de los dictados de las carreras de ingeniería y diseño de sonido. </br></br>
      Pueden clickear en las imágenes para varlos en tamaño completo.
    <?php } ?>

<br/><br/>
     <table>
     <tr height="400">
       <td width="300" align="center"><a href="certificados/DiplomaIngenieria.jpg" target="_blank"><img class="diploma" src="certificados/DiplomaIngenieria.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/DiplomaTecnicoSonido.jpg" target="_blank"><img class="diploma" src="certificados/DiplomaTecnicoSonido.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center"> 
 <?php if($eng){ ?>
    Electronical Engineering
    <?php }else{ ?>
    Ingeniería en electrónica
    <?php } ?>
    </td>
     	<td align="center"> 
 <?php if($eng){ ?>
    Sound Design
    <?php }else{ ?>
    Diseño de sonido
    <?php } ?>
     </td>
     </tr>
      <tr height="400">
       <td width="300" align="center"><a href="certificados/OperadorPCAvanzado.jpg" target="_blank"><img class="diploma" src="certificados/OperadorPCAvanzado.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/OperadorPCAvanzadoExcelencia.jpg" target="_blank"><img class="diploma" src="certificados/OperadorPCAvanzadoExcelencia.jpg" width="250"/></a></td>
     </tr>
       <tr>
     	<td align="center"> 
         <?php if($eng){ ?>
    Advanced PC
    <?php }else{ ?>
    PC avanzado
    <?php } ?> </td>
     	<td align="center"> 
 <?php if($eng){ ?>
    Excelence in advanced PC
    <?php }else{ ?>
    Carta de exelencia en PC avanzado
    <?php } ?>
     </td>
     </tr>
      <tr height="300">
       <td width="300" align="center"><a href="certificados/DesemEmprendedores.jpg" target="_blank"><img class="diploma" src="certificados/DesemEmprendedores.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/LaZapadaSonido.jpg" target="_blank"><img class="diploma" src="certificados/LaZapadaSonido.jpg" width="250"/></a></td>
     </tr>
      <tr>
     	<td align="center"> 
         <?php if($eng){ ?>
    DESEM Young Entrepreneurs
    <?php }else{ ?>
    Jóvenes emprendedores DESEM
    <?php } ?>
     </td>
     	<td align="center"> 
 <?php if($eng){ ?>
    Sound course
    <?php }else{ ?>
    Curso de sonido
    <?php } ?>
     </td>
     </tr>
      <tr height="300">
       <td width="300" align="center"><a href="certificados/TecsonMastering.jpg" target="_blank"><img class="diploma" src="certificados/TecsonMastering.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center"> Mastering </td>
     </tr>
     <tr height="400">
       <td width="300" align="center"><a href="certificados/EscolaridadIngHoja1.jpg" target="_blank"><img class="diploma" src="certificados/EscolaridadIngHoja1.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/EscolaridadIngHoja2.jpg" target="_blank"><img class="diploma" src="certificados/EscolaridadIngHoja2.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center"> 
 <?php if($eng){ ?>
    Engineering grades
    <?php }else{ ?>
    Resultados de cursos, ingeniería
    <?php } ?>
        </td>
     	<td align="center"> 
       <?php if($eng){ ?>
    Engineering grades
    <?php }else{ ?>
    Resultados de cursos, ingeniería
    <?php } ?> 
  </td>
     </tr>
      <tr height="400">
       <td width="300" align="center"><a href="certificados/EscolaridadIngHoja3.jpg" target="_blank"><img class="diploma" src="certificados/EscolaridadIngHoja3.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center"> 
         <?php if($eng){ ?>
    Engineering grades
    <?php }else{ ?>
    Resultados de cursos, ingeniería
    <?php } ?>
  </td>
     </tr>
      <tr height="400">
       <td width="300" align="center"><a href="certificados/EscolaridadSonidoHoja1.jpg" target="_blank"><img class="diploma" src="certificados/EscolaridadSonidoHoja1.jpg" width="250"/></a></td>
       <td width="300" align="center"><a href="certificados/EscolaridadSonidoHoja2.jpg" target="_blank"><img class="diploma" src="certificados/EscolaridadSonidoHoja2.jpg" width="250"/></a></td>
     </tr>
     <tr>
     	<td align="center">  <?php if($eng){ ?>
    Sound design grades
    <?php }else{ ?>
    Resultados de cursos, sonido
    <?php } ?>
     </td>
     	<td align="center"> 
         <?php if($eng){ ?>
    Sound design grades
    <?php }else{ ?>
    Resultados de cursos, sonido
    <?php } ?>
     </td>
     </tr>
   </table>
    </div>
  </div>
</div>
</body>
</html>