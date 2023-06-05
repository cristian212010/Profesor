<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
require_once ("../config/Conectar.php");
class Camper extends Conectar{

    public function get_camper(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM campers");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exeption $e) {
            return $e->getMessage();
        }
        
    }
    public function get_camper_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm=$conectar->prepare("SELECT * FROM campers WHERE id=?");
            $stm->bindValue(1,$id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeption $e) {
            return $e->getMessage();
        }
    }

    public function insert_camper($id,$imagen,$nombre,$edad, $promedio, $nivelCAmpus, $nivelIngles, $especialidad, $direccion, $celular, $ingles, $Ser,$Review, $Skills, $Asitencia ){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO campers(id,imagen,nombre,edad,promedio,nivelCAmpus,nivelIngles, especialidad, direccion, celular, ingles, Ser, Review, Skills, Asitencia) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$imagen);
        $stm->bindValue(3,$nombre);
        $stm->bindValue(4,$edad);
        $stm->bindValue(5,$promedio);
        $stm->bindValue(6,$nivelCAmpus);
        $stm->bindValue(7,$nivelIngles);
        $stm->bindValue(8,$especialidad);
        $stm->bindValue(9,$direccion);
        $stm->bindValue(10,$celular);
        $stm->bindValue(11,$ingles);
        $stm->bindValue(12,$Ser);
        $stm->bindValue(13,$Review);
        $stm->bindValue(14,$Skills);
        $stm->bindValue(15,$Asitencia);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function update_camper($id,$imagen,$nombre,$edad, $promedio, $nivelCAmpus, $nivelIngles, $especialidad, $direccion, $celular, $ingles, $Ser,$Review, $Skills, $Asitencia){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE campers set imagen=? , nombre=? ,edad=?, promedio=?, nivelCAmpus=?, nivelIngles=?, especialidad=? ,direccion=? , celular=?, ingles=?, Ser=?,  Review=?, Skills=?,  Asitencia=?  WHERE id=?";
        $sql=$conectar->prepare($sql);
        
        $sql->bindValue(1,$imagen);
        $sql->bindValue(2,$nombre);
        $sql->bindValue(3,$edad);
        $sql->bindValue(4,$promedio);
        $sql->bindValue(5,$nivelCAmpus);
        $sql->bindValue(6,$nivelIngles);
        $sql->bindValue(7,$especialidad);
        $sql->bindValue(8,$direccion);
        $sql->bindValue(9,$celular);
        $sql->bindValue(10,$ingles);
        $sql->bindValue(11,$Ser);
        $sql->bindValue(12,$Review);
        $sql->bindValue(13,$Skills);
        $sql->bindValue(14,$Asitencia);
        $sql->bindValue(15,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);


    }
    
    public function delete_camper($id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="DELETE FROM campers WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>