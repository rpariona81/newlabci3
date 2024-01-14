<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de encuestas">
    <meta name="author" content="Ronald Pariona">
    <title>
        <?php
        if (isset($titulo)) {
            echo $titulo;
        } else {
            echo "JM-Systems";
        }
        ?>
    </title>
    <!--<title><? //$titulo; 
                ?></title>-->
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/apphorizontal.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>

<body>

    <div id="wraper" class="container-fluid">