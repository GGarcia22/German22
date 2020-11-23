
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content">
            <a href="" class="navbar-brand font-italic">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/TP2/home.php">Home</inicio></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/TP2/categoria.php">Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/TP2/php/admin/clubes/index.php">Editar</a>
                </li>
                <li class="nav-item">
                    <?php if(isset($_SESSION['auth'])):?>
                    <a class="nav-link" href="/TP2/logout.php">Cerrar sesion</a> 
                    <?php endif ?>
                </li>
            </ul>
            </div>

        </nav>


    </header>