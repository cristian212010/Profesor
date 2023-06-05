<?php 

header('Content-Type: application/json');

require_once("../config/Conectar.php");
require_once("../models/Camper.php");


$camper=new Camper();

$body = json_decode(file_get_contents("php://input"), true); 

switch($_GET["op"]){

    case "GetAll":
       $datos=$camper->get_camper();
       echo json_encode($datos);
    break;

    case "GetId":

        $datos=$camper->get_camper_x_id($body["id"]);
        echo json_encode($datos);
  
    break;


    case "insert":

        $datos=$camper->insert_camper($body["id"], $body["imagen"],$body["nombre"],$body["edad"] ,$body["promedio"] ,$body["nivelCAmpus"], $body["nivelIngles"] , $body["especialidad"] , $body["direccion"] , $body["celular"] , $body["ingles"] , $body["Ser"] , $body["Review"] , $body["Skills"] , $body["Asitencia"]);
        echo json_encode("insertado correctamente");
  
      break;

    case "update":

        $datos=$camper->update_camper($body["id"], $body["imagen"],$body["nombre"],$body["edad"] ,$body["promedio"] ,$body["nivelCAmpus"], $body["nivelIngles"] , $body["especialidad"] , $body["direccion"] , $body["celular"] , $body["ingles"] , $body["Ser"] , $body["Review"] , $body["Skills"] , $body["Asitencia"]);
        echo json_encode("camper actualizado correctamente");
  
    break;

    case "delete":

        $datos=$camper->delete_camper($body["id"]);
        echo json_encode("camper eliminado correctamente");
  
      break;

}

    

?>