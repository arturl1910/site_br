<?php
$campeoes = [
    ['ano' => 2003, 'time' => 'Cruzeiro', 'img' => 'img/cruzeiro2003.jpg'],
    ['ano' => 2004, 'time' => 'Santos', 'img' => 'img/2004.jpg'],
    ['ano' => 2005, 'time' => 'Corinthians', 'img' => 'img/2005.jpg'],
    ['ano' => 2006, 'time' => 'São Paulo', 'img' => 'img/2006.jpg'],
    ['ano' => 2007, 'time' => 'São Paulo', 'img' => 'img/2007.jpg'],
    ['ano' => 2008, 'time' => 'São Paulo', 'img' => 'img/2008.jpg'],
    ['ano' => 2009, 'time' => 'Flamengo', 'img' => 'img/2009.png'],
    ['ano' => 2010, 'time' => 'Fluminense', 'img' => 'img/2010.jpg'],
    ['ano' => 2011, 'time' => 'Corinthians', 'img' => 'img/2011.jpg'],
    ['ano' => 2012, 'time' => 'Fluminense', 'img' => 'img/2012.jpg'],
    ['ano' => 2013, 'time' => 'Cruzeiro', 'img' => 'img/2013.jpg'],
    ['ano' => 2014, 'time' => 'Cruzeiro', 'img' => 'img/2014.jpg'],
    ['ano' => 2015, 'time' => 'Corinthians', 'img' => 'img/2015.jpg'],
    ['ano' => 2016, 'time' => 'Palmeiras', 'img' => 'img/2016.jpg'],
    ['ano' => 2017, 'time' => 'Corinthians', 'img' => 'img/2017.jpg'],
    ['ano' => 2018, 'time' => 'Palmeiras', 'img' => 'img/2018.jpg'],
    ['ano' => 2019, 'time' => 'Flamengo', 'img' => 'img/2019.jpg'],
    ['ano' => 2020, 'time' => 'Flamengo', 'img' => 'img/2020.jpg'],
    ['ano' => 2021, 'time' => 'Atletico-MG', 'img' => 'img/2021.jpg'],
    ['ano' => 2022, 'time' => 'Palmeiras', 'img' => 'img/2022.jpg'],
    ['ano' => 2023, 'time' => 'Palmeiras', 'img' => 'img/2023.jpg'],
    ['ano' => 2024, 'time' => 'Botafogo', 'img' => 'img/2024.jpg'],
    ['ano' => 2025, 'time' => 'Flamengo', 'img' => 'img/2025.jpg'],
];
?>

<div class="container my-5">
    <h1 class="text-center text-success mb-4">Campeões Brasileiros dos Pontos Corridos</h1>
    <hr class="border-warning border-3 mb-5">

    <div class="row">
        <?php foreach ($campeoes as $campeao): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="<?php echo $campeao['img']; ?>" class="card-img-top img" alt="<?php echo $campeao['time']; ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $campeao['time']; ?></h5>
                        <p class="card-text text-muted">Campeao <?php echo $campeao['ano']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>