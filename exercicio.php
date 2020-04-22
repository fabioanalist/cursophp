<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicios.css">
    <title>Curso PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índices dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                include($_GET['dir'] . "/" . $_GET['file'] . ".php" );
                //include("teste/teste.php");
            ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?=date('d/m/yy'); ?>
    </footer>
    

</body>
</html>
