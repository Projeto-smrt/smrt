<?php

include_once './usuario/autenticacao.php';

startSession();

require_once './cabecalho.php';
include_once './bd/conectar.php';
if (!estaLogado()) {
    ?>


    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

        <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">
                <hgroup>
                    <h1>SMRT</h1>        
                    <h3>Bem-vindo ao site de mobitoramento do Rio Tubarão - SC</h3>
                </hgroup>
                <div class="btn btn-hero btn-lg" role="button"><a href="srmt/usuario/entrar.php" >Cadastre-se</a></i>  </div>
            </div>
        </div>
    </div>

    <?php
} else {
    header("Location: usuario/listar.php");
}
require_once 'rodape.php';
?>

