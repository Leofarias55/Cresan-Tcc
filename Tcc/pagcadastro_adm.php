<?php
include 'conexao.php';


<div class="content update">
	<h2>cadastrar administrador</h2>
    <form action="criar.php" method="post">
        <label for="id">ID</label>
        <label for="usuario">usuario</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="nome" placeholder="" id="nome">
        <label for="senha">Senha </label>
        <input type="submit" value="Cadastrar">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>