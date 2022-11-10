<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "", "ceicom_BillClinton");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>