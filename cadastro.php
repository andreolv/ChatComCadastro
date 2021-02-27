<head>
    <title>Chat | Login</title>
    <meta charset="utf-8">

    <?php include_once 'config/bootstrapHead.php'; ?>
    <link href="css/login.css" rel="stylesheet">

</head>
<body>
<div class="painel">
    <form id="loginusuario" method="post" action="controller/reqControll.php">

        <input type="hidden" name="requisicao" value="login">

        <div class="form-group">
            <label for="usuemail">E-mail:</label>
            <input type="email" class="form-control campo" id="usuemail" name="usuemail">
        </div>

        <div class="form-group">
            <label for="ususenha">Senha:</label>
            <input type="password" class="form-control campo" id="ususenha" name="ususenha">
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary col 6">Cadastrar</button>
        </div>
    </form>
</div>
</body>

<?php include_once 'config/bootstrapJS.php'; ?>