<?php
session_start();

if (!$_POST['dbname']=="" && !$_POST['tname']==""){

    $datos;

    try {
        $conn = mysqli_connect(
            'localhost',
            'root',
            'Al3j4ndr4',
            $_POST['dbname']
          );
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nombre de la base de datos incorrecto';
        $_SESSION['message_type'] = 'warning';
        header('Location: index.php');
        die(e->getMessage());
        
    }
    

    if($_POST['id']==""){

        try {
            //Conección y ejecución del query
            if($_POST['query']=="SELECT"){
                $sql = $_POST['query']." * FROM ".$_POST['tname'];
            }else{
                $sql = $_POST['query']." FROM ".$_POST['tname'];
            }
            $datos=mysqli_query($conn,$sql);
            $conn=null;

            if($_POST['query']=="DELETE"){
                $_SESSION['message'] = 'Datos eliminado con éxito';
                $_SESSION['message_type'] = 'danger';
                header('Location: index.php');
            }

        } catch (Exception $e) {
            die(e->getMessage());
            
        }
        
    }else{
        try {
            //Conección y ejecución del query
            if($_POST['query']=="SELECT"){
                $sql = $_POST['query']." * FROM ".$_POST['tname']." WHERE id=".$_POST['id'];
            }else{
                $sql = $_POST['query']." FROM ".$_POST['tname']." WHERE id=".$_POST['id'];
            }
            $datos=mysqli_query($conn,$sql);
            $conn=null;

            if($_POST['query']=="DELETE"){
                $_SESSION['message'] = 'Datos eliminado con éxito';
                $_SESSION['message_type'] = 'danger';
                header('Location: index.php');
            }

        } catch (Exception $e) {
            die(e->getMessage());
            
        }
    }

}else{
    $_SESSION['message'] = 'Nombre de base de datos y tabla no debe quedar vacio';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
    <div class="d-flex justify-content-center m-4">
        <div class="col-md-4">
            <h3 class="my-4">Datos extraidos de la base de datos</h3>
            <table class="table table table-striped">
                <tbody>

                    <?php
                    try {
                        while($row = mysqli_fetch_assoc($datos)){
                            echo "<tr>";
                            foreach($row as $valor){?>
                                
                                <td style="border: solid 1px black"><?= $valor ?></td>
                                
                            <?php }?>
                        </tr> 
                        <?php } ?>
                        <?php
                    } catch (Exception $e) {
                        $_SESSION['message'] = 'Nombre de la tabla incorrecto';
                        $_SESSION['message_type'] = 'warning';
                        header('Location: index.php');
                    }
                    ?>
                </tbody>
            </table>
            
            <a href="index.php" class="btn btn-success">Regresar</a>
        </div>
    </div>
</body>
</html>