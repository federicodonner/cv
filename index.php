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


<title>Federico Donner CV</title>
</head>
<body>

<div class="seccionWrapper">
<div class="banda" style="background-color: #007892;"></div>
  <div class="sectionContent">
    <div class="titulo" style="color: #007892;">Curriculum vitae / Portfolio</div>
    <div class="text">
      <?php if($eng){ ?>
      Welcome to my online CV/Portfolio. <br/>
      <br/>

      Below you’ll find informaion on my education, work experience and activities. <br/><br/>
      In each section there are links to read and see more. Please take a few minutes to go through them, there is a lot more content.
<br/><br/>
      You can download a PDF version <a href="download.php?f=Federico_Donner_CV_ENG.pdf">here</a> but I recommend going through this webpage first.
      <?php }else{ ?>
      Bienvenidos a mi CV online / portfolio. <br/>
      <br/>
      Más abajo van a encontrar información acerca de mi educación, experiencia laboral y actividades.<br/><br/>
      En cada sección hay un link para leer y ver más. Por favor tómense unos minutos para recorrerlos, hay mucho más contenido disponible.<br/><br/>
      Pueden descargar una versión en PDF  <a href="download.php?f=Federico_Donner_CV.pdf">aquí</a> pero recomiendo primero recorrer esta página web.
      <?php } ?>

    </div>
    <div id="federicoDonner">Federico Donner</div>
  </div>
</div>

<br/>
<br/>
<br/>



<div class="seccionWrapper">
<div class="banda" style="background-color: #666666;"></div>

  <div class="sectionContent">
  <img class="imagen" style="bottom: 43px;" src="images/imagen1.jpg" />
    <div class="titulo" style="color: #666666;">
    <?php if($eng){ ?>
    Personal Details
    <?php }else{ ?>
    Datos personales
    <?php } ?>
    </div>
    <div class="fechas">  
    <?php if($eng){ ?>
      Name <br/>
      Birthdate <br/>
      Contact info <br/>
      <?php }else{ ?>
      Nombre <br/>
      Cumpleaños <br/>
      Contacto <br/>
      <?php } ?>

    </div>
    <div class="datos">
      Federico Donner Gonzalez <br/>
      13/03/1986 <br/>
      federico.donner@gmail.com <br/>
      +598 99 132 433 <br/>
      skype: federicodonner <br/>
    </div>
  </div>

</div>


<br/>
<br/>
<br/>
<br/>
<br/>

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
    <div class="fechas">
      2010 - 2015<br/>
      2004 - 2009<br/>
      2005 - 2008<br/>
      <?php if($eng){ ?>
      august 2006
      <?php }else{ ?>
      agosto 2006
      <?php } ?>
      <br/>
      2004<br/>
      2002<br/>
      2001<br/>
      1992 - 2003 

    </div>
    <div class="datos">
      <?php if($eng){ ?>
      Quality systems auditor, LSQA <br/>
      Electronic engineering, ORT University <br/>
      Bachelor in sound design, ORT University <br/>
      Mastering, TECSON, Argentina <br/>
      Sound equipment operation, La Zapada <br/>
      Advanced PC operator, Crandon Institute <br/>
      Young entrepreneurs program, DESEM <br/>
      School and high-school, Crandon Institute
      <?php }else{ ?>
      Auditor de sistemas de calidad, LSQA <br/>
      Ingeniería en electrónica, Universidad ORT </br>
      Técnico en diseño de sonido, Universidad ORT </br>
      Curso de mastering, TECSON, Argentina </br>
      Curso de sonido, La Zapada </br>
      Operador PC avanzado, Instituto Crandon <br/>
      Programa de jóvenes emprendedores, DESEM </br>
      Escuela y liceo, Instituto Crandon </br>
      <?php } ?>
    </div>
  <div class="link"  style="top: 60px; left: 350px;"><a href=<?php echo('"education.php'.$link.'"') ?> target="_blank">
  <?php if($eng){ ?>
  See certificates
  <?php }else{ ?>
  Ver certificados
  <?php } ?>
  </a></div>
  </div>
</div>


<br/>
<br/>
<br/>
<br/>



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
    <div class="fechas">
      2004<br/>
      <br/>
      2003<br/>
      <br/>
      2001
    </div>
    <div class="datos">
      <?php if($eng){ ?>
      Certificate of Proficiency in English, Cambridge <br/>
      <span class="indent">Passed with B</span><br/>
      Certificate of Proficiency in English, Michigan <br/>
      <br/>
      First Certificate in English, Cambridge <br/>
      <span class="indent">Passed with A</span>
      <?php }else{ ?>
      Certificate of Proficiency in English, Cambridge <br/>
      <span class="indent">Aprobado con B</span><br/>
      Certificate of Proficiency in English, Michigan <br/>
      <br/>
      First Certificate in English, Cambridge <br/>
      <span class="indent">Aprobado con A</span>
      <?php } ?>
    </div>
  <div class="link" style="top: 60px; left: 350px;"><a href=<?php echo('"english.php'.$link.'"') ?> target="_blank">
  <?php if($eng){ ?>
  See certificates
  <?php }else{ ?>
  Ver certificados
  <?php } ?>
  </a></div>
  </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>


<div class="seccionWrapper">
<div class="banda" style="background-color: #be112c;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="top: 5px;" src="images/imagen4.jpg" />
    <div class="titulo" style="color: #be112c;">
    <?php if($eng){ ?>
    Work Experience
    <?php }else{ ?>
    Experiencia laboral
    <?php } ?>
    </div>
    <div class="fechas">
      <?php if($eng){ ?>
2013 - today<br/>
      2010 - today<br/>
      2010 - 2015<br/>
      <br/>
      <br/>
      2010 - today<br/>
      <?php }else{ ?>
      2013 - hoy<br/>
      2010 - hoy<br/>
      2010 - 2015<br/>
      <br/>
      <br/>
      2010 - hoy<br/>
      <?php } ?>

      2007 - 2014<br/>
      2009 - 2010<br/>
       <br/>
       <br/>
      2009<br/>
      2007 - 2009<br/>
      2008 - 2009<br/>
       <br/>
      2005 - 2007<br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
      2007<br/>
      2006<br/>
       <br/>
       <br/>
      2005<br/>
      1999 - 2004
    </div>
    <div class="datos">
      
<?php if($eng){ ?>
   Professor, sound technology, ORT University <br/>
      Product certification auditor, LSQA <br/>
      Product certification manager, LSQA <br/>
      <span class="indent">Compliant with ISO/IEC 17065 </span><br/>
      Development of internal management tools, LSQA <br/>
      Level 3 Magic: the Gathering judge <br/>
      Technical and creative coordination and execution, Bungee <br/>
      Freelance web programming and design <br/>
      <span class="indent">varelaaudiovisuales.com - not online</span> <br/>
      <span class="indent">sofiadonner.com </span><br/>
      Sales department, web design, Varela Audiovisuales <br/>
      Audio and multimedia coordination, "Continuará” conventions <br/>
      Professor, robotics lab, ORT University <br/>
      <span class="indent"><a href="http://ort.edu.uy/fi/ingenieria/SubSitios/raes/" target="_blank">ort.edu.uy/fi/ingenieria/SubSitios/raes/ </a></span><br/>
      Sound and video editing projects for: <br/>
      <span class="indent">"Continuará" conventions </span><br/>
      <span class="indent">Improfit marketing agency </span></span><br/>
      <span class="indent">Reaching U  </span><br/>
      <span class="indent">Sociedad Uruguaya de Osteoporosis y Metabolismo Mineral </span><br/>
      <span class="indent">OEA, through 3DIP studios </span><br/>
      <span class="indent">Asociación Uruguaya de la Industria del Plástico </span><br/>
      Lights and sound operation, Christian Rocks <br/>
      Direct sound pickup, foley and music, "28" short film, ORT <br/>
      Foley and dialog sync, "El Pequeño Héroe", first season, MW Studios <br/>
      <span class="indent">Broadcast on national television</span> <br/>
      Live recording and mixing, post-production, Southern Cross Pipe Band <br/>
      Teacher's assistant, management simulation seminar, UCUDAL <br/>
  <?php }else{ ?>
      Docente, tecnología del sonido, Universidad ORT<br/>
      Auditor de certificación de productos, LSQA <br/>
      Gerente de certificación de productos, LSQA <br/>
      <span class="indent">Acreditado de acuerdo a la norma ISO/IEC 17065 </span><br/>
      Desarrollo de herramientas de gestión internas, LSQA <br/>
      Juez nivel 3 de Magic: the Gathering <br/>
      Coordinación técnica y creativa, Bungee <br/>
      Programación y diseño web freelance <br/>
      <span class="indent">varelaaudiovisuales.com - no online</span> <br/>
      <span class="indent">sofiadonner.com </span><br/>
      Departamento de ventas, diseño web, Varela Audiovisuales <br/>
      Coordinación de audio y multimedia, convenciones "Continuará" <br/>
      Docente, laboratorio de robótica, Universidad ORT <br/>
      <span class="indent"><a href="http://ort.edu.uy/fi/ingenieria/SubSitios/raes/" target="_blank">ort.edu.uy/fi/ingenieria/SubSitios/raes/ </a></span><br/>
      Edición de audio y video para: <br/>
      <span class="indent">convenciones "Continuará" </span><br/>
      <span class="indent">Agencia de marketin Improfit </span></span><br/>
      <span class="indent">Reaching U </span><br/>
      <span class="indent">Sociedad Uruguaya de Osteoporosis y Metabolismo Mineral </span><br/>
      <span class="indent">OEA, a través de 3DIP studios </span><br/>
      <span class="indent">Asociación Uruguaya de la Industria del Plástico </span><br/>
      Operación de luces y sonido, evento Christian Rocks <br/>
      Sonido directo, soley y música, corto "28", Universidad ORT <br/>
      Foley y sincronización de diálogo, "El Pequeño Héroe", MW Studios <br/>
      <span class="indent">Transmitido por televisión nacional</span> <br/>
      Grabación en vivo, mezcla y post-producción, Southern Cross Pipe Band <br/>
      Asistente de docente, seminario de simulación de gestión, UCUDAL <br/>
  <?php } ?>

    </div>
  <div class="link" style="top: 60px; left: 430px;"><a href=<?php echo('"work.php'.$link.'"') ?> target="_blanc">
<?php if($eng){ ?>
  See more
  <?php }else{ ?>
  Ver más
  <?php } ?>
</a></div>
  </div>
</div>


<br/>
<br/>
<br/>
<br/>




<div class="seccionWrapper">
<div class="bandaAncha" style="background-color: black; height: 370px;"></div>
  <div class="sectionContent">
  	<div class="titulo" style="color: black;">Bungee</div>
  	<img class="imagenFondo" style="top: 88px;" src="images/imagen5.jpg" />
    
    <div class="datosAncha" style="bottom: 240px;">
       <?php if($eng){ ?>
        Pop-rock band, formed by three musicians and myself. It was an interesting experiment since I was a band member and owner just like the musicians, but I didn't play any instrument. My role was defined by the negative, whatever the musicians didn't do, was my realm. 
<br/><br/>
      My main responsibilities were live shows, taking care of the technical aspects, coordinating with sound and ligths suppliers and mixing the shows live. We played small venues up to a show in a stadium, opening for an Argentinean band.
<br/><br/>
      I wrote, directed and edited our only music video, "Descarrilado", but also designed and edited a lot of promotional material in video and print form. 
      <br/><br/>
      I coded the webpages we had, first in flash using Flash ActionScript and then jQuery, PHP and a bit of mySQL.
<br/><br/>
      The band was dissolved in 2014.
    <?php }else{ ?>
       Banda de pop-rock conformada por tres músicos y yo. Fue un experimiento interesante ya que yo era un miembro pleno y dueño de la banda al igual que los músicos pero no tocaba ningún instrumento. Mi rol era definido por la negativa, lo que sea que los demás no hicieran me correspondía a mi.
<br/><br/>
      Mis responsabilidades principales eran los shows en vivo en los que me hacía cargo de los aspectos técnicos, coordinando con proveedores de sonido y luces y mezclando los shows en vivo. Tocamos en teatros de muchos tamaños, hasta un show en el estadio Centenario abriendo para una banda Argentina.
<br/><br/>
      Escribí, dirigí y edité nuestro único videoclip, "Descarrilado". También diseñé y edité todo el material promocional en video e imprenta. 
      <br/><br/>
      Programé las páginas web de la banda, al principio utilizando Flash ActionScript y luego jQuery, PHP y mySQL.
<br/><br/>
      La banda se disolvió en 2014.
    <?php } ?>
      <div class="link"  style="bottom: 10px; left: 350px; color: white;"><a href=<?php echo('"./bungee'.$link.'"') ?> target="_blanc" style="color: white;">
        <?php if($eng){ ?>
  See more
  <?php }else{ ?>
  Ver más
  <?php } ?>
</a></div>

    </div>
  </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<div class="seccionWrapper">
<div class="banda" style="background-color: #f6952e;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="bottom: 21px;" src="images/imagen6.jpg" />
    <div class="titulo" style="color: #f6952e;">Magic: the gathering</div>
    <div class="text">
      <?php if($eng){ ?>
   Magic is a collectible card game released in 1993. I started playing the game around 1999 and had mild success as a player for about 4 years. In 2010 I returned to the game, got certified as a judge and started running events locally. 
<br/><br/>
      Soon I started travelling to work on bigger events abroad and went up to level 3, the highest level in the program. In this level I run teams of judges in events and I coordinate projects outside tournaments. I am in charge of multimedia content produced for the whole continent.
<br/><br/>
      I judged over 50 events internationally, the biggest over 8.000 players and a few over 2.000. In the program I learnt leadership and motivation techniques, addressing a crowd, event management, etc.
<br/><br/>
      Nowadays I am an esteemed member of the community, both by my peers and superiors.
  <?php }else{ ?>
   Magic es un juego de cartas collecionables publicado originalmente en 1993. Comencé a jugar alrededor de 1999, logrando un éxito mediano como jugador durante unos 4 años. En 2010 volví al juego pero esta vez me certifiqué como juez y comencé a trabajar en torneos locales.
<br/><br/>
      Muy pronto pude viajar a trabajar en eventos más grandes y subí hasta nivel 3, el nivel más alto dentro del programa. En este nivel soy responsable de equipos de jueces dentro de los torneos y coordino proyectos fuera de ellos. Estoy a cargo del contenido multimedia del programa para todo el continente.
<br/><br/>
      Trabajé en más de 50 eventos internacionales, el más grande con más de 8.000 jugadores y algunos de más de 2.000. Como juez aprendí conceptos de liderazgo y motivación, trabajar con multitudes, hablar en público, logística de eventos, etc.
<br/><br/>
      Hoy en día soy un miembro estimado de la comunidad, por mis pares y superiores.
  <?php } ?>


    </div>
   <div class="link" style="top: 60px; left: 430px;"><a href=<?php echo('"./magic'.$link.'"') ?> target="_blanc">
<?php if($eng){ ?>
  Read more
  <?php }else{ ?>
  Leer más
  <?php } ?>
    </a></div>
  </div>
</div>


<br/>
<br/>
<br/>
<br/>



<div class="seccionWrapper">
<div class="bandaAncha" style="background-color: #354059; height: 297px;"></div>
  <div class="sectionContent">
  	<div class="titulo" style="color: #354059;">
<?php if($eng){ ?>
    Short Movies
    <?php }else{ ?>
    Cortos
    <?php } ?>
    </div>
  	<img class="imagenFondo" style="bottom: 9px;" src="images/imagen7.jpg" />
    
    <div class="datosAncha" style="bottom: 240px;">
   <?php if($eng){ ?>
   A few months back I got together with a good friend of mine, Juan Capurro, and we started writing, producing and shooting short movies.
     <br/><br/>
     The only objective is to learn and develop the skills necesary to produce high quality material. We're producing one every two months.
     <br/><br/>
     The scripts are short but allow us to explore new fields like better actor work, visual effects or interesting storytelling. 
     <br/><br/>
     My role consists mainly of writing, directing and editing although we both intervene in every step of the process. 
  <?php }else{ ?>
    Hace unos meses me junté con un amigo, Juan Capurro, y comenzamos a escribir, producir y filmar cortos. 
     <br/><br/>
     El único objetivo es aprender y desarrollar los conocimientos necesarios para productir material de alta calidad. Estamos liberando uno cada dos meses.
     <br/><br/>
     Los guiones son cortos pero nos permiten explorar nuevos campos como trabajo con actores, efectos visuales e historias interesantes.
     <br/><br/>
     Mi rol en el proyecto consiste principalmente en escribir, dirigir y editar, aunque los dos estamos involucrados en todas las etapas de cada proceso.
     
  <?php } ?>


     <div class="link" style="left: 380px;"><a style="color: white;" href=<?php echo('"shorts.php'.$link.'"') ?> target="_blanc">
<?php if($eng){ ?>
  Watch the shorts
  <?php }else{ ?>
  Ver los cortos
  <?php } ?>
    </a></div>

    </div>
  </div>
</div>

<br/>
<br/>
<br/>



<div class="seccionWrapper">
<div class="banda" style="background-color: #8e1f2e;"></div>
  <div class="sectionContent">
  	<img class="imagen" style="bottom: 17px;" src="images/imagen8.jpg" />
    <div class="titulo" style="color: #8e1f2e;">

<?php if($eng){ ?>
    Music
    <?php }else{ ?>
    Música
    <?php } ?>
      

    </div>
    <div class="text">
      <?php if($eng){ ?>
  Music has always been very important in my life. I studied music since I was a child, both specific instruments but also music theory in general. 
 <br/><br/>
 As a teenager and young adult most of my friends were musicians and my social activities usually revolved around music. I've been fortunate to see to very talented musicians grow and develop their craft.
 <br/><br/>
 For me music is just a hobby, I've never approached it as a profession, but it's always been such an important aspect of my life that I thought I'd include it here. If you follow the link you can hear some of the things I've recorded.
    <?php }else{ ?>
  La música fue siempre una parte muy importante de mi vida. Estudié musica desde muy chico, insturmentos específicos pero también teoría general.
 <br/><br/>
 Como adolescente y adulto, la mayoría de mis amigos fueron siempre músicos y mis actividades sociales se centraron alrededor de la música. Tuve la fortuna de ver a talentosísimos músicos cerecer y desarrollar su arte.
 <br/><br/>
 Para mi la música es simplemente un hobby, nunca me lo tomé como una posible profesión, pero siempre fue un aspecto muy importante de mi vida por lo que me gusta incluirlo aquí. En el link pueden ver algunas de las cosas que he hecho.
 
    <?php } ?>
      

 <div class="link" style="left: 380px; top: 20px"><a href=<?php echo('"./music'.$link.'"') ?> target="_blanc">
<?php if($eng){ ?>
  See and hear more
  <?php }else{ ?>
  Ver y escuchar más
  <?php } ?>

  </a></div>
    </div>
  </div>
</div>



<br/>
<br/>
<br/>
<br/>



<div class="seccionWrapper">
<div class="bandaAncha" style="background-color: #272821; height: 248px;"></div>
  <div class="sectionContent">
  	<div class="titulo" style="color: #272821;">
<?php if($eng){ ?>
    Programming
    <?php }else{ ?>
    Programación
    <?php } ?>
  </div>
  	<img class="imagenFondo" style="bottom: 9px;" src="images/imagen9.jpg" />
    
    <div class="datosAncha" style="bottom: 240px;">
<?php if($eng){ ?>
  I consider programming to be a basic skill for content creators in this day and age. While I have't formally studied programming and don't consider myself a programmer, I make a point in learning and understanding the basics so that I can create basic apps and webpages.
<br/><br/>
I've worked exclusively on web based programming and developed a few projects for my former job and some web pages. 
<br/><br/>
I coded mainly in jQuery and PHP with some mySQL, Flash's ActionScript y Angular.

  <?php }else{ ?>
Considero que la programación es una habilidad básica para los generadores de contenido hoy en día. Por más que no he tenido estudios formales de programación y no me considero un programador per se, siempre tuve presente la importancia de aprender y entender los conceptos básicos de programación a fin de poder crear apps y páginas web básicas.
<br/><br/>
Trabajé exclusivamente en web y desarrollé algunos proyectos para mi empelo anterior y algunas páginas web puntuales.
<br/><br/>
Codifiqué principalmente en jQuery y PHP, con algo de mySQL, ActionScript de Flash y Angular.

  <?php } ?>


    </div>
  </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</body>
</html>