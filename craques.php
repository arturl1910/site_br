<?php
$craques = [
    ['nome' => 'Alex', 'clube' => 'Cruzeiro', 'img' => 'img_craques/2003.jpg', 'ano' => '2003', 'gols' => 23, 'assistencias' => 15], 
    ['nome' => 'Robinho', 'clube' => 'Santos', 'img' => 'img_craques/2004.jpg', 'ano' => '2004', 'gols' => 21, 'assistencias' => 9],
    ['nome' => 'Carlos Tevez', 'clube' => 'Corinthians', 'img' => 'img_craques/2005.jpg', 'ano' => '2005', 'gols' => 20, 'assistencias' => 8],
    ['nome' => 'Rogerio Ceni', 'clube' => 'Sao Paulo', 'img' => 'img_craques/2006.jpg', 'ano' => '2006', 'gols' => 8, 'assistencias' => 1],
    ['nome' => 'Rogerio Ceni', 'clube' => 'Sao Paulo', 'img' => 'img_craques/2006.jpg', 'ano' => '2007', 'gols' => 7, 'assistencias' => 2],
    ['nome' => 'Hernanes', 'clube' => 'Sao Paulo', 'img' => 'img_craques/2008.jpg', 'ano' => '2008', 'gols' => 6, 'assistencias' => 11],
    ['nome' => 'Diego Souza', 'clube' => 'Palmeiras', 'img' => 'img_craques/2009.jpg', 'ano' => '2009', 'gols' => 9, 'assistencias' => 12],
    ['nome' => 'Dario Conca', 'clube' => 'Fluminense', 'img' => 'img_craques/2010.jpg', 'ano' => '2010', 'gols' => 9, 'assistencias' => 16],
    ['nome' => 'Neymar', 'clube' => 'Santos', 'img' => 'img_craques/2011.jpg', 'ano' => '2011', 'gols' => 13, 'assistencias' => 11],
    ['nome' => 'Fred', 'clube' => 'Fluminense', 'img' => 'img_craques/2012.jpg', 'ano' => '2012', 'gols' => 20, 'assistencias' => 2],
    ['nome' => 'Everton Ribeiro', 'clube' => 'Cruzeiro', 'img' => 'img_craques/2013.jpg', 'ano' => '2013', 'gols' => 8, 'assistencias' => 12],
    ['nome' => 'Everton Ribeiro', 'clube' => 'Cruzeiro', 'img' => 'img_craques/2013.jpg', 'ano' => '2014', 'gols' => 10, 'assistencias' => 8],
    ['nome' => 'Renato Augusto', 'clube' => 'Corinthians', 'img' => 'img_craques/2015.jpg', 'ano' => '2015', 'gols' => 5, 'assistencias' => 7],
    ['nome' => 'Gabriel Jesus', 'clube' => 'Palmeiras', 'img' => 'img_craques/2016.jpg', 'ano' => '2016', 'gols' => 12, 'assistencias' => 4],
    ['nome' => 'Jo', 'clube' => 'Corinthians', 'img' => 'img_craques/2017.jpg', 'ano' => '2017', 'gols' => 18, 'assistencias' => 3],
    ['nome' => 'Dudu', 'clube' => 'Palmeiras', 'img' => 'img_craques/2018.jpg', 'ano' => '2018', 'gols' => 7, 'assistencias' => 14],
    ['nome' => 'Bruno Henrique', 'clube' => 'Flamengo', 'img' => 'img_craques/2019.jpg', 'ano' => '2019', 'gols' => 21, 'assistencias' => 10],
    ['nome' => 'Claudinho', 'clube' => 'RB Bragantino', 'img' => 'img_craques/2020.jpg', 'ano' => '2020', 'gols' => 18, 'assistencias' => 6],
    ['nome' => 'Hulk', 'clube' => 'Atletico Mineiro', 'img' => 'img_craques/2021.jpg', 'ano' => '2021', 'gols' => 19, 'assistencias' => 7],
    ['nome' => 'Gustavo Scarpa', 'clube' => 'Palmeiras', 'img' => 'img_craques/2022.jpg', 'ano' => '2022', 'gols' => 13, 'assistencias' => 12],
    ['nome' => 'Luis Suarez', 'clube' => 'Gremio', 'img' => 'img_craques/2023.jpg', 'ano' => '2023', 'gols' => 17, 'assistencias' => 11],
    ['nome' => 'Luiz Henrique', 'clube' => 'Botafogo', 'img' => 'img_craques/2024.jpg', 'ano' => '2024', 'gols' => 7, 'assistencias' => 3],
    ['nome' => 'Arrascaeta', 'clube' => 'Flamengo', 'img' => 'img_craques/2025.jpg', 'ano' => '2025', 'gols' => 18, 'assistencias' => 14],
];
?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-success">
            <i class="bi bi-star-fill text-warning"></i> Craques do Brasileirao
        </h1>
        <div class="divider mx-auto"></div>
        <p class="lead text-dark mt-3">Os melhores jogadores de cada edicao</p>
    </div>
    
    <div class="row g-4">
        <?php foreach($craques as $craque): ?>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="card h-100 border-0 shadow card-hover">
                <div class="position-relative">
                    <img src="<?php echo $craque['img']; ?>" class="card-img-top card-img-fixed" alt="<?php echo $craque['nome']; ?>">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2 fs-6">
                        <?php echo $craque['ano']; ?>
                    </span>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-1"><?php echo $craque['nome']; ?></h5>
                    <p class="text-muted mb-2">
                        <i class="bi bi-geo-alt-fill text-success"></i> <?php echo $craque['clube']; ?>
                    </p>
                    <hr class="my-2">
                    <div class="d-flex justify-content-around">
                        <div class="text-center">
                            <span class="fs-4 fw-bold text-success"><?php echo $craque['gols']; ?></span>
                            <p class="mb-0 small text-muted"><i class="bi bi-bullseye"></i> Gols</p>
                        </div>
                        <div class="text-center">
                            <span class="fs-4 fw-bold text-success"><?php echo $craque['assistencias']; ?></span>
                            <p class="mb-0 small text-muted"><i class="bi bi-hand-index"></i> Assists</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>