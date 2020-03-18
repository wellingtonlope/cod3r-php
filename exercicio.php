<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
              name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap"
              rel="stylesheet">
        <link href="recursos/css/estilo.css" rel="stylesheet">
        <link href="recursos/css/exercicio.css" rel="stylesheet">
        <title>Exercício PHP</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                    // include($_GET['dir'] . "/" . $_GET['file'] . ".php")
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
                ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS © <?= date('Y'); ?>
        </footer>
    </body>
</html>
