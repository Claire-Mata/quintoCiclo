

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c8a0597b0e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Mate+SC&display=swap" rel="stylesheet">
    <title>Examen</title>
</head> 
<div class="row d-flex justify-content-center mt-5">
            <form action="resultado.php" method="post" class="col-11 col-sm-10 col-md-8 col-lg-6 mt-5 p-4" style="border-radius:10px; border:1px solid #554dde; background:white;">
                <div class="mb-3 d-flex justify-content-center">
                    <labl class="h3" style="color:#554dde;">Bienvenido</label>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Base de datos</label>
                    <input type="text" name="dbname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">Nombre de la tabla</label>
                    <input type="text" name="tname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color:#554dde; font-weight:600;">id</label>
                    <input type="number" name="id" class="form-control">
                   
               </div>
                <div class="mb-3">
                <label class="form-label" style="color:#554dde; font-weight:600;">Acciones</label>
                    <select name="seleccion" class="form-select form-select-sm" aria-label=".form-select-sm example" style="border:1px solid #554dde; height:40px;" required>
                    <option value="SELECT" selected>Selecione el tipo de consulta</option>
                        <option value="SELECT">Selecionar</option>
                        <option value="DELETE">Eliminar</option>
                    </select>
                <div class="d-grid gap-2 ">
                    <button type="submit" class="btn text-light mt-3" style="background:#554dde;font-weight:600;">Guardar</button>
                </div>
            </form>    
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
