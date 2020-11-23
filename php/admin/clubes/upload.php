<?php 
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../controllers/clubes/clubCategoria.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <form action="../../controllers/upload-controller.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="">
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="">
                    </div>
                    <div class="form-group">
                        <label for="año_fundacion">Año de fundación</label>
                        <input type="number" class="form-control" id="año_fundacion" name="año_fundacion" value="">
                    </div>
                    <div class="form-group">
                        <label for="origenes">Origenes</label>
                        <input type="text" class="form-control" id="origenes" name="origenes" value="">
                    </div>
                    <select name="id_categoria">
                    <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?php echo $categoria->id_categoria ?>"><?php echo $categoria->nombre ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="file" name="escudo" value="">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <input type="hidden" name="id" value="">
                </form>
            </div>
        </div>
    </div>
</body>
</html>