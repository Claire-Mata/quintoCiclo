<!--lo siguiente es para hacer una barra de herramienta-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--require es estricto mientras que include es libre
        include_once es para solo incluirlo una ves-->
        <?php include_once "menu.php" ?>
        <!--aqui estaba el menu-->
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>
<!--aqui digo margin top, osea arrriba
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-6" style="background-color: #d8ebe4;">hola</div>
        <div class="col-md-6" style="background-color: #a7c5eb;">mundo</div>
    </div>
</div>-->
    