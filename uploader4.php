<?php
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
if ($_FILES[uploadedfile][size]>10000000)
{
	?>
   		<script languaje="javascript">
    	alert("Archivo muy grande (mayor a 10MB)");
    	location.href = document.referrer;
   		</script>
  	<?
    $uploadedfileload="false";
}
$file_name=$_FILES[uploadedfile][name];
$add="varios/$file_name";
if($uploadedfileload=="true")
{
	if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add))
	{
		?>
   		<script languaje="javascript">
    	alert("Archivo subido satisfactoriamente");
    	location.href = document.referrer;
   		</script>
  	<?
	}
	else
	{
		?>
   		<script languaje="javascript">
    	alert("Error al subir el archivo");
    	location.href = document.referrer;
   		</script>
  	<?
	}
}
?>
