<?php
    include('conexion.php');

    $query="SELECT * FROM servicios ORDER BY idservicio desc LIMIT 1";
    $result= mysqli_query($coneccion, $query);
    if(!$result){
        die('El  registro no se ha podido completar');
      }
      $json=array();
    while($row=mysqli_fetch_array($result)){
        $json[]=array(
            'idServicio'=> $row['idservicio'],
        );
    }
    $jsonstring= json_encode($json);
    echo $jsonstring;
?>