<?php
 include_once("head.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background:#554dde;">
    <div class="container-fluid">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="todosUsuarios.php"><i class="fas fa-users me-2"></i>ver todos</a>
                    <li class="nav-item">
                    <a class="nav-link active" href="agregar.php"><i class="fas fa-newspaper me-2"></i>Agregar Usuario</a>
                    </li>
                </li>
            </ul>
            <ul class="d-flex navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="singin.php?cerrar"><i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesion</a>
                </li>
            </ul>
        
        </div>
    </div>
</nav>