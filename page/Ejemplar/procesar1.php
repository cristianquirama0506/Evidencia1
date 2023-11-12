<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['Codigo'];
$Nombre=$_POST['Nombre'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into autor(Codigo,Nombre) values('".$Codigo."','".$Nombre."')";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if($numfila>0){
            echo "Registro insertado en la base de datos.";
        }
        else{
            echo "Error al registrar. no se guardo en la base de datos.";
        }
    }
}
//Consultar
if (@$_POST['btnConsultar']){
    $sql="select Codigo, Nombre from autor where Codigo= '".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location index.php?Codigo=".$row[0]."&Nombre=".$row[1]);
        }
        
    }
    else{
        echo "Error, Libro no existe.";
    }
}
if(@$_POST['btnEliminar']){
    $sql="delete from autor where codigo='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if($numfila>0){
            echo "Eliminado el registro exitosamente.";
        }
        else{
            echo "No se encontro que Eliminar";
        }
    }
}
if(@$_POST['btnActualizar']){
    $sql="update autor set nombre= '".$Nombre."' where codigo= '".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if ($result){
        if($result>0){
            echo "Registro Actualizado";
        }
    }else{
        echo"No se encontro que actualizar";
    }

}


