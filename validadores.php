<?php
header("Content-Type: text/html;charset=utf-8");
require_once("connect.php");
function funciexist($rut)
{
$result = mysql_query("SELECT * FROM usuario WHERE rut = '$rut'");
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["rut"] == $rut)
 {
    ?>
    <script languaje="javascript">
    alert("Ya inicio sesion");
    location.href = "intranet.php";
    </script>
  <? 
   return TRUE;
 }
}
}
function adminexist($rut)
{
  $result = mysql_query("SELECT * FROM admin WHERE rut = '$rut'");
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["rut"] == $rut)
 {
    ?>
    <script languaje="javascript">
    alert("UD.  es administrador");
    location.href = "intranetadmin.php";
    </script>
  <? 
   return TRUE;
 }
}
}
function admin($rut)
{
$result = mysql_query("SELECT * FROM admin WHERE rut = '$rut'");
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["rut"] == $rut)
 {

   return TRUE;
 }
 else
 {
  ?>
    <script languaje="javascript">
    alert("UD. no es administrador");
    location.href = document.referrer;
    </script>
  <? 
 }
}
}
function valnom($n)
{
    if(!preg_match('/^[a-zñA-ZÑ, ]*$/',$n))
    {
     	?>
 			<script languaje="javascript">
  			alert("Nombre o apellido invalido");
  			location.href = document.referrer;
			</script>
		<? 
		return FALSE;
    }
    elseif ($n == '') 
    {
    	?>
 			<script languaje="javascript">
  			alert("Nombre o apellido vacio");
  			location.href = document.referrer;
			</script>
		<? 
    }
    else
    {
    	return TRUE;
    }
}
function valmail($email) 
{
	// Primero, checamos que solo haya un símbolo @, y que los largos sean correctos
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
	?>
		<script languaje="javascript">
        alert("mail incorrecto!!");
		location.href = document.referrer;
		</script>
	<? 
    return false;
  }
  // se divide en partes para hacerlo más sencillo
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) 
	{
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) 
		{
	    ?>
		<script languaje="javascript">
        alert("mail incorrecto!!!");
		location.href = document.referrer;
        </script>
        <? 
       return false;
    }
  } 
  // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
     $domain_array = explode(".", $email_array[1]);
     if (sizeof($domain_array) < 2) 
		 {
        return false; // No son suficientes partes o secciones para se un dominio
     }
     for ($i = 0; $i < sizeof($domain_array); $i++) 
		 {
        if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
		{
		    ?>
	  		<script languaje="javascript">
        	alert("mail incorrecto!!!!");
			location.href = document.referrer;
        	</script>
        	<? 
           return false;
        }
     }
  }
  return true;
}
function valnum($n)
{
    if(!preg_match('/^[0-9, ]*$/',$n))
    {
     	?>
 			<script languaje="javascript">
  			alert("Numero invalido");
  			location.href = document.referrer;
			</script>
		<? 
		return FALSE;
    }
    elseif ($n == '') 
    {
    	?>
 			<script languaje="javascript">
  			alert("Numero vacio");
  			location.href = document.referrer;
			</script>
		<? 
    }
    else
    {
    	return TRUE;
    }
}
function valida_rut($r)
{
    if ($r == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Rut vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
  $r=strtoupper(ereg_replace('\.|,|-','',$r));
  $sub_rut=substr($r,0,strlen($r)-1);
  $sub_dv=substr($r,-1);
  $x=2;
  $s=0;
  for ( $i=strlen($sub_rut)-1;$i>=0;$i-- )
  {
    if ( $x >7 )
    {
      $x=2;
    }
    $s += $sub_rut[$i]*$x;
    $x++;
  }
  $dv=11-($s%11);
  if ( $dv==10 )
  {
    $dv='K';
  }
  if ( $dv==11 )
  {
    $dv='0';
  }
  if ( $dv==$sub_dv )
  {
    return TRUE;
  }
  else
  {
    ?>
    <script languaje="javascript">
    alert("Rut incorrecto");
    location.href = document.referrer;
    </script>
      <?
    return FALSE;
  }
}
function valpassword($password1,$password2)
{

  $aux = strcmp($password1, $password2);
  $aux2 =  strlen($password1);
  if($aux2 < 8)
  {
    ?>
    <script languaje="javascript">
    alert("muy corta o vacia (minimo 8 caracteres)");
    location.href = document.referrer;
    </script>
    <?
  }
  if($aux == 0) 
  {
    return TRUE;
  }
  else
  {
    ?>
    <script languaje="javascript">
    alert("Las contraseñas ingresadas no son iguales");
    location.href = document.referrer;
    </script>
    <?
    return FALSE;
  }
}
function valdireccion($dir)
{
    $aux = strlen($dir);
    if ($aux < 5) 
    {
    ?>
    <script languaje="javascript">
    alert("Direccion invalida(muy corta)");
    location.href = document.referrer;
    </script>
    <?
    return FALSE;
    }
    else
    {
      return TRUE;
    }
}
function valcargo($n)
{
    if(!preg_match('/^[a-zñA-ZÑ, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("cargo invalido");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("cargo vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valsector($n)
{
    if(!preg_match('/^[a-zñA-ZÑ, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("Sector invalido");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Sector vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valanexo($n)
{
    if(!preg_match('/^[0-9, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("anexo invalido");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("anexo vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valjornadas($n)
{
    if(!preg_match('/^[0-9, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("Jornadas invalidas");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Jornadas vacias");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valnivel($n)
{
    if(!preg_match('/^[0-9, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("Nivel invalido");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Nivel vacio");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valcategoria($n)
{
    if(!preg_match('/^[a-zñA-ZÑ, ]*$/',$n))
    {
      ?>
      <script languaje="javascript">
        alert("categoria invalida");
        location.href = document.referrer;
      </script>
    <? 
    return FALSE;
    }
    elseif ($n == '') 
    {
      ?>
      <script languaje="javascript">
        alert("Categoria vacia");
        location.href = document.referrer;
      </script>
    <? 
    }
    else
    {
      return TRUE;
    }
}
function valfecha($fecha_ingreso)
{
if (ereg("(0[1-9]|[12][0-9]|3[01])[/](0[1-9]|1[012])[/](19|20)[0-9]{2}", $fecha_ingreso)) 
{
return true;
} else 
{
return false;
?>
      <script languaje="javascript">
        alert("fecha invalida");
        location.href = document.referrer;
      </script>
    <? 
}
}        
?>