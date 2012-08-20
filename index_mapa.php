<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title>Vote en alerta</title>
<title>Documento sin t&iacute;tulo</title>
<link rel="STYLESHEET" type="text/css" href="estilos.css">
<script>
function seleccion_departamento(id){
document.formulario.departamento.value=id;
document.getElementById('resul').innerHTML = id;
}

</script>
<script>
function seleccion_partido(id){
document.formulario.partido.value=id;
document.getElementById('partido').innerHTML = id;
}
/* function comprobar() {
//añadir aqui cualquier comprobacion al enviar el formulario

if (document.formulario.departamento.value == '' || document.formulario.partido.value== '')
 {
	 alert('Escoja al menos un departamento o un partido'); 
	return false;
	 
	 }
 
 // si llega hasta aquí está bien todo
document.formulario.submit();
return true;
  
 }*/
</script>

<meta property="og:image" content="http://www.conlupa.co/imagenes/logo.png" />
    
</head>

<body>

 <div id="fb-root"></div>
 
 
 
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript" language="javascript"> 
<!--//
var terra_info_service = "PubCO";
var terra_info_channel = "co.noticias.votebien";
var terra_info_channeldetail = "voto_alerta";
var terra_info_type = "cap";
var terra_info_id = "home_2010";
var terra_stats_idCrtfc = 21926;
//-->
</script>
<script type="text/javascript" charset="UTF-8" src="http://s1.trrsf.com/metrics/js/co/contentpar.js"></script>

<div id="contenedor"> 
<div id="encabezado"><span class="titulo">Los elegidos en alerta: <img src="http://www.conlupa.co/imagenes/logo.png" width="190" align="bottom">      </span><br>
  <br>
  Realice la b&uacute;squeda por su criterio de interés: departamento, partido o riesgo para ver los alcaldes y gobernadores elegidos que tienen antecedentes judiciales,  disciplinarios, o familiares o apoyos cuestionados. Despues de hacer su selecci&oacute;n haga clic en el bot&oacute;n buscar.</div>
<br>
<form action="respuesta_formulario_escogido.php" method="post" name="formulario">
<div class=mapa>
  <div id="top_1">Seleccione un departamento</div>
  <div id="resul"></div>
  <img src="imagenes/mapa_general.gif" name="mapacol" width="293" height="415" border="0" usemap="#mapacolMap" id="mapacol">
  <map name="mapacolMap">
    <area shape="poly" coords="106,158,113,164,118,168,122,172,129,172,133,163,134,170,140,165,149,158,149,149,154,153,156,145,154,140,147,136,149,130,146,124,141,122,133,123,127,120,127,112,124,110,124,121,121,128,123,139,115,148" href="javascript:seleccion_departamento('Santander')" alt="Santander" title="Santander">
    <area shape="poly" coords="109,163,106,170,114,172,120,182,126,177,131,183,132,192,142,198,146,187,148,181,151,182,162,173,159,165,160,155,166,149,168,140,163,138,155,152,150,159,140,169,129,174,121,173" href="javascript:seleccion_departamento('Boyacá')" alt="Boyaca" title="Boyaca">
    <area shape="poly" coords="101,198,103,183,105,174,111,173,116,180,119,184,126,180,129,185,130,193,142,199,142,210,134,208,128,201,125,211,119,213,119,205,122,200,119,194,115,196,113,213,108,220,107,209,99,208" href="javascript:seleccion_departamento('Cundinamarca')" alt="Cundinamarca" title="Cundinamarca">
    <area shape="poly" coords="144,198,150,208,166,205,190,194,206,177,214,173,219,163,209,162,195,162,176,160,161,163,165,174,152,186" href="javascript:seleccion_departamento('Casanare')" alt="Casanare" title="Casanare">
    <area shape="poly" coords="60,87,68,101,62,119,64,130,76,130,91,114,102,110,107,117,106,129,109,131,110,139,120,134,120,141,111,149,106,159,104,172,94,171,89,178,82,172,75,177,69,172,66,161,54,159,50,144,61,141,58,131,50,117,56,113,53,99" href="javascript:seleccion_departamento('Antioquia')" alt="Antioquia" title="Antioquia">
    <area shape="poly" coords="41,104,41,122,29,128,39,148,43,168,40,185,40,209,56,215,59,204,66,191,65,181,69,177,63,163,51,162,47,143,57,140,54,132" href="javascript:seleccion_departamento('Chocó')" alt="Choco" title="Choco">
    <area shape="poly" coords="72,75,64,87,72,101,64,118,66,127,76,126,85,117,95,110,101,105,98,100,91,102,86,92,89,85,80,78" href="javascript:seleccion_departamento('Córdoba')" alt="Cordoba" title="Cordoba">
    <area shape="poly" coords="84,62,93,73,105,88,107,104,103,107,98,98,92,99,90,92,92,85,82,76,83,69" href="javascript:seleccion_departamento('Sucre')" alt="Sucre" title="Sucre">
    <area shape="poly" coords="86,50,91,51,99,61,103,76,124,90,126,107,121,110,119,132,112,132,109,113,109,90,97,75,85,60" href="javascript:seleccion_departamento('Bolívar')" alt="Bolivar" title="Bolivar">
    <area shape="poly" coords="100,33,91,45,97,56,102,45" href="javascript:seleccion_departamento('Atlántico')" alt="Atlantico" title="Atlantico">
    <area shape="poly" coords="124,29,106,38,100,58,105,74,124,88,118,59,129,44" href="javascript:seleccion_departamento('Magdalena')" alt="Magdalena" title="Magdalena">
    <area shape="poly" coords="132,45,121,61,126,87,130,120,135,119,133,85,145,53" href="javascript:seleccion_departamento('Cesar')" alt="Cesar" title="Cesar">
    <area shape="poly" coords="131,36,145,49,185,5,171,5" href="javascript:seleccion_departamento('La Guajira')" alt="Guajira" title="Guajira">
    <area shape="poly" coords="135,86,138,117,148,122,155,140,164,134,148,88" href="javascript:seleccion_departamento('Norte de Santander')" alt="Norte de Santander" title="Norte de Santander">
    <area shape="poly" coords="174,137,164,157,225,160,211,140" href="javascript:seleccion_departamento('Arauca')" alt="Arauca" title="Arauca">
    <area shape="poly" coords="191,195,192,245,231,222,268,214,267,160,223,165" href="javascript:seleccion_departamento('Vichada')" alt="Vichada" title="Vichada">
    <area shape="poly" coords="279,230,267,218,235,224,200,251,221,273,257,272,282,260" href="javascript:seleccion_departamento('Guainía')" alt="Guainia" title="Guainia">
    <area shape="poly" coords="212,264,180,281,170,306,218,344,213,305,220,279" href="javascript:seleccion_departamento('Vaupes')" alt="Vaupes" title="Vaupes">
    <area shape="poly" coords="122,338,149,385,200,380,220,395,222,351,184,319,163,339" href="javascript:seleccion_departamento('Amazonas')" alt="Amazonas" title="Amazonas">
    <area shape="poly" coords="100,244,70,287,126,331,161,335,179,319,142,299,110,275" href="javascript:seleccion_departamento('Caquetá')" alt="Caqueta" title="Caqueta">
    <area shape="poly" coords="164,246,129,262,131,284,151,288,166,300,184,274,207,263,187,245" href="javascript:seleccion_departamento('Guaviare')" alt="Guaviare" title="Guaviare">
    <area shape="poly" coords="118,220,105,240,111,269,123,273,128,257,164,244,187,241,186,202,149,212" href="javascript:seleccion_departamento('Meta')" alt="Meta" title="Meta">
    <area shape="poly" coords="69,279,99,241,89,232,76,254,60,267" href="javascript:seleccion_departamento('Huila')" alt="Huila" title="Huila">
    <area shape="poly" coords="53,286,70,292,118,329,110,334,45,302" href="javascript:seleccion_departamento('Putumayo')" alt="Putumayo" title="Putumayo">
    <area shape="poly" coords="22,250,51,283,40,306,2,276" href="javascript:seleccion_departamento('Nariño')" alt="Nari&ntilde;o" title="Nariño">
    <area shape="poly" coords="38,236,29,252,51,280,63,286,57,265,74,250,63,238" href="javascript:seleccion_departamento('Cauca')" alt="Cauca" title="Cauca">
    <area shape="poly" coords="97,186,77,219,73,243,98,230,102,214,94,207" href="javascript:seleccion_departamento('Tolima')" alt="Tolima" title="Tolima">
    <area shape="poly" coords="47,217,40,235,68,234,77,212,69,195,60,217" href="javascript:seleccion_departamento('Valle del Cauca')" alt="Valle del Cauca" title="Valle del Cauca">
    <area shape="poly" coords="80,198,78,210,87,199" href="javascript:seleccion_departamento('Quindío')" alt="Quindio" title="Quindio">
    <area shape="poly" coords="73,181,67,187,76,198,85,195,74,191" href="javascript:seleccion_departamento('Risaralda')" alt="Risaralda" title="Risaralda">
    <area shape="poly" coords="82,179,78,189,87,192,101,182,98,174,89,181" href="javascript:seleccion_departamento('Caldas')" alt="Caldas" title="Caldas">
  </map> 
  
  
  </div>
<div class=partidosp>
  <div id="top_2">Seleccione el partido</div>
  
  <table width="340" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr align="center" valign="middle">
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('ASI')"><img src="imagenes/logo_asi.jpg" width="105" height="105" alt="ASI" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Cambio Radical')"><img src="imagenes/logo_cambior.jpg" width="105" height="105" alt="Cambio Radical" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Partido Conservador')"><img src="imagenes/logo_conservador.jpg" width="105" height="105" alt="Conservador" border="0"></a></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Partido Liberal')"><img src="imagenes/logo_liberal.jpg" width="105" height="105" alt="Liberal" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Mira')"><img src="imagenes/logo_mira.jpg" width="105" height="105" alt="Mira" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('PIN')"><img src="imagenes/logo_pin.jpg" width="105" height="105" alt="PIN" border="0"></a></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="middle">&nbsp;</td>
    </tr>
  <tr>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Polo Democrático')"><img src="imagenes/logo_polo.jpg" width="105" height="105" alt="Polo" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Partido Verde')"><img src="imagenes/logo_verde.jpg" width="105" height="105" alt="Verde" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Partido de La U')"><img src="imagenes/partidoU.jpg" width="105" height="105" alt="U" border="0"></a></td>
  </tr>
  
  
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Aico')"><img src="imagenes/logo_aico.jpg" width="105" height="105" alt="Polo" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Afrovides')"><img src="imagenes/logo_afrovides.jpg" width="105" height="105" alt="Verde" border="0"></a></td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('MIO')"><img src="imagenes/mio.jpg" width="105" height="105" alt="U" border="0"></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
    <td align="center" valign="middle"><a href="javascript:seleccion_partido('Firmas')"><img src="imagenes/firmas.jpg" width="105" height="105" alt="Verde" border="0"></a></td>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
  <div id="partido"></div>
  </table>
</div>

<div class="candidatos">
  <div id="top_3">Riesgos</div>  <table width="230" border="0" align="center" cellpadding="5" cellspacing="0"><tr><td>
 <br> <font color="red" size="+1.8">Alerta roja</font><br><br>
  <input type="checkbox" name="csp">
Candidatos  condenados o sancionados<br><br><font color="#FF6600" size="+1.8">Alerta naranja</font><br><br>
<input name="InvesPropias" type="checkbox" >Candidatos con investigaciones en la Procuraduría o la Fiscalía<br><br><input type="checkbox" name="csf">
Candidatos con familiares condenados o sancionados<br><br>
<input type="checkbox" name="ijdf"> Candidatos con familiares  investigados <br><br><font color="#FFCC00" size="+1.8">Alerta amarilla</font><br><br>
 <input type="checkbox" name="padrinos">
Candidatos con presuntos respaldos de personajes cuestionados<br>
<br>


</td></tr>
    <tr>
      <td><strong>Candidatos al:</strong>
<select name="cargo" id="cargo">
  <option value="">Seleccion una opci&oacute;n</option>
         
          <option value="Alcaldía">Alcaldía</option>
         
          <option value="Gobernación">Gobernación</option>
        </select></td>
      </tr>



  <table width="230" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td></td>
    </tr>
   
    
    <input name="partido" type="hidden" />
    <input name="departamento" type="hidden" />

    
    <tr>
      <td><input type="submit" name="send" id="send" onClick="comprobar()" value="Buscar" /></td>
    </tr>
     </table>
</form>
</div>
<table><td valign="bottom"><div class="fb-like" data-href="http://conlupa.co" data-send="true" data-width="450" data-show-faces="true" ></div>

</td>
  </tr>
  <tr>
    <td valign="bottom"><div class="fb-comments" data-href="http://conlupa.co" data-num-posts="4" data-width="700"></div>
    </table>
<div id="footer">Todos los derechos reservados de la herramienta de navegaci&oacute;n: conlupa.co</div><script language="javascript">terra_stats_metrics();</script>
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12220435-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>