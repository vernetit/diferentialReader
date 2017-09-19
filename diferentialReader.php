<?
$localIP = getHostByName(getHostName());
//echo $localIP . "<br>";

$bLocal = 0;

$dist="";
if ($localIP == "localhost:13080"){
  //$e =  mysql_connect('173.194.250.8', 'vernetit', 'chupala');
  $bLocal = 1;
 
  
}else{
  //$e =  mysql_connect(':/cloudsql/competicionmental:competicionmental', 'root', 'chupala');
  $dist="-dist";
}

$dist="";

//$dist=""

/*
if (!$e) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($e);
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

  <title>Diferential Reader</title>
  <!--
  <script src="js/react-with-addons.js"></script>
  <script src="js/react-dom.js"></script>
  -->
  <script src="js/jquery.min.js"></script>
  <script src="js/underscore-min.js"></script>


  <script>
    
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45359665-6', 'auto');
  ga('send', 'pageview');

  </script>
  <style type="text/css">
   body{
    color: green;
    background-color: black;
   }
    #control {
    position: fixed;
    bottom: 0px;
    width: 100%;
    margin-bottom: 10px;
    }
    #screen{
      font-size: 30px;
      width: 100%;
      height: 800px;
      /*margin-top: 25%;*/
    /*  color: blue; */
      
    /* font-family: "Comic Sans MS", cursive, sans-serif; */

    }
     #up-screen{
      margin-left: 50%;
      position: fixed;
      top: 30px;
      transform: translateX(-50%);
     }
     #down-screen{
      margin-left: 50%;
      position: fixed;
      bottom: 60px;
       transform: translateX(-50%);

     }
     #left-screen{
      position: fixed;
      top: 50%;
      left: 0px; 

      /*float: right; */
     /*font-size: 26px;*/

     }
     #right-screen{
      position: fixed;
      top: 50%;
      right: 0px; 
      /* float: left; */
      /*font-size: 26px;*/

     }
      #center-screen{
      position: fixed;
      top: 50%;
      margin-left: 50%;
      transform: translateX(-50%);
      /*right: 0px; */
      /* float: left; */
      /*font-size: 26px;*/

     }
     #left-up-screen{
      position: fixed;
      top: 10%;
      left: 0px; 
     }
     #right-up-screen{
      position: fixed;
      top: 10%;
      right: 0px; 
     }

     #left-down-screen{
      position: fixed;
      left: 0px; 
      bottom: 60px;
     }
     #right-down-screen{
      position: fixed;
      right: 0px; 
      bottom: 60px;
     }
     #right-down-screen2{
      position: fixed;
      right: 0px; 
      bottom: 0px;
     }
  </style>
</head>
<body>
<div id="screen" onclick="if(posicion-12>=0){ posicion-=12;  }else{ posicion=0; }">
  <div id="left-up-screen"></div>
  <div id="right-up-screen"></div>
  <div id="up-screen">:)</div>
  <div id="left-screen">Diferential</div>
  <div id="center-screen"></div>
  <div id="right-screen">Reader!</div>
  <div id="down-screen">:)</div>
  <div id="left-down-screen"></div>
  <div id="right-down-screen"></div>
</div>
<div id="right-down-screen2"><input type="button" value="hide" onclick="hide();" id="hide-btn"></div>

<div id="control">
  <input  type="button" value="start" onclick="play();" id="play-btn">
  <input  type="button" value="stop" onclick="stopFlash();">
  <input type="button" value="clearTxt" onclick="$('#input1').val(''); stopFlash();">

  <select id="velocityFlash" style="width: 75px;" onchange="calcularTiempo();">   
    <option value="50">50wpm</option>
    <option value="75">75wpm</option>
    <option value="100">100wpm</option>
    <option value="125">125wpm</option> 
    <option value="150">150wpm</option>
    <option value="175">175wpm</option>
    <option value="180">180wpm</option>
    <option value="185">185wpm</option>
    <option value="190">190wpm</option>
    <option value="195">195wpm</option>
    <option value="200">200wpm</option>
     <option value="205">205wpm</option>
    <option value="210">210wpm</option>
    <option value="215">215wpm</option>
    <option value="220">220wpm</option>
    <option value="225">225wpm</option>
     <option value="230">230wpm</option>
    <option value="235">235wpm</option>
    <option value="240">240wpm</option>
    <option value="245">245wpm</option>
    <option value="250">250wpm</option>
    <option value="275">275wpm</option>
    <option value="300" selected>300wpm</option>
    <option value="325">325wpm</option>
    <option value="350">350wpm</option>
    <option value="375">375wpm</option>
    <option value="400">400wpm</option>
    <option value="425">425wpm</option>
    <option value="450">450wpm</option>
    <option value="475">475wpm</option>
    <option value="500">500wpm</option>
    <option value="525">525wpm</option>
    <option value="550">550wpm</option>
    <option value="575">575wpm</option>
    <option value="600">600wpm</option>
    <option value="625">625wpm</option>
    <option value="650">650wpm</option>
    <option value="675">675wpm</option>
    <option value="700">725wpm</option>
    <option value="725">700wpm</option>
    <option value="750">750wpm</option>
    <option value="775">775wpm</option>
    <option value="800">800wpm</option>
    <option value="825">825wpm</option>
    <option value="850">850wpm</option>
    <option value="875">875wpm</option>
    <option value="900">900wpm</option>
    <option value="925">925wpm</option>
    <option value="950">950wpm</option>
    <option value="975">975wpm</option>
    <option value="1000">1000wpm</option>
    <option value="1100">1100wpm</option>
    <option value="1200">1200wpm</option>
  </select>
  
  <select id="wordsByFlash" onchange="wordsByFlash=n('wordsByFlash');" style="/*display:none;*/">   
    <option value="1" selected>1w</option>
    <option value="2">2w</option>
    <option value="3">3w</option>
    <option value="4">4w</option>
    <option value="5">5w</option>
    <option value="6">6w</option>
    <option value="7">7w</option>
  </select>
  <select id="readingMode" onchange="bLugar=1; circleFase=0; readingMode=n('readingMode'); " style="display:none;">   
    <option value="1">left-right</option>
    <option value="2">up-down</option>
    <option value="3">circle</option>
    <option value="4">circle inv</option>
    <option value="5">random Circle</option>
    <option value="6"  selected>center</option>
    <option value="7">Square</option>
    <option value="8">Cross</option>
    <option value="9">Random Square</option>
    <!--<option value="6">center</option>-->
  </select>
  <textarea rows="1" cols="25" style="margin-top: 5px;" id="input1">Para Sherlock Holmes ella es siempre la mujer. Rara vez he oído que la mencione por otro nombre. A sus ojos, ella eclipsa al resto del sexo débil. No es que haya sentido por Irene Adler una emoción que pueda compararse al amor. Todas las emociones, y ésa particularmente, son opuestas a su mente fría, precisa, pero admirablemente equilibrada. Es, puedo asegurarlo, la máquina de observación y razonamiento más perfecta que el mundo ha visto; pero como amante, como enamorado, Sherlock Holmes había estado en una posición completamente falsa. Jamás hablaba de las pasiones, aun de las más suaves, sin un dejo de burla y desprecio. Eran cosas admirables para el observador... excelentes para recorrer el velo de los motivos y acciones de los hombres. Pero para el razonador preparado, admitir tales intromisiones en su propio temperamento, cuidadosamente ajustado, era introducir un factor que distraería y descompensaría todos los delicados resultados mentales. Una basura en un instrumento sensitivo o una grieta en un lente finísimo, no habría sido más perjudicial que una emoción intensa en una naturaleza como la suya. Y, sin embargo, para él no hubo más que una mujer, y esa mujer fue la difunta Irene Adler, de dudosa y turbia memoria.
Había visto poco a Holmes últimamente. Mi matrimonio nos había alejado. Mi propia felicidad y los intereses domésticos que surgén alrededor del hombre que se encuentra por primera vez convertido en amo y señor de su casa, eran suficientes para absorber toda mi atención; mientras que Holmes, que odiaba cualquier forma de sociedad con toda su alma de bohemio, permaneció en nuestras habitaciones de Baker Street, sumergido entre sus viejos libros y alternando, de semana en semana, entre la cocaína con la ambición, la somnolencia de la droga con la feroz energía de su propia naturaleza inquieta. Continuaba, como siempre, profundamente interesado en el estudio del crimen y ocupando sus inmensas facultades y sus extraordinarios poderes de observación en seguir las pistas y aclarar los misterios que habían sido abandonados por la policía oficial, como casos desesperados. De vez en cuando escuchaba algún vago relato de sus hazañas: su intervención en el caso del asesinato Trepoff, en Odessa; su solución en la singular tragedia de los hermanos Atkinson, en Trincomalee, y, finalmente, en la misión que había realizado, con tanto éxito, para la familia reinante de Holanda. Sin embargo, más allá de estas muestras de actividad, que me concretaba a compartir con todos los lectores de la prensa diaria, sabía muy poco de mi antiguo amigo y compañero.
Una noche -fue el 20 de marzo de 1888- volvía de visitar a un paciente (había vuelto al ejercicio de mi profesión como médico civil), cuando mi recorrido de regreso a casa me obligó a pasar por Baker Street. Al pasar por aquella puerta tan familiar para mí, que siempre estará asociada en mi mente a la época de mi noviazgo y a los oscuros incidentes del Estudio en escarlata, me sentí invadido por un intenso deseo de ver a Holmes y de saber cómo estaba empleando, ahora, sus extraordinarias facultades. Sus habitaciones estaban brillantemente iluminadas. Al levantar la mirada hacia ellas, noté su figura alta y esbelta pasar dos veces, convertida en negra silueta, cerca de la cortina. Estaba recorriendo la habitación rápida, ansiosamente, con la cabeza sumida en el pecho y las manos unidas a la espalda. Para mí, que conocía a fondo cada uno de sus hábitos y de sus estados de ánimo, su actitud y su comportamiento eran reveladores. Estaba trabajando de nuevo. Se había sacudido de sus ensueños toxicómanos y estaba sobre la pista candente de algún nuevo caso. Toqué la campanilla y fui conducido a la sala que por tanto tiempo compartí con Sherlock.
No fue muy efusivo. Rara vez lo era; pero creo que se alegró de verme. Casi sin decir palabra, aunque con los ojos brillándole bondadosamente, me indicó un sillón, me arrojó su cajetilla de cigarrillos y señaló hacia una botella de whisky y un sifón que había encima de una cómoda. Entonces se puso de pie frente al fuego y me miró con el detenimiento tan peculiar de él.  
</textarea>
<!-- <input type="button" value="colors on/off" onclick="bColors=!bColors;"> -->
<!--<input  type="button" value="cw" onclick="bCW=!bCW;">-->
<!-- <input type="button" value="rc" onclick="if(bColors==0){ bColors=1; } bRc=!bRc; clearTimeout(killIntervalRc);"> -->
<select onchange="cambiarColores(this.value);" id="colors-select" style="width: 65px;">
  <option value="1">Green</option>
  <option value="2">Blue</option>
  <option value="3">Gray</option>
  <option value="4" selected>Color Alphabet</option>
  <option value="5">Random colors</option>
</select>
<select onchange="cambiarTransformation(this.value);" id="transform-select" style="width: 90px; display:none;">
  <option value="1">noTransform</option>
  <option value="2">up-down</option>  
  <option value="3">right to left</option>  
  <!--<option value="4">All previous</option> -->
  <option value="4">Skew</option> 
  <option value="5">Random Skew</option>  
</select>
<? $exp=1; if(isset($_GET["exp"])){ $exp=intval($_GET["exp"]); } ?>
<select id="experiment-select" onchange="clearInterval(kill6); myExperiment=n('experiment-select');" style="display:none;">   
    <option value="1" <?=$exp==1?"selected":""?>>noExperiment</option>
    <option value="2" <?=$exp==2?"selected":""?>>longWordsPause</option>
    <option value="3" <?=$exp==3?"selected":""?>>temporaryHideLetters</option>
    <option value="4" <?=$exp==4?"selected":""?>>PeripheralVisionSquare</option>
    <option value="5" <?=$exp==5?"selected":""?>>PeripheralVisionCross</option>
    <option value="6" <?=$exp==6?"selected":""?>>PeripheralVisionLeftRight</option>
    <option value="7" <?=$exp==7?"selected":""?>>PeripheralVisionUpDown</option>
    <option value="8" <?=$exp==8?"selected":""?>>vibration</option>
    <option value="9" <?=$exp==9?"selected":""?>>emotion</option>
    <option value="10" <?=$exp==10?"selected":""?>>face</option>
  </select>
  <span style="display:none;">
   margin <input type="text" id="margin-text" onchange="changeMargin();" style="width: 35px;">
  loop <select id="repeat-q" style="width: 40px;">    
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    </select>
    <input type="text" value="50" id="loop-buffer" style="width:35px;">
  </span>
  <input type="button" value="getRandomTxt" onclick="getRndTxt();" id="rnd-btn">&nbsp;
  repeatW 
  <select id="repeat-w" style="width: 40px;">    
    <option value="0">none</option>
    <!-- <option value="1">1</option> -->
    <option value="2">2</option>
    <!-- <option value="3">3</option> -->
    <option value="4" selected>4</option>
    <!-- <option value="5">5</option> -->
    <option value="6">6</option>
    <!-- <option value="7">7</option> -->
    <option value="8">8</option>
    <!-- <option value="9">9</option> -->
    <option value="10">10</option>
    <option value="12">12</option>
    <option value="14">14</option>
    <option value="16">16</option>
 </select>
 database
  <select id="database" style="/*width: 40px;*/">    
    <option value="1">current txt</option>
    <option value="2"  selected>lemario</option>
    <option value="3">ES 1</option>
    <option value="4">ES 2</option>
    <? if($bLocal){ ?>
    <option value="5">verbos</option>
    <option value="6">nombres</option>
    <option value="7">English</option>
    <? } ?>
  </select>
   collision <select id="collision" style="/*width: 40px;*/">    
    <option value="100">100%</option>
    <option value="90">90%</option>
    <option value="80">80%</option>
    <option value="75">75%</option>
    <option value="60">60%</option>
    <option value="50">50%</option>
    <option value="40">40%</option>
    <option value="30"  selected>30%</option>
    <option value="25">25%</option>
    <option value="20">20%</option>
    <option value="10">10%</option>
   </select> 
   loop
   <input type="checkbox" onclick="bLoop=!bLoop;">



<input  type="button" value="?" onclick="alert('Collision is the posibility of word add to text\nTo put the words more close adjust the window width.\nLicence: GNU https://github.com/vernetit/diferentialReader\ncontact: robertchalean@gmail.com');">
 <span id="stats" style="font-size: 12px;"></span>
</div>
<div id="preload" style="display:none;">
  

</div>
<div id="txt-1" style="display:none;">
<?


function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

function rand_line($fileName, $maxLineLength = 40,$maxQuantity, $bQ) {

    $handle = @fopen($fileName, "r");

    $cantidad=300; /*if(isset($_GET["cantidad"])){ $cantidad=intval($_GET["cantidad"]); }*/

    // //valido cantidades
    // if($cantidad>300) die;
    // if($cantidad<0) die;

    if ($handle) {
        $random_line = null;
        $line = null;
        $count = 0;
        $total = 0;

        $myArray = UniqueRandomNumbersWithinRange(0,$maxQuantity,$cantidad);

        while (($line = fgets($handle, $maxLineLength)) !== false) {

            /*
            if(strlen($line)){
              array_push($myArray, $count++);
              $count++;
              die;
              continue;
            }*/

            if($total>=$cantidad)
              continue;

            $count++;

            // P(1/$count) probability of picking current line as random line
            if(in_array($count, $myArray)) {
             //echo ($total+1)."-".strlen($line)."->".$line;
              if($bQ){
                if($line=="\n" || $line==" " || strlen($line)<20){
                  array_push($myArray,$count+1);
                  $count--;
                  continue;

                }
              }
              $line= strtolower(str_replace("\n", "", $line));
              $random_line[$total] = $line."\n";
              $total++;

            }
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
            fclose($handle);
            return null;
        } else {
            fclose($handle);
        }
        return $random_line;
    }
}

// usage

$tipo=1; /*if(isset($_GET["tipo"])){ $tipo=intval($_GET["tipo"]); }*/

$txtToLoad = "db/lemario.txt"; $mq=80383;

$bQ=0; $mLL=40;
switch ($tipo) {
  case 1: $txtToLoad = "db/lemario.txt"; $mq=80383; break;
  case 2: $txtToLoad = "db/verbos.txt"; $mq=10783; break;
  case 3: $txtToLoad = "db/spanishopen2015.txt"; $mq=363; break;
  case 4: $txtToLoad = "db/agil.txt";  $mq=508;  break;
  case 5: $txtToLoad = "db/en.txt";  $mq=50000;  break;
  case 6: $txtToLoad = "db/fr.txt";  $mq=50000;  break;
  case 7: $txtToLoad = "db/pt.txt";  $mq=50000;  break;
  case 8: $txtToLoad = "db/de.txt";  $mq=50000;  break;
  case 9: $txtToLoad = "db/oficios.txt";  $mq=372;  break;
  case 10: $txtToLoad = "db/q.txt";  $mq=8877; $bQ=1; $mLL=500; break;
  case 11: $txtToLoad = "db/spanishopen2015esperanto.txt";  $mq=363; break;
  case 12: $txtToLoad = "db/spanishopen2015catalan.txt";  $mq=363; break;
  case 13: $txtToLoad = "db/apellidos.txt";  $mq=5181; break;
  case 14: $txtToLoad = "db/nombres-propios-es.txt";  $mq=455; break;
  case 15: $txtToLoad = "db/paises.txt";  $mq=256; break;
  case 16: $txtToLoad = "db/letras.txt";  $mq=702; break;
  case 17: $txtToLoad = "db/notas.txt";  $mq=504; break;
  case 18: $txtToLoad = "db/f.txt";  $mq=7263; $mLL=300; break;
}

$txt = rand_line($txtToLoad,$mLL,$mq,$bQ);
//$a = explode("\n", $txt,30);
//var_export($a);
shuffle($txt);


for($i=0;$i<count($txt);$i++){
  echo $txt[$i];
}
//echo implode(" ",$a);
?> 
</div>
<div id="txt-2"  style="display:none;"><? include "db/spanishopen2015.txt"; ?></div>
<div id="txt-3" style="display:none;"><? include "db/agil.txt"; ?></div>
<div id="txt-4" style="display:none;"><? if($bLocal) include "db/verbos.txt"; ?></div>
<div id="txt-5" style="display:none;"><? if($bLocal) include "db/nombres-propios-es.txt"; ?></div>
<div id="txt-6" style="display:none;"><? if($bLocal) include "db/en.txt"; ?></div>


<script type="text/javascript">

bLoop=0;

repeatQ=0;
loopBuffer=0;
repeatCount=0;
bRepetir=0;
nextRepeat=0;
gotoPrev=0;

function changeMargin(){
  newMargin = $("#margin-text").val()+"px";
  $("#left-screen").css("left",newMargin);
  $("#right-screen").css("right",newMargin);
}

letras_emo="abcdefghilmnopqrstuv".split("");

for(i=0;i<letras_emo.length;i++){
  cara = letras_emo[i];
  if(cara=="a" || cara=="e"  || cara=="n" || cara=="o"  || cara=="r"  || cara=="s"){
    for(j=1;j<5;j++){
      $("#preload").append(`<img src="emociones/${cara+j}.gif">`);

    }
  }else{
    $("#preload").append(`<img src="emociones/${cara}.gif">`);
  }

}

bHide=0;

function hide(){
  bHide=!bHide;

  if(bHide){
    $("#hide-btn").val("show");
    $("#control").hide();

  }else{

    $("#hide-btn").val("hide");
    $("#control").show();
  }
}

velocity=300;
txtLength=0;

myExperiment=<?=$exp?>;

function random_color(format)
{
    var rint = Math.round(0xffffff * Math.random());
    switch(format)
    {
        case 'hex':
            return ('#0' + rint.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
            break;

        case 'rgb':
            return 'rgb(' + (rint >> 16) + ',' + (rint >> 8 & 255) + ',' + (rint & 255) + ')';
            break;

        default:
            return rint;
            break;
    }
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

bRc=0;

function n(x){ return parseInt($("#"+x).val()); }

var bPlay=0;
var wordsByFlash=1;
var readingMode=6;
var circleFase=0;
var bCW=0;
bColors=0;
fontSize=30;

function play(){

  bPlay=!bPlay;

  if(bPlay){
    $("#play-btn").val("pause");

    init();

  }else{
    clearTimeout(killInterval);
    clearTimeout(killIntervalRc);
    $("#play-btn").val("start");
  }
}

ww=$(window).width();
wh=$(window).height();

var cadena;
var cantidad;
var posicion=0;
var lugar="left-screen";

bLugar=1;
iniciar = 1;
tiempo = 0;

lugar = "";
mostrar="";

var killIntervalRc;

function calcularTiempo(){
  if(iniciar==0){
    tiempo = ( cantidad - posicion ) * ( 60000/n("velocityFlash") );

    poner = `${posicion+1}/${cantidad} - ${getDuration(tiempo)}`;
    $("#stats").html(poner);

  }
}

var kill6;


function init(x){

  if(iniciar==1){
    var limpia = "";
    resultados = "";
    cantidadPalabras = 0;
    repeatWW=n("repeat-w");
    myDb=n("database");

    str = $("#input1").val();


    limpia = str.split("\n").join(" ");
    limpia = limpia.split("\t").join(" ");
    limpia = limpia.split("\r").join(" ");
    limpia = limpia.split(",").join(" ");
    limpia = limpia.split(".").join(" ");
    limpia = limpia.split(")").join(" ");
    limpia = limpia.split("(").join(" ");
    limpia = limpia.split(";").join(" ");
    limpia = limpia.split("-").join(" ");

    limpia = limpia.split("   ").join(" ");
    limpia = limpia.split("  ").join(" ");

    str = limpia;

    cadena=str.split(" ");

    cantidad=cadena.length;
    posicion = 0;

    console.log(cadena)
    console.log(repeatWW)

    strDatabase1=$("#txt-1").html();
    cadenaDatabase1=strDatabase1.split("\n");

    strDatabase2=$("#txt-2").html();
    cadenaDatabase2=strDatabase2.split("\n");

    strDatabase3=$("#txt-3").html();
    cadenaDatabase3=strDatabase3.split("\n");

     strDatabase4=$("#txt-4").html();
    cadenaDatabase4=strDatabase4.split("\n");

     strDatabase5=$("#txt-5").html();
    cadenaDatabase5=strDatabase5.split("\n");

     strDatabase6=$("#txt-6").html();
    cadenaDatabase6=strDatabase6.split("\n");

    console.log(cadenaDatabase1)
    console.log(cadenaDatabase2)
    console.log(cadenaDatabase3)

    collision=n("collision");
    
    for(i=0;i<cadena.length;i++){

      if(cadena[i].length>3 && _.random(0,100)<=collision){
        for(j=0;j<repeatWW;j++){
          if(j%2==0){
            for(;;){
              if(myDb==1){ sel=cadena[_.random(0,cantidad-1)]; }
              if(myDb==2){ sel=cadenaDatabase1[_.random(0,cadenaDatabase1.length-1)]; }
              if(myDb==3){ sel=cadenaDatabase2[_.random(0,cadenaDatabase2.length-1)]; }
              if(myDb==4){ sel=cadenaDatabase3[_.random(0,cadenaDatabase3.length-1)]; }
              if(myDb==5){ sel=cadenaDatabase4[_.random(0,cadenaDatabase4.length-1)]; }
              if(myDb==6){ sel=cadenaDatabase5[_.random(0,cadenaDatabase5.length-1)]; }
              if(myDb==7){ sel=cadenaDatabase6[_.random(0,cadenaDatabase6.length-1)]; }
              
              if(sel.length>4){ break; }

            }

            sel=sel.toLowerCase();
            
           
            cadena.splice(i+(j+1), 0, sel);
            
            
          }else{
            sel=cadena[i];
            
            cadena.splice(i+(j+1), 0, sel);
           
          }//if
        }//for j
        i+=(j);

      }//cadena length
    }//for i
    console.log(cadena)
    cadena.push(" ");
    cantidad=cadena.length;

    loopBuffer=n("loop-buffer");
    repeatQ=n("repeat-q");
    console.log(repeatQ);
    bRepetir=1;
    nextRepeat=loopBuffer;
    repeatCount=0;
    gotoPrev=0;

    if(myExperiment==8){
      clearInterval(kill6);

      kill6=setInterval(function(){

        maxChange=_.random(0,10);
        $("#left-screen").css("padding-left",maxChange+"px");
        $("#right-screen").css("padding-right",maxChange+"px");
        $("#left-screen").css("padding-top",maxChange+"px");
        $("#right-screen").css("padding-top",maxChange+"px");

        $("#center-screen").css("padding-left",maxChange+"px");
        $("#center-screen").css("padding-top",maxChange+"px");

        /*
        $("#up-screen").html("");
        $("#down-screen").html("");
        $("#center-screen").html("");

        $("#left-up-screen").html("");
        $("#right-up-screen").html("");
        $("#left-down-screen").html("");
        $("#right-down-screen").html("");*/



      },1);
    }

    /*
    if(bCW){
      for(i=0;i<cadena.length;i++){
        if(cadena[i].length>6){
          cadena[i]=cadena[i].substr(0, 6);
          console.log(cadena[i]);
        }
      }
    }*/

    //console.log(arrayRandomWord);
    bLugar=1;

    iniciar=0;

    calcularTiempo();

  }


  clearTimeout(killIntervalRc);

  if(myExperiment==4 || myExperiment==5){
    bColors=0;
    wordsByFlash=4;
  } 
  if(myExperiment==6 || myExperiment==7 ){
    bColors=0;
    wordsByFlash=2;
  } 
  
  if(wordsByFlash==1){
    mostrar = cadena[posicion];

  }

  if(wordsByFlash==2){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] ;

  }

  if(wordsByFlash==3){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] ;

  }

  if(wordsByFlash==4){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] ;

  }
  
  if(wordsByFlash==5){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4];

  }

  if(wordsByFlash==6){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4] + " " + cadena[posicion+5];

  }

  if(wordsByFlash==7){
    mostrar = cadena[posicion] + " " + cadena[posicion+1] + " " + cadena[posicion+2] + " " + cadena[posicion+3] + " " + cadena[posicion+4] + " " + cadena[posicion+5] + " " + cadena[posicion+6];

  }
  //console.log(cadena);

  bLugar=!bLugar;

  $("#left-screen").html("");
  $("#right-screen").html("");
  $("#up-screen").html("");
  $("#down-screen").html("");
  $("#center-screen").html("");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  if(readingMode==1){
  

    if(bLugar){

      lugar="right-screen";
      $("#left-screen").html("");

    }else{
      lugar="left-screen";
      $("#right-screen").html("");

    }

  }

  if(readingMode==2){

    

    if(bLugar){

      lugar="down-screen";
      $("#up-screen").html("");

    }else{
      lugar="up-screen";
      $("#down-screen").html("");

    }

  }

  if(readingMode==3){

    if(circleFase==0){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==2){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==4){


    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==5){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }

    if(circleFase==2){
      lugar="left-screen";
    }

    if(circleFase==1){
      lugar="up-screen";
      
    } 

    if(circleFase==0){

      lugar="right-screen";
    }

    if(circleFase==3){
      lugar="down-screen";
    
    }
  

  }

  if(readingMode==6){
    $("#left-screen").html("");
    $("#right-screen").html("");
    $("#up-screen").html("");
    $("#down-screen").html("");
    $("#center-screen").html("");

    lugar="center-screen";

  }

  if(readingMode==7){


    if(circleFase==2){
      lugar="left-down-screen";
    }

    if(circleFase==1){
      lugar="right-up-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="right-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==8){


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    

    circleFase++;
    if(circleFase==4)
      circleFase=0;

  }

  if(readingMode==9){

    _circleFase=circleFase;

    for(;;){

      circleFase=_.random(0,3);

      if(circleFase!=_circleFase)
        break;
    }


    if(circleFase==2){
      lugar="right-up-screen";
    }

    if(circleFase==1){
      lugar="right-down-screen";
      
    } 

    if(circleFase==0){

      lugar="left-up-screen";
    }

    if(circleFase==3){
      lugar="left-down-screen";
    
    }
    
    /*
    circleFase++;
    if(circleFase==4)
      circleFase=0;*/

  }

  //console.log(readingMode);

  fontSize=30;

  if(wordsByFlash>4)
    fontSize=24;

  transform="";

  if(myTransformation==2){
    
    transform="transform:rotateX(180deg);";
    
  }
  if(myTransformation==3){
    transform="transform:rotateY(180deg);";
          
  }
  /*
  if(myTransformation==4){
    transform="transform:rotateX(180deg) ";
    transform+="transform:rotateY(180deg);";
  


  }*/
  if(myTransformation==4){

    if(bLugar){

      //lugar="right-screen";
      //$("#left-screen").html("");
      transform="transform:skewY(30deg);"

    }else{
      //lugar="left-screen";
      //$("#right-screen").html("");
      transform="transform:skewY(-30deg);"

    }
    
    
          
  }

  if(myTransformation==5){
    
    transform="transform:skewY("+_.random(-40,40)+"deg);"
          
  }

  //genero la impresion
  txtLength=0;

  emo="";

  if(myExperiment==9){
    letras_emo="abcdefghilmnopqrstuvy".split("");
    rnd=_.random(0,letras_emo.length-1);
    cara=letras_emo[rnd];

    if(cara=="a" || cara=="e"  || cara=="n" || cara=="o"  || cara=="r"  || cara=="s")
      cara+=_.random(1,4);

    poner_1=`<img src="emociones/${cara}.gif" width="74" height="100">`;
    emo=`<center>${poner_1}</center><br>`;


  }

  if(myExperiment==10){
    a_1=["female","male"];
    rnd=_.random(1,155);
    rnd1=_.random(0,1);
    sexo=a_1[rnd1];

    poner_1=`<img src="faces/${sexo}/${rnd}.png" width="74" height="100">`;
    emo=`<center>${poner_1}</center><br>`;


  }
  
  if(bColors){

    if(bRc){

      

      killIntervalRc=setInterval(function(){

        poneme="";
        for(i=0;i<mostrar.length;i++){

          

          if(mostrar[i]==" "){
            poneme += `<span style="color: black;">&nbsp;</span>`;

          }else{
            poneme += `${emo}<span style="color: ${random_color('rgb')}; text-shadow: 1px 1px ${random_color('rgb')}; font-size: ${fontSize}px;">${mostrar[i]}</span>`;

          }

          
        }

        $("#"+lugar).html(`<div style="${transform}">`+poneme+"</div>");


      },10);

    }else{
      poneme="";
      for(i=0;i<mostrar.length;i++){

        if(mostrar[i]==" "){
          poneme += `<span style="color: black;">&nbsp;</span>`;

        }else{
          poneme += `<span style="color: ${abc1[mostrar[i]]}; text-shadow: 1px 1px gray;  font-size: ${fontSize}px;">${mostrar[i]}</span>`;

        }

        
      }

      $("#"+lugar).html(`${emo}<div style="${transform}">`+poneme+"</div>");


    }

  }else{
    if(myExperiment==4 || myExperiment==5 || myExperiment==6 || myExperiment==7){


      if(myExperiment==4){
        $("#left-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#left-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#right-down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==5){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+2] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+3] +`</span></div>`);

      }
      if(myExperiment==6){
        $("#left-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#right-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
        

      }
      if(myExperiment==7){
        $("#up-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion] +`</span></div>`);
        $("#down-screen").html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+cadena[posicion+1] +`</span></div>`);
      }

      


    }else{//myExperiment

      if(myExperiment==3){
        _p="";
        for(kk=0;kk<mostrar.length;kk++){

          if(kk==0 || mostrar[kk+1]==" " || kk==mostrar.length-1){
            _p+=`<span class="t-m">${mostrar[kk]}</span>`;
          }
          else
          {
            _p+=`<span class="t-e">${mostrar[kk]}</span>`;
          }

        }
        mostrar = _p;
      }

      $("#"+lugar).html(`<div style="${transform}"><span style="font-size: ${fontSize}px;">`+mostrar+`</span></div>`);

      if(myExperiment==3){
        $(".t-e").css("color","black");
        setTimeout(function(){ $(".t-e").css("color",currentColor); }, 50 );

      }
  
    }//else myExperiment
    txtLength=mostrar.length;
    

    /*

    var Hello = React.createClass({
      displayName: 'Hello',
      render: function() {
        return React.createElement("div", null, "", this.props.name);
      }
    });

    ReactDOM.render(
      React.createElement(Hello, {name: mostrar}),
      document.getElementById(lugar)
    );
    */

  }
  

  posicion+=wordsByFlash;

  if(posicion>=nextRepeat){

    // console.log("hola: "+ "posicion:"+ posicion + " repeatQ "  + repeatQ);



    repeatCount++;

    if(repeatQ!=1){

      if(repeatCount==repeatQ){

        repeatCount=0;
        gotoPrev=posicion;
        nextRepeat+=loopBuffer;
      }else{
        posicion=gotoPrev;

      }
    }//repeatQ!=
  }//posicion%

  if(posicion>=cantidad){
    if(bLoop){ 
      stopFlash();
      $("#play-btn").click();
      return;
      
      
    }else{
      stopFlash();
      return;

    } 
    

  } 

  calcularTiempo();

  velocity=n("velocityFlash");
  if(myExperiment==2){
    if(txtLength>30){
      velocity=250;
      console.log("retardo")
    }
  }


  killInterval=setTimeout(function(){ init() },  ( 60000/ velocity ) * wordsByFlash   );

  calcularTiempo();

  //console.log( ( 60000/n("velocityFlash") ) * wordsByFlash );

  
  
}
  

function stopFlash(){
  

  if(bPlay){
    bPlay=0;
    $("#play-btn").val("start");
    
    
  }
  $("#left-screen").html("Diferential");
  $("#right-screen").html("Reader!");
  $("#up-screen").html(":)");
  $("#down-screen").html(":)");

  $("#center-screen").html("");

  $("#left-up-screen").html("");
  $("#right-up-screen").html("");
  $("#left-down-screen").html("");
  $("#right-down-screen").html("");

  iniciar=1;
  clearTimeout(killInterval);
  clearTimeout(killIntervalRc);
  $("#stats").html("");

}


var getDuration = function(millis){
  var dur = {};
  var units = [
      {label:"millis",    mod:1000},
      {label:"seconds",   mod:60},
      {label:"minutes",   mod:60},
      {label:"hours",     mod:24},
      {label:"days",      mod:31}
  ];
  // calculate the individual unit values...
  units.forEach(function(u){
      millis = (millis - (dur[u.label] = (millis % u.mod))) / u.mod;
  });
  // convert object to a string representation...
  var nonZero = function(u){ return dur[u.label]; };
  dur.toString = function(){
      return units
          .reverse()
          .filter(nonZero)
          .map(function(u){
              return dur[u.label] + " " + (dur[u.label]==1?u.label.slice(0,-1):u.label);
          })
          .join(', ');
  };

  /*
  console.log(dur);
  x = dur.split(",");
  poner = "";
  for(i=0;i<x.length;i++){
    if(x[i].indexOf("millis")!=1){
      continue;
    }
    poner += x[i];

  }*/

  //return dur;
  return dur.hours+":"+dur.minutes+":"+dur.seconds;//+":"+dur.millis;
};



var abc1  =  {

  'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   
    
};

function quitaAcentos(str){ 
  for (var i=0;i<str.length;i++){ 
  //Sustituye "á é í ó ú" 
    if (str.charAt(i)=="á") str = str.replace(/á/,"a"); 
    if (str.charAt(i)=="é") str = str.replace(/é/,"e"); 
    if (str.charAt(i)=="í") str = str.replace(/í/,"i"); 
    if (str.charAt(i)=="ó") str = str.replace(/ó/,"o"); 
    if (str.charAt(i)=="ú") str = str.replace(/ú/,"u"); 
  } 
  return str; 
} 

//$("#down-screen")

myTransformation=1;

function cambiarTransformation(x){
  myTransformation=parseInt(x);
}



<? if(isset($_GET["en"])){ ?>  

textoEn = `To Sherlock Holmes she is always THE woman. I have seldom heard him mention her under any other name. In his eyes she eclipses and predominates the whole of her sex. It was not that he felt any emotion akin to love for Irene Adler. All emotions, and that one particularly, were abhorrent to his cold, precise but admirably balanced mind. He was, I take it, the most perfect reasoning and observing machine that the world has seen, but as a lover he would have placed himself in a false position. He never spoke of the softer passions, save with a gibe and a sneer. They were admirable things for the observer--excellent for drawing the veil from mens motives and actions. But for the trained reasoner to admit such intrusions into his own delicate and finely adjusted temperament was to introduce a distracting factor which might throw a doubt upon all his mental results. Grit in a sensitive instrument, or a crack in one of his own high-power lenses, would not be more disturbing than a strong emotion in a nature such as his. And yet there was but one woman to him, and that woman was the late Irene Adler, of dubious and questionable memory.
I had seen little of Holmes lately. My marriage had drifted us away from each other. My own complete happiness, and the home-centred interests which rise up around the man who first finds himself master of his own establishment, were sufficient to absorb all my attention, while Holmes, who loathed every form of society with his whole Bohemian soul, remained in our lodgings in Baker Street, buried among his old books, and alternating from week to week between cocaine and ambition, the drowsiness of the drug, and the fierce energy of his own keen nature. He was still, as ever, deeply attracted by the study of crime, and occupied his immense faculties and extraordinary powers of observation in following out those clues, and clearing up those mysteries which had been abandoned as hopeless by the official police. From time to time I heard some vague account of his doings: of his summons to Odessa in the case of the Trepoff murder, of his clearing up of the singular tragedy of the Atkinson brothers at Trincomalee, and finally of the mission which he had accomplished so delicately and successfully for the reigning family of Holland.
Beyond these signs of his activity, however, which I merely shared with all the readers of the daily press, I knew little of my former friend and companion.
One night--it was on the twentieth of March, 1888--I was returning from a journey to a patient (for I had now returned to civil practice), when my way led me through Baker Street. As I passed the
well-remembered door, which must always be associated in my mind with my wooing, and with the dark incidents of the Study in Scarlet, I was seized with a keen desire to see Holmes again, and to
know how he was employing his extraordinary powers.
His rooms were brilliantly lit, and, even as I looked up, I saw his tall, spare figure pass twice in a dark silhouette against the blind. He was pacing the room swiftly, eagerly, with his head sunk
upon his chest and his hands clasped behind him. To me, who knew his every mood and habit, his attitude and manner told their own story. He was at work again. He had risen out of his drug-created
dreams and was hot upon the scent of some new problem. I rang the bell and was shown up to the chamber which had formerly been in part my own.
His manner was not effusive. It seldom was; but he was glad, I think, to see me. With hardly a word spoken, but with a kindly eye, he waved me to an armchair, threw across his case of cigars, and
indicated a spirit case and a gasogene in the corner. Then he stood before the fire and looked me over in his singular introspective fashion.
`;

$("#input1").val(textoEn);


<? } ?>

/*
const e = React.createElement;

React.render(
  e('div', null, 'Hello World'),
  document.getElementById('root')
);

*/

/*
var Hello = React.createClass({
  displayName: 'Hello',
  render: function() {
    return React.createElement("div", null, "Hello ", this.props.name);
  }
});

ReactDOM.render(
  React.createElement(Hello, {name: "World"}),
  document.getElementById('up-screen')
);
*/

currentColor="green";

function cambiarColores(x){
  if(x==1){ bColors=0; currentColor="green";  }
  if(x==2){ bColors=0; currentColor="blue"; }
  if(x==3){ bColors=0; currentColor="gray"; }
  if(x==4){ bColors=1; bRc=0; }
  if(x==5){ if(bColors==0){ bColors=1; } bRc=1; clearTimeout(killIntervalRc); }
  $("body").css("color",currentColor);
}

<? if (isset($_GET["skew"])){ ?> window.onload = function () { $("#velocityFlash").val("200"); $("#transform-select").val("4"); cambiarTransformation(4); play();  } <? } ?>

<? $vel=300; 
  if(isset($_GET["vel"])){ $vel=intval($_GET["vel"]); ?>


  $("#velocityFlash").val("<?=$vel?>");

  calcularTiempo();



<? } ?>

<?

if(isset($_GET[exp])){

  if($_GET[exp]==8){  ?> $("#readingMode").val("6"); readingMode=n('readingMode'); init(); <? } 
}
?>

var contadorRnd;
function getRndTxt(){
    contadorRnd++;
    if(contadorRnd>12)
      return;

    $.ajax({url: "http://leerencolores.appspot.com/multiReader2?rnd=1&libro=aleatory&cPage=aleatory", success: function(result){
        $("#input1").val(result);
       // mode=1; bPrev=0; bNext=0;  play();
       stopText();
    }});
}

cambiarColores(1);


_ww=$(window).width();
if(_ww<=1000){


  // $("#control").css("height","100px;")
  $("#control").css("zoom","3")
  $("#center-screen").css("zoom","3")
  // $("#center-screen").css("margin-bottom","100px;")
  $("#control").css("z-index","1000")
}

$("#velocityFlash").val("100");
calcularTiempo();

</script>

</body>
</html>