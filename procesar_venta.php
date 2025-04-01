<?php
//paso 1: importar el archivo que se encargara de conectarme a la base de datos
require 'config/conex';

//paso 2:capturar las variables
$cantidad = $_post{"txt_cantidad"};
$total = 1500 * $cantidad

//paso 3: armar la secuencia SQL
$sql = "INSERT INTO ventas(valor) values (".$total.")";

//paso 4: mandar la orden a la base de datos
if($dbh ->query ($sql))
{
    //aparecera este mensaje 
    echo "venta resgistrada :$. $total"
}else
{
    //error aparece esto
    echo "error en la venta"
}
?>