<?php
session_start();
include_once("head.php");
include_once("nav.php");
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-ml-12">
                <div class="card my-3">
                    <h4 class='card-header'>Login</h4>
                    <div class="card-body">
                        <?php if(isset($_SESSION['message'])): ?>
                            <div class="alert alert-<?php echo $_SESSION['message']['type']; ?>">
                              <?php echo $_SESSION['message']['text']; ?>
                            </div> 
                            <?php unset($_SESSION['message']); ?>
                        <?php endif; ?>
                    <form action="php/controllers/login-controller.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <p>Email: <input type="text" class="form-control" id="password" name="email" maxlength="65" required></p>
                        </div>
                        <div class="form-group">
                            <p>Password: <input type="password" class="form-control" id="password" name="password" maxlength="50" required></p>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="check1">
                            <label class="form-check-label" for="check1">Recordar</label>
                        </div>
                        <p class="text-right">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </p>
                        </form>
                </div>
            </div>
            </div>
                        
</body>

