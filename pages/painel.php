<?php
include("view/conexao.php");
session_start();
include('view/verifica_login.php');
?>
<div class="painel">
    <form class="painel" action="index.php?menuop=catalogo_painel" method="POST">
        <button type="submit">Editar Catalogo</button>
    </form>
    <form class="painel" action="view/logout.php">
        <button type="submit">Logout</button>
    </form>
</div>