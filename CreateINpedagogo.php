<!--
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Creacion de incidencias
-->

<?php

// -- Consulta la base de datos SLQ  -->
include "Conexion_Consultas_SQL.php";
$muestraINFOmateria = mysqli_query ($consult, "SELECT * FROM materia");
$muestraINFOmateriaRetro = mysqli_query ($consult, "SELECT * FROM materia");

$muestraINFOmatricula = mysqli_query ($consult, "SELECT * FROM alumnos");
$muestraINFOmatriculaRetro = mysqli_query ($consult, "SELECT * FROM alumnos");

$muestraINFOdocente = mysqli_query ($consult, "SELECT * FROM persona");
$muestraINFOdocenteRetro = mysqli_query ($consult, "SELECT * FROM persona");


//Colocar en los "?????" el lugar donde se guardara el dato en la bd, despues eliminar (/*)

        /*    if(isset($_POST["botoncrear"]))
             {
                

                 //Tabla de creacion
                 $docente = $_POST["?????"];
                 $tipoincidencia = $_POST["?????"];
                 $materias = $_POST["?????"];
                 $matriculas = $_POST["?????"];
                 $grado = $_POST["?????"];
                 $acciones = $_POST["?????"];
                 $fecha = $_POST["?????"];

               //CONFIGURAR DONDE SE VAN A GUARDAR LOS DATOS
               $consult->query("INSERT INTO $canalizaciones()");

             }

             if(isset($_POST["botoncrearretro"]))
             {
                 

                 //Tabla de Retroalimentacion
                 $docenteretro = $_POST["?????"];
                 $tipoincidenciaretro = $_POST["?????"];
                 $materiasretro = $_POST["?????"];
                 $matriculasretro = $_POST["?????"];
                 $gradoretro = $_POST["?????"];
                 $accionesretro = $_POST["?????"];
                 $fecharetro = $_POST["?????"];
                 $retroalimentacion = $_POST["?????"]; 
                 $fechaincidenciaretro = $_POST["?????"]; 

            //CONFIGURAR DONDE SE VAN A GUARDAR LOS DATOS
               $consult->query("INSERT INTO $canalizaciones()");

          
          }
        */
          ?>




<!DOCTYPE html>
<html>
    <head>
        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>  
            .texto {
                font-family: Verdana;
            }
        </style>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Creacion</title>
    </head>

    <body style="background-color:#117AB7;">


        <hr>

        <h2 style="color:#21E4C0" align="center" class="texto"> Por favor llene los campos </h2>   

        <hr>
        <br/>

        Nueva Incidencia
         <!-- Tabla para crear incidencia  --> 
         <div class="col-md-8">

<table class="table table-dark" style="color:#F3851E">
    <thead class="thead-dark ">
        <tr>
            <th scope="col">Docente que reporta</th> 
            <th scope="col">Tipo de incidencia</th>  
            <th scope="col">Materia</th>
            <th scope="col">Matricula (Alumno)</th> 
            <th scope="col">Grado</th>
            <th scope="col">Acciones que lleva acabo el docente</th>
            <th scope="col">Fecha de reporte</th>
            <th scope="col">Retroalimentacion</th>
            <th scope="col">Fecha de retro</th>
            <th scope="col"></th>
        </tr>

    </thead>
    <tbody>

            <tr>

                <td><select name="docenteretro">
                                <?php 
                                   while ($datosDocenteRetro=mysqli_fetch_array($muestraINFOdocenteRetro)){    
                                   ?>
                                  
                                  <optgroup label="______________________________________________________">
                                  <option value="1"><?php echo $datosDocenteRetro["Nombre"]?></option>

                                  <?php
                                     }
                                  ?>
   
                                   </select></td> 

                <td><select name="tipoincidenciaretro">
                  <option selected value="0"> Elige la incidencia </option>
               <optgroup label="Tipos"> 
                  <option value="1">Inasistencia</option>
                  <option value="2">No entrega actividades</option>
                  <option value="2">Otro</option>  

                  </optgroup> 

                   </select></td>

                <td><select name="materiasretro">
                <?php 
                    while ($datosMateriaRetro=mysqli_fetch_array($muestraINFOmateriaRetro)){    
                    ?>
                                  
                    <option value="0">Elige la Materia</option>
                    <optgroup label="Materias">
                    <option value="1"><?php echo $datosMateriaRetro["materia"]?></option>

                    <?php
                    }
                    ?>
   
                                   </select></td>

                <td><select name="matriculasretro">
                <?php 
                 while ($datosMatriculaRetro=mysqli_fetch_array($muestraINFOmatriculaRetro)){    
                ?>
                                  
              <optgroup label="______________________________________________________">
                <option value="1"><?php echo $datosMatriculaRetro["matricula"]?></option>

                <?php
                    }
                     ?>
   
                 </select>  

                    </optgroup> 
   
                     </select></td>

                <td name="gradoretro" style="color:#FFFFFF">Programar consulta a base de datos</th>
                
                <td><input type =" text "name =" accionesretro "size =" 30 "></td> 
            
                <td style="color:#FFFFFF" name="fecharetro">
                <?php
                echo "Fecha: " . date("d") . "/" . date("m") . "/" . date("Y");
                ?>
                </td>

                <td><input type =" text "name =" retroalimentacion "size =" 30 "></td> 

                <td><input type="date" id="start" name="fechaincidenciaretro"
                                              value="2021-01-01"
                                                 min="2015-01-01" max="2050-12-01"></td>

                <td> 

                    <a class="btn btn-success" type= "submit" name= "botoncrearretro" value="enviarretro">Guardar Retroalimentacion</a> 
 
                </td> 
            </tr> 
        </table>
    </tbody>        
</div> 




    </body>
</html>
