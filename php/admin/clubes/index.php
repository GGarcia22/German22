<?php
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../../php/controllers/clubes/clubName.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scothish Soccer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']): ?>
                    <div class="alert alert-<?php echo $_SESSION['alert']['type'] ?>">
                        <?php echo $_SESSION['alert']['message']; ?>
                    </div>
                <?php unset($_SESSION['alert']); ?>
                <?php endif; ?>

                <table class="table table-bordered striped">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clubes as $club): ?>
                            <tr>
                                <td><?php echo $club->nombre; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $club->id; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="delete.php?id=<?php echo $club->id; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="form-group">
                        <a class="btn btn-primary" href="/TP2/php/admin/clubes/upload.php">Agregar Club</a>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>