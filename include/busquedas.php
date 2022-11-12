<?php

//FUNCIONES DE GENERO
function buscarGenero($conexion,$genero){
    $sql = "SELECT * FROM genero WHERE genero='$genero'";
    return mysqli_query($conexion, $sql);
}
function buscarGeneroById($conexion,$id){
    $sql = "SELECT * FROM genero WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE CARGO
function buscarCargo($conexion,$cargo){
    $sql = "SELECT * FROM cargo WHERE descripcion='$cargo'";
    return mysqli_query($conexion, $sql);
}
function buscarCargoById($conexion,$id){
    $sql = "SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE CONDICION
function buscarCondicionByDescripcion($conexion,$descripcion){
    $sql = "SELECT * FROM condicion WHERE descripcion='$descripcion'";
    return mysqli_query($conexion, $sql);
}
function buscarCondicionById($conexion,$id){
    $sql = "SELECT * FROM condicion WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE SEMESTRE

//FUNCIONES DE ESTUDIANTE
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}


//FUNCIONES DE DOCENTE
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE USUARIO DOCENTE
function buscarUserDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes WHERE id=$id";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE USUARIO ESTUDIANTE
function buscarUserEstudianteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_estudiante WHERE id=$id";
    return mysqli_query($conexion, $sql);
}

//FUNCIONES DE DATOS INSTITUCIONALES


//FUNCIONES MOSTRAR
function mostrarDatosInstitucionales($conexion){
    $sql = "SELECT * FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
function mostrarPeriodoAcad($conexion){
    $sql = "SELECT * FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}

function mostrarPresentePeriodoAcad($conexion){
    $sql = "SELECT * FROM presente_periodo_acad";
    return mysqli_query($conexion, $sql);
}

function mostrarProgramaEstudios($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}

function mostrarCalificaciones($conexion){
    $sql = "SELECT * FROM calificaciones";
    return mysqli_query($conexion, $sql);
}
function mostrarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}

function mostrarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}

function mostrarDocente($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}

function mostrarMatricula($conexion){
    $sql = "SELECT * FROM matricula";
    return mysqli_query($conexion, $sql);
}

function mostrarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}

function mostrarUnidDidacticas($conexion){
    $sql = "SELECT * FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}

function mostrarUserDocente($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}

function mostrarUserEstudiante($conexion){
    $sql = "SELECT * FROM usuarios_estudiante";
    return mysqli_query($conexion, $sql);
}

function mostrarProgrUnidDidac($conexion){
    $sql = "SELECT * FROM programacion_unidad_didactica";
    return mysqli_query($conexion, $sql);
}

function mostrarModulosFormativos($conexion){
    $sql = "SELECT * FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}

function mostrarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}

function mostrarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}

?>