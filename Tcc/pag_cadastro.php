<?php
include 'conexao.php';


<div class="content update">
	<h2>cadastrar cliente</h2>
    <form action="criar.php" method="post">
        <label for="id">ID</label>
        <label for="nome">Nome</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="nome" placeholder="" id="nome">
        <label for="email">Email</label>
        <label for="telefone">Telefone</label>
        <input type="text" name="email" placeholder="" id="email">
        <input type="text" name="telefone" placeholder="" id="telefone">
        <label for="cpf">CPF</label>
        <label for="senha">Senha </label>
        <input type="submit" value="Cadastrar">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>