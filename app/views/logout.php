<?php
    // Inicia a sessão
    session_start();

    // Destroi a sessão
    session_destroy();

    // Redireciona para a página de login (ou qualquer outra página)
    header('Location: home');
    exit;
?>