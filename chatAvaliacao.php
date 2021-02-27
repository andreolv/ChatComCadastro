<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php
    include_once 'config/bootstrapHead.php';
    ?>

    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $('#mensagens').animate({scrollTop: 9999}, 100);
            $('#mensagens').load('controller/ver.php');
            var RefreshId = setInterval(function () {
                $('#mensagens').load('controller/ver.php');
            }, 500);
            $.ajaxSetup({cache: false});
        });
    </script>
</head>
<body>
<script rel="script" src="js/script.js"></script>
<h1 align="center">Chat</h1>
<div class="row justify-content-between">
    <div class="col-lg-11">
Nome:  <?=$_SESSION['usunome']?>
    </div>
    <div class="col-lg-1">
        <button type="button" onclick="location.href = 'logout.php';" class="btn btn-danger">Sair</button>
    </div>
</div>
<hr>
<div id="mensagens"></div>
<form method="post" onsubmit="enviar();return false;">
    <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem">
</form>
</body>
</html>

<?php include_once 'config/bootstrapJS.php'; ?>