<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índices dos Exercícios</h2>
    </header>
    
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                            Ola PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                            Integracao Html
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                            Integracao Css
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentario PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                            Desafio PHP
                            </a>
                        </li>
                    </ul>
                </div>
                
            </nav>


        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?=date('d/m/yy'); ?>
    </footer>
    

</body>
</html>
