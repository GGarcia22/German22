<?php require 'index.php';
require 'php/controllers/clubes/clubCategoria.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisiones de Escocia</title>
</head>
<body>
<div class="container">
        <div class="row">
            <?php foreach($categorias as $categoria): ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="home.php?id_categoria=<?php echo $categoria->id_categoria ?>"><?php echo $categoria->nombre ?></a>
                                </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>