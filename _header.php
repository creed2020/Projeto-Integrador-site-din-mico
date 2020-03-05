<?php

// Tratamento do título da página
if ($titulo == "") {
    $titulo = "Apetitosa ";
} else {
    $titulo = "{$titulo} - Apetitosa";
}

// Tratamento do CSS da página
if ($css != "") {
    $css = "<link rel=\"stylesheet\" href=\"{$css}\">\n";
} else {
    $css = null;
}

// Tratamento do JavaScript da página --> _footer.php
if ($js != "") {
    $js = "<script src=\"{$js}\"></script>\n";
} else {
    $js = null;
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" href="/img/logo3.png">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <?php echo $css ?>
</head>
<body>
<a id="topo"></a>

<div class="wrap">

    <header class="header">
        <a href="/" title="Apetitosa"><img src="img/logo3.png" alt="Sem Nome"></a>
        <h1>Apetitosa</h1>
    </header>

    <nav class="nav">
        <a href="/"><i class="fas fa-fw fa-home"></i></a>
        <div id="menulinks">
            <a <?php echo ( $menu == 'cardápio' ) ? 'class="active"' : null ?> href="/cardápio.php" id="cardápio" title="cardápio do site"><i class="fas fa-sign-in-alt"></i><span> cardápio</span></a>
            <a <?php echo ( $menu == 'cadastrar' ) ? 'class="active"' : null ?> href="/cadastrar.php" id="cadastrar" title="cadastrar no site"><i class="fas fa-address-card"></i><span> cadastrar</span></a>
            <a <?php echo ( $menu == 'faça seu pedido' ) ? 'class="active"' : null ?> href="/pedido.php" id="pedido" <title="Faça seu pedido"><i class="fas fa-address-card"></i><span> Faça seu pedido</span></a>
            <a <?php echo ( $menu == 'sobre' ) ? 'class="active"' : null ?> href="/sobre.php"><i class="fas fa-fw fa-info-circle"></i> Sobre</a>
        </div>
        <a href="#menu" id="menu"><i class="fas fa-fw fa-bars"></i></a>
    </nav>

    <main class="main">

        
        
