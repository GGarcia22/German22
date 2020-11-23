<?php
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../controllers/clubes/clubID.php'; ?>


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
            <div class="col-md-12 col-xs-12 col-ml-12">
                <div class="card my-3">
                <div class="card-body">
                    <form action="../../controllers/delete-controller.php" method="POST">
                        <input type="hidden" name="id" id="id" value="<?php echo $club->id; ?>">

                        <h4>Desea borrar club?</h4>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Si</button>
                        </div>
                        </form>
                    <div class="form-group">
                        <a class="btn btn-primary" href="/TP2/php/admin/clubes/index.php">No</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>