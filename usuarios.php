<?php 

include("con_db.php");

if (isset($_POST['registro'])) {
    if (strlen($_POST['NomCal']) >= 1 && strlen($_POST['NumCas']) >= 1 && strlen($_POST['NomCol']) >= 1 && strlen($_POST['CodPos']) >= 1 && strlen($_POST['NomUs']) >= 1 && strlen($_POST['ApelUs']) >= 1 && strlen($_POST['CorEle']) >= 1 && strlen($_POST['Cont']) >= 1) {
	    $NomCal = trim($_POST['NomCal']);
		$NumCas = trim($_POST['NumCas']);
		$NomCol = trim($_POST['NomCol']);
		$CodPos = trim($_POST['CodPos']);
		$NomUs = trim($_POST['NomUs']);
		$ApelUs = trim($_POST['ApelUs']);
	    $CorEle = trim($_POST['CorEle']);
		$Cont = trim($_POST['Cont']);
	    $consulta = "INSERT INTO usuarios(NomCal, NumCas, NomCol, CodPos, NomUs, ApelUs, CorEle, Cont) VALUES ('$NomCal', '$NumCas', '$NomCol', '$CodPos', '$NomUs', '$ApelUs', '$CorEle', '$Cont')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
          <?php
    }
}

?>