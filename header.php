<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $css; ?>">
    <title><?php echo $title; ?></title>
</head>
<body>

    <!-- Cabeçalho da página, onde apresenta o usuário logado -->
    <header>
            <div class="header">
                <div class="container-logo">
                    <img src="./imgs/ofi.png" id="logo-ofi" alt="Logo Cabeçalho"/>
                </div>
               <?php
                    include 'session.php';
               ?>
            </div>
    </header>

    