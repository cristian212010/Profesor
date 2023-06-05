
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="estudiantes.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camp Skiler.</h3>
        <img src="images/Diseño sin título.png" alt="" class="imagenPerfil">
        <h3>Maicol Estrada</h3>
      </div>
      <div class="menus">
        <a href="/Home/home.html" style="display: flex;gap:2px;">
          <i class="bi bi-house-door"> </i>
          <h3 style="margin: 0px;">Home</h3>
        </a>
        <a href="Estudiantes.html" style="display: flex;gap:2px;">
          <i class="bi bi-people"></i>
          <h3 style="margin: 0px;font-weight: 800;">Estudiantes</h3>
        </a>
        <a href="../Archivos/archivos.html" style="display: flex;gap:2px;">
          <i class="bi bi-bezier"></i>
          <h3 style="margin: 0px;">Archivos</h3>
        </a>
        <a href="/enProceso.html" style="display: flex;gap:2px;">
          <i class="bi bi-person-video3"></i>
          <h3 style="margin: 0px;">Reuniones</h3>
        </a>
        <a href="/enProceso.html" style="display: flex;gap:2px;">
          <i class="bi bi-envelope-at"></i>
          <h3 style="margin: 0px;">Mensajes</h3>
        </a>
        <a href="/login/login.html" style="display: flex;gap:2px;color: brown;">
          <i class="bi bi-x-square"></i>
          <h3 style="margin: 0px;">salir</h3>
        </a>


      </div>
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
        <h2>Estudiantes</h2>
        <button class="btn-m" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
      </div>
      <div class="menuTabla contenedor2">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">ESPECIALIDAD</th>
              <th scope="col">USUARIO</th>
              <th scope="col">DETALLE</th>
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <!-- ///////Llenado DInamico con la Api -->

          </tbody>
        </table>

      </div>


    </div>

    <div class="parte-derecho " id="detalles">
      <h3>Detalle Estudiantess</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>

   





    <!-- /////////Modal de registro de nuevo estuiante //////////-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" id="Registrar" method="post">
              <div class="mb-1 col-12">
                <label for="exampleInputEmail1" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="emailHelp">
              </div>
              <div class="mb-1 col-12">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
              </div>
              <div class="m-2  col-3">
                <label for="exampleInputPassword1" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" max="150" min="1">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Promedio</label>
                <input type="number" class="form-control" id="promedio" step="0.1" max="5.0" min="1.0">
              </div>
              <div class="m-2 col-5">
                <label for="exampleInputPassword1" class="form-label">Nivel Campus</label>
                <select id="nivelCAmpus" class="form-select">
                  <option>Basico</option>
                  <option>Intermedio</option>
                  <option>Avanzando</option>
                </select>
              </div>
              <div class="m-2 col-5">
                <label for="exampleInputPassword1" class="form-label">Nivel Ingles</label>
                <select id="nivelIngles" class="form-select">
                  <option>beginner</option>
                  <option> intermediate</option>
                  <option>Advanced</option>
                </select>
              </div>
              <div class="m-2 col-5">
                <label for="exampleInputPassword1" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" aria-describedby="emailHelp">
                
              </div>
              <div class="m-2 col-5">
                <label for="exampleInputPassword1" class="form-label">Direcion</label>
                <input type="text" class="form-control" id="direccion" aria-describedby="emailHelp" > 
              </div>
              <div class="m-2 col-5">
                <label for="exampleInputPassword1" class="form-label">Celular</label>
                <input type="tel" class="form-control" id="celular" aria-describedby="emailHelp" > 
              </div>         
              <div class=" col-12 m-2">
                <button type="submit" class=" btn btn-primary">Submit</button> 
              </div>
            </form>  
         </div>       
        </div>
      </div>
    </div>




     <!-- ///////////  Modal de notas  ////////////-->
     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizacion de Notas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="col d-flex flex-wrap" id="notas" method="PATCH">
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Nota Ingles</label>
                <input type="number" class="form-control" id="ingles" step="0.1" max="5.0" min="1.0">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Nota ser</label>
                <input type="number" class="form-control" id="Ser" step="0.1" max="5.0" min="1.0">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Nota Review</label>
                <input type="number" class="form-control" id="Review" step="0.1" max="5.0" min="1.0">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Nota Skills</label>
                <input type="number" class="form-control" id="Skills" step="0.1" max="5.0" min="1.0">
              </div>
              <div class="m-2 col-3">
                <label for="exampleInputPassword1" class="form-label">Nota Asitencia</label>
                <input type="number" class="form-control" id="Asitencia" step="0.1" max="5.0" min="1.0">
              </div>
           

              <div class=" col-12 m-2">
                <button type="submit" class="btn btn-primary">Submit</button> 
              </div>
             

            </form>  
         </div>       
        </div>
      </div>
    </div>

    


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

    <!-- APACHE Echars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.4.2/echarts.min.js"></script>


    <script src="estudiantes.js" type="module"></script>

</body>

</html>
