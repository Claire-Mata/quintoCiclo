<?php

function getUsuario(){
    require_once 'database/conexion.php';
    $con = getconfig();
    
    if( isset($_GET["id"])){
        $id = $_GET["id"];
    }

    try {
        $query = "SELECT * FROM users WHERE id =:id";

        $statement = $con->prepare($query);
        $statement->execute([
            ':id'=>$id
        ]);
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);

        //cerrar flujo y base de datos
        $statement->closeCursor();
        $statement = null;
        //retorna el array asociativo
        return $res;
        
    } catch (Exception $error) {
        print "Error!:".$error->getMessage()."<br>";
        die();
    }
}
function getUsuarios(){
    require_once 'database/conexion.php';
    $con = getconfig();

    try {
        $query = "SELECT * FROM users";

        $statement = $con->prepare($query);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
        //cerrar flujo y base de datos
        $statement->closeCursor();
        $con = null;
        
        return $res;

    } catch (Exception $error) {
        print "Error!:".$a->getMessage()."<br>";
        die();
    }
}

function setUsuario(){
    require_once 'database/conexion.php';
    $con = getconfig();
    try {
       $query="INSERT INTO users(nombre, apellido, direccion, email, edad, usuario, contra, rol)
                VALUES(:nombre, :apellido, :direccion, :email, :edad, :user, :pass, :rol )";
       $statement = $con->prepare($query);
       $statement->execute([
            ':nombre'=>$_POST["nombre"],
           ':apellido'=> $_POST["apellido"],
           ':direccion'=> $_POST["direccion"],
           ':email'=> $_POST["email"],
           ':edad'=> $_POST["edad"],
           ':user'=> $_POST["usuario"],
           ':pass'=> password_hash($_POST["password"],PASSWORD_DEFAULT),
           ':rol'=> $_POST["rol"]
       ]);
       //cerrar flujo y base de datos
      $statement->closeCursor();
   
      $con = null;
     
      header('Location: agregar.php?status=ok');

    } catch (Exception $error) {
        print "Error!:".$error->getMessage()."<br>";
        die();
    }
}
function updateUser(){
    require_once 'database/conexion.php';
    $con = getconfig();
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
    }

    try {
        $query="UPDATE users SET nombre=:nombre, apellido=:apellido, direccion=:direccion, email=:email, edad=:edad, 
                usuario=:user, rol=:rol WHERE id=:id";
        $statement = $con->prepare($query);

        $statement->execute([
             ':nombre'=>$_POST["nombre"],
            ':apellido'=> $_POST["apellido"],
            ':direccion'=> $_POST["direccion"],
            ':email'=> $_POST["email"],
            ':edad'=> $_POST["edad"],
            ':user'=> $_POST["usuario"],
           ':rol'=> $_POST["rol"],
            ':id'=> $id
        ]);
        //cerrar flujo y base de datos
       $statement->closeCursor();
    
       $con = null;
      
       header('Location: usuarios.php?update&id='.$id.'&status=ok');
 
     } catch (Exception $error) {
         print "Error!:".$error->getMessage()."<br>";
         die();
     }

}

function update(){
    $usuario = getUsuario();
    require_once 'modificar.php';

}
function deleteUser(){
    require_once 'database/conexion.php';
    $con = getconfig();
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
    }
    try {
        $query = "DELETE FROM users WHERE id = :id";

        $statement = $con->prepare($query);

        $statement->execute([
            ':id' => $id
        ]);
       
        $statement->closeCursor();
        $con = null;
        
        header('Location: todosUsuarios.php?getUsuarios');

    } catch (Exception $error) {
        print "Error!:".$a->getMessage()."<br>";
        die();
    }
}









//aqui se ejecutan 
if(isset($_GET) && isset($_GET["setUsuario"])){
    setUsuario();
}

if(isset($_GET) && isset($_GET["getUsuarios"])){
    getUsuarios();
}
if(isset($_GET) && isset($_GET["update"])){
     update();
}
if(isset($_GET) && isset($_GET["updateUser"])){
    updateUser();
}

if(isset($_GET) && isset($_GET["deleteUser"])){
    deleteUser();
}
