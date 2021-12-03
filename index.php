<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de usuarios</h1>
		<input type="text" name="NomCal" placeholder="Nombre calle">
		<input type="number" name="NumCas" placeholder="Numero de casa">
		<input type="text" name="NomCol" placeholder="Nombre de colonia">
		<input type="number" name="CodPos" placeholder="Codigo Postal">
    	<input type="text" name="NomUs" placeholder="Nombre completo">
		<input type="text" name="ApelUs" placeholder="Apellido completo">
    	<input type="email" name="CorEle" placeholder="Email">
		<input type="password" name="Cont" placeholder="Contrasena">
    	<input type="submit" name="registro">
    </form>
        <?php 
        include("usuarios.php");
        ?>
</body>
</html>