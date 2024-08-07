<?php
class Usuario extends Conectar{
    
    public function login(){
        $conectar=parent::conexion();
        parent::set_name();
        if(isset($_POST["enviar"])){
            $correo = $_POST["usu_correo"];
            $pass = $_POST["usu_pass"];
            if(empty($correo) and empty($pass)){
                header("location:".conectar::ruta(). "index.php?m=2");
                exit();
            }
            else{
                $sql = "SELECT * FROM tm_usuario WHERE usu_correo=? and usu_pass= ? AND est=1";
                $stmt=$conectar->prepare($sql);
                $stmt->bindValue(1, $correo);
                $stmt->bindValue(2, $pass);
                $stmt->execute();
                $resultado = $stmt->fetch();
                if(is_array($resultado) and count($resultado)>0){

                    header("location:".Conectar::ruta()."view/Home/");
                    exit();
                }else{
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }
            }
        }
    }
}


?>
"<>"
"()"
"{}"
"->"