<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../main/inicio.php">Vega Market</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../main/inicio.php">Inicio</a>
                </li>
                <li class="nav-item dropdown centro">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../product/indexproduct.php">Lista Productos</a></li>
                        <li><a class="dropdown-item" href="../category/indexcategory.php">Lista Categorias</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown centro">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../cliente/indexcliente.php">Lista Clientes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown centro">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ventas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Proyecto Web/resources/views/productdetail/indexproductdetail.php">Registrar Venta</a></li>
                        <li><a class="dropdown-item" href="/Proyecto Web/resources/views/productdetail/indexSales.php">Lista Ventas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown centro">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sobre Nosotros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../otros/conocenos.php">Conocenos</a></li>
                        <li><a class="dropdown-item" href="../otros/sugerencias.php">Sugerencias</a></li>
                        <li><a class="dropdown-item" href="../otros/reclamaciones.php">Libro de Reclamaciones</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav ms-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mi cuenta
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Configurar</a></li>
                            <li><a class="dropdown-item" href="../../../login.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>