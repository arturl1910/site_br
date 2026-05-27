<?php
$_MENU = [
    'Home' => 'home.php',
    'Recordes' => 'recordes.php',
    'Campeoes' => 'campeoes.php',
    'Craques' => 'craques.php',
    'Contato' => 'contato.php'
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasileirao - Campeonato Brasileiro</title>
    <link href="bootstrap-5.3.8-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="?page=Home">
                <i class="bi bi-trophy-fill text-warning me-2"></i>Brasileirao
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php
                    $pagina_atual = $_GET['page'] ?? 'Home';
                    foreach($_MENU as $key => $value){
                        $active = ($pagina_atual == $key) ? 'active' : '';
                        echo '<li class="nav-item">
                                <a class="nav-link '.$active.' px-3" href="?page='.$key.'">'.$key.'</a>
                              </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <?php
        $pagina = $_GET['page'] ?? 'Home';
        if(array_key_exists($pagina, $_MENU)){
            if (file_exists($_MENU[$pagina])) {
                include $_MENU[$pagina];
            } else {
                echo $_MENU[$pagina];
            }
        } else {
            echo '<div class="container my-5 text-center">
                    <h1 class="text-danger"><i class="bi bi-exclamation-triangle"></i> Pagina nao encontrada</h1>
                  </div>';
        }
    ?>
</main>

<footer class="bg-success text-white text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-1"><i class="bi bi-trophy me-2"></i>Brasileirao - Campeonato Brasileiro</p>
        <small class="text-white-50">&copy; 2025 - Todos os direitos reservados</small>
    </div>
</footer>

<script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.js"></script>
</body>
</html>