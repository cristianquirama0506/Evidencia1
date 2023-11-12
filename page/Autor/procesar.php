<?php
include('../../conexion.php');
$miconexion = new ConexionMysql();
$miconexion->CrearConexion();
$Codigo=$_POST['Codigo'];
$nombre=$_POST['Nombre'];

//Insertar
if(@$_POST['btnRegistrar']){
    $sql="insert into autor(Codigo,Nombre) values('".$Codigo."','".$nombre."')";
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
    $sql="select Codigo, Nombre from autor where Codigo='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        while ($row=$miconexion->ObtenerFilas($result)){
            header ("location: index.php?Codigo=".$row[0]."&nombre=".$row[1]);
        }
        
    }
    else{
        echo "Error, Libro no existe.";
    }
}


//Eliminar///
if(@$_POST['btnEliminar']){
    $sql="delete from autor where Codigo='".$Codigo."'";
    $result =$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if ($numfila>0){
            echo " Eliminado Exitosamente";
        }
        else{
            echo"<h2> Error No se encontro que eliminar.</h2>";
        }
    }

}

//Actualizar
if (@$_POST['btnActualizar']){
    $sql="update autor set nombre='".$nombre."' where Codigo='".$Codigo."'";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        if($result>0){
            echo"Registro Actualizado";
        }
    }else{
        echo"Error al actulizar, no se encontro registro.";
    }
        
    }
    


