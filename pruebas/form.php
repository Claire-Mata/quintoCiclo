<!DOCTYPE html>
<html lang="en">
<?php require_once "head.php" ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <form action="registrar.php" method="get">
            <div class="mb-3">
                <label for="email" class="form-label"> Direccion email</label>
                <input type="email" name="email" class="form-control" id="email">
                <div class="form-text" id="emailHelper">Este email no se compartira con nadie </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre </label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contra </label>
                <input type="password" name="pass" class="form-control" id="pass">
            </div>
            <div class="mb-3">
                <select  id="lenguaje" name="lenguaje" class="form-select">
                    <option selected>Seleccione un lenguaje de programacion</option>
                    <option value="1">Python</option>
                    <option value="2">PHP</option>
                    <option value="3">Javascript</option>
                </select>
            </div>
            <div class="mb-3 form-check form-switch">
                <input type="checkbox" name="activo" class="form-check-input" id="activo">
                <label for="activo"  class="form-check-label">Mantener activo </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-info">Enviar</button>
            </div>
        </form>
    </div>
</div>
<?php require_once "footer.php" ?>
</html>