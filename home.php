<?php require 'index.php';
require 'php/controllers/clubes/clubName.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubes Escocia</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php if (count($clubes)) : ?>
            <?php foreach ($clubes as $club) : ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="escudos/<?php echo $club->escudo; ?>" class="card-img" alt="<?php echo $club->nombre ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $club->nombre ?></h5>
                                    <p class="card-text"><?php echo $club->origenes ?></p>
                                    <p class="card-text"><small class="text-muted">Ciudad: <?php echo $club->ciudad ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <h1>No hay clubes</h1>
        <?php endif; ?>
    </div>
</div>
</body>
</html>