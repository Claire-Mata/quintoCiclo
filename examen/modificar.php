<?php
       
        include_once("usuarios.php");
        include_once("nav.php");
       
    ?>

<body>
    <div class="container">
    <?php
    $id=$_GET["id"];
    
    if (isset($_GET["status"]) && $_GET["status"]== "ok") {
        echo'<div class="row d-flex justify-content-center mt-5">
            <div class="col-md-m5 alert alert-success">
                usuario actualizado con exito!
            </div>
        </div>';
    }
    
    ?>
        <div class="row d-flex justify-content-center mt-5">
            <form onsubmit="return validarModificacion()"; action="usuarios.php?updateUser&id=<?=$id;?>" method="post" class="col-11 col-sm-10 col-md-8 col-lg-6 mt-5 p-4" style="border-radius:10px; border:1px solid #554dde; background:white;">
                <div class="mb-3 d-flex justify-content-center">
                    <labl class="h3" style="color:#554dde;">Modificar Usuario</label>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Nombre</label>
                    <input type="firstName" class="form-control" id="nombre" name="nombre"style="border:1px solid #554dde;" value="<?=$usuario[0]["nombre"]?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Apellido</label>
                    <input type="lastName" class="form-control" id="apellido" name="apellido"style="border:1px solid #554dde;" value="<?=$usuario[0]["apellido"]?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Direccion</label>
                    <input type="Direccion" class="form-control" id="Direccion" name="direccion" style="border:1px solid #554dde;" value="<?=$usuario[0]["direccion"]?>" required>
                    
                
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Coreo electronico</label>
                    <input type="email" class="form-control" id="email" name="email" style="border:1px solid #554dde;" value="<?=$usuario[0]["email"]?>" required>
                    <div id="info-email" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Edad</label>
                    <input type="edad" class="form-control" id="edad" name="edad" style="border:1px solid #554dde;" value="<?=$usuario[0]["edad"]?>" required>
                </div>

                    <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Usuario</label>
                    <input type="user" class="form-control" id="username" name="usuario" style="border:1px solid #554dde;" value="<?=$usuario[0]["usuario"]?>" required>
                    <div id="info-usuario" class="form-text"></div>
                </div>
                <div class="mb-3">
                <label class="form-label" style="color:#554dde; font-weight:600;">Tipo de Usuario</label>
                <input type="user" readonly class="form-control" id="rol" name="rol" style="border:1px solid #554dde;" value="<?=$usuario[0]["rol"]?>" required>
                   
                <div class="d-grid gap-2 ">
                    <button type="submit" class="btn text-light mt-3" style="background:#554dde;font-weight:600;">Actualizar</button>
                </div>
            </form>    
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>