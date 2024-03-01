<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
 
	require_once 'classes/usuarios.php';
	$u = new usuario;
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-text">
            <h3>Seja bem vindo ao Painel BI</h3>
            </span>
            <button id="sair"><a id="sairb" href="index.php">Sair</a></button>
        </div>
    </nav>

    <iframe id="bi" title="SESAPI" width="1024" height="1060" src="https://app.powerbi.com/view?r=eyJrIjoiZGJmNzdhODAtNmYwZC00NjM3LThmYzktMmIxYmViZDA3YzM2IiwidCI6IjI4NDg1Y2VhLWJiODUtNGUzOC05YzQyLTM0OWFhYjYyNGI2NSJ9" frameborder="0" allowFullScreen="true"></iframe>
</body>
</html>



