<?php
$carpetaAdjunta="pagos/";
//Cont
$Imagenes = count($_FILES['archivos']['name']);
//var_dump($_FILES);
for($i=0;$i<$Imagenes;$i++)
{
  $nombreArchivo=$_FILES['archivos']['name'][$i];
  $nombreTemporal=$_FILES['archivos']['tmp_name'][$i];
  $rutaArchivo=$carpetaAdjunta.$nombreArchivo;
  //var_dump($rutaArchivo);
  move_uploaded_file($nombreTemporal,$rutaArchivo);
  $infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","url"=>"borrar.php","key"=>$nombreArchivo);
  $ImagenesSubidas[$i]="<img height='120px' src='$rutaArchivo' class='file-preview-image'>";

}

$arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,"initialPreview"=>$ImagenesSubidas);
echo json_encode($arr);

?>
