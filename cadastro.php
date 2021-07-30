<html>
    <head> 
        <link rel="stylesheet" type="text/css" href="cadastro.css">
        <title>CADASTRO USUÁRIO</title>
        <meta name="author" content="Maria Eduarda Teixeira de Oliveira">
    <head>
    <body>
        <div class = cabecalho>
            <h2>Formulário</h2>
        </div>
        
        <br>
        <br>
        <div class="log">
        <form class="formu" action= "dados.php" name = "formcadastro" method="POST">
            <label>Nome completo: </label>
            <input class="caixa" type="text" name="nome"><BR>
            <label>Nome de usuário: </label>
            <input class="caixa" type="text" name="login"><BR>
            <label>email: </label>
            <input class="caixa" type="text" name="email"><BR>
            <label>Senha: </label>
            <input class="caixa" type="password" name="senha"><BR>
            <input class="button" type="submit" value="enviar">
            <li><a class="button" href="login.php">Já possui cadastro</a></li>
        </form>
        <div>
    </body>
</html>