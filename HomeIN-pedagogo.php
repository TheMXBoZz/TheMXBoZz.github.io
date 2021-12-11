<!--
    Documento     : Pagina Principal 
    By            : Aleajndro Ortiz Rodriguez
    Actictividad  : PROYECTO UNIDEG
    AREA          : Inicio-pedagogo
-->

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <link rel="shortcut icon" href="faviconSABES.png">  <!-- icono de la pagina favicoin -->

        <meta charset="UTF-8"> 


        <!-- Recursos del bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Recursos del fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <style>  
            .texto {
                font-family: Verdana;
            }
        </style>

        <title>SISTEMA DE INCIDENCIAS</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <!-- Fondo -->
    <body style="background-color:#297DE1;"> 
        <!-- Fondo -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> <!-- Barra superior de navegacion -->
            <a class="navbar-brand" href="#"></a>
            <img src="faviconSABES.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item active"> 
                        <a class="nav-link" style="color:#21E4C0"><span class="sr-only">(current)</span></a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="index.php" style="color:#21E4C0"></a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="CreateINpedagogo.php" target="miContenedor" style="color:#21E4C0">Crear incidencia</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="ViewIN.php" target="miContenedor" style="color:#21E4C0">Ver registros de incidencias</a> 
                    </li> 
                    
                </ul> 

                                            <!-- Añadir en href el link a el menu inicial -->
                <div class="btn-group"> 
                    <button type="button" class="btn btn-danger" href="????" name= "botoninicio">Menu Principal
                    </button> 
                

                        </form> 

                    </div> 
                </div> 
            </div> 
        </nav> 

       


        <h1 align="center" class="texto"  style="color:#F3851E"; > Bienvenido al sistema de INCIDENCIAS UNIDEG </h1> 

        
        <div class="m-3" style="height:900px;"> 
            <iframe name="miContenedor" style="height:100%; width:100%;" frameBorder="1"></iframe> 
        </div> 
        
        
        
        <div class="card text-white bg-danger mb-3">
            <div class="card-header" class="texto" style="color:#F3A11E" ></div>
            <br /> <br />
            <h2 align="justify" class="texto" style="color:#F3A11E"> Realizado por Alejandro Ortiz Rodriguez</h2> 
            <hr> 
            <br /> 

            <div class="texto" style="color:#89E321" >Borrador
            </div>
        </div>


        <!-- Optional JavaScript --> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 

        
        
         

    </body>
</html>
