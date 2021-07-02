<?php
function startSession()
{
    require_once 'database/conexion.php';
    $con = getconfig();
    $usuario = $_POST["usuario"];
    $pass = $_POST["contra"];
    
   
    
    $query = "SELECT * FROM users WHERE usuario= :usuario";
    $statement = $con->prepare($query);

    $statement->execute([
        ':usuario' => $usuario
    ]);

    $res = $statement->fetch(PDO::FETCH_ASSOC);

   
    try{
    if(password_verify($pass,$res['contra'])){

        $query = "SELECT * FROM users WHERE usuario= :usuario";
        $statement = $con->prepare($query);

        $statement->execute([
            ':usuario' => $usuario
        ]);

        $loginRow = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($loginRow != false){

            session_start();
            setcookie('session_id','token123dhhs25665%#7y5484', time()+3600,'/');

            $_SESSION['id']= $loginRow['id'];
            $_SESSION['nombre']= $loginRow['nombre'];
            $_SESSION['apellido']= $loginRow['apellido'];
            $_SESSION['usuario']= $loginRow['usuario'];
            $_SESSION['rol']= $loginRow['rol'];


            $statement->closeCursor();
            $con = null;

            header('Location: nav.php');
        }
        else{

            $statement->closeCursor();
            $statement = null;
           header('Location: login.php?status=error');
        }
        
    }
    else{

        $statement->closeCursor();
        $statement = null;
        header('Location: login.php?status=error');
    }}
    catch (Exception $error) {
        print "Error!:".$a->getMessage()."<br>";
        die();
    }
}
function cerrar()
{
    session_start();
    session_destroy();
    setcookie('session_id','null', -1,'/');

    header('Location: login.php');   
}

if (isset($_GET) && isset($_GET["startSession"])) {
    startSession();
}
if (isset($_GET) && isset($_GET["cerrar"])) {
    startSession();
}