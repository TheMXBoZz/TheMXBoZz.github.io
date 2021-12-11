<!--
    Documento     : Alumnos
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Ver Incidencias Profesor
-->


<?php

// -- Consulta la base de datos SLQ  -->




?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         

        </style>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registros</title>
    </head>

    <body style="background-color:#117AB7;">


        <hr>

        <h2 style="color:#21E4C0" align="center" class="texto"> Lista de incidencias registradas </h2>   

        <hr>
        <br/>

<!-- _____________________________________________________________________________________________  -->

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-12">

  

  <table border="1" class="table table-striped table-dark" >
		<tr>
            <td style="color:#F3851E">ID de incidencia</td>
			<td style="color:#F3851E">Docente que reporta</td>
			<td style="color:#F3851E">Tipo de incidencia</td>
			<td style="color:#F3851E">Materia</td>
			<td style="color:#F3851E">Alumno (Matricula)</td>
			<td style="color:#F3851E">Grado</td>	
            <td style="color:#F3851E">Acciones que lleva acabo el docente</td>
            <td style="color:#F3851E">Fecha de reporte</td>	
		</tr>

		<?php 

		$consult=mysqli_connect("localhost","root","","bd");
        $muestraINFOresgistros = mysqli_query ($consult, "SELECT * FROM canalizaprofe");
       
		;


		while($mostrar=mysqli_fetch_array($muestraINFOresgistros)){

		 ?>

		<tr>
            <td><?php echo $mostrar['id_in'] ?></td>
			<td><?php echo $mostrar['docente'] ?></td>
			<td><?php echo $mostrar['tipoincidencia'] ?></td>
			<td><?php echo $mostrar['materia'] ?></td>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['grado'] ?></td>
            <td><?php echo $mostrar['accionorigen'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>



  


</form>

</div>
  <div class="col-md-12"></div>
</div>

<!-- _____________________________________________________________________________________________  -->

     </body>
                                
</html>









