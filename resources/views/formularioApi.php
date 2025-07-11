

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    

    <script>
        console.log("funcionando");

    
        document.addEventListener("DOMContentLoaded", function(event){

           // var btnformulario = document.getElementById("btnformulario");
           // var formulario = document.getElementById("formulario");
            var btnMostrarTabla = document.getElementById("btnMostrarTabla");
            
            btnMostrarTabla.addEventListener("click", function(event) {
                event.preventDefault();
                console.log("apretaste este boton");

                var requestGetAll = new XMLHttpRequest();

                requestGetAll.open('GET', 'http://127.0.0.1:8000/api/listTableUsers');

                requestGetAll.onreadystatechange = function () {
                if (this.readyState === 4) {
                    console.log('Status:', this.status);
                    console.log('Headers:', this.getAllResponseHeaders());
                    console.log('Body:', this.responseText);
                }
                };

                requestGetAll.send();
               // console.log(datos.get("Code"));
               // console.log(datos.get("Monto"));
               // console.log(datos.get("fecha"));
               // console.log(datos.get("UserGithub"));

               // Ejemplo con fetch
                //const response =  fetch('http://127.0.0.1:8000/api/listTableUsers')
                //const data =  response.json();
                //console.log(data);
                
                //fetch('https://prueba.drogueriahofmann.cl/ListTableUsers')
                //fetch('https://prueba.drogueriahofmann.cl/ListTableUsers')//GET
                //fetch('https://prueba.drogueriahofmann.cl/GetUsers')//GET
                //fetch('https://prueba.drogueriahofmann.cl/SendUser')//POST
        
        });

        });



        async function fetchData() {
        try {
            
        // const response = await fetch('https://prueba.drogueriahofmann.cl/ListTableUsers');
            const response = await fetch('http://127.0.0.1:8000/api/listTableUsers');

            const data = await response.json();
            console.log(data); 
            
            // Aquí puedes trabajar con los datos
        } catch (error) {
            console.error('Error al obtener los datos:', error);
        }
        }

        fetchData();

    
    

    </script>
</head>
  <body>
    <h3>formulario Api </h3>

    <form id="formulario" >

        <label for="Code">Code</label>
		<input type="text" id="Code" name="Code"><br>

		<label for="Monto">Monto</label>
		<input type="text" id="Monto" name="Monto"><br>

		<label for="fecha">fecha</label>
		<input type="text" id="fecha" name="fecha"><br>

        <label for="UserGithub">UserGithub</label>
		<input type="text" id="UserGithub" name="UserGithub"><br>

        <button type="submit">Editar</button>

        <button id="btnformulario" type="submit">Enviar</button>


        include('UsersController.php');
            <!-- Button trigger modal -->
            <button type="button" id="btnMostrarTabla" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Mostrar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion del formulario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Code</th>
                        <th scope="col">Monto</th>
                        <th scope="col">fecha</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">$data['id']</th>
                        <td>$data['Code']</td>
                        <td>$data['fecha']</td>
                        <td>$data['UserGithub']</td>
                        </tr>
                        <tr>
                        <th scope="row">$data['id']</th>
                        <td>$data['Code']</td>
                        <td>$data['fecha']</td>
                        <td>$data['UserGithub']</td>
                        </tr>
                        <tr>
                        <th scope="row">$data['id']</th>
                        <td>$data['Code']</td>
                        <td>$data['fecha']</td>
                        <td>$data['UserGithub']</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
            </div>

             
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Seleccionar Code
            </button>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Visualizar Code</h1>
                    <input type="text" id="Code">Code:
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <h2 class="fs-5">Informacion de la Api</h2>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Monto</th>
                    <th scope="col">fecha</th>
                    <th scope="col">UserGithub</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">$data['id']</th>
                    <td>$data['Code']</td>
                    <td>$data['fecha']</td>
                    <td>$data['UserGithub']</td>
                    </tr>
                    <tr>
                    <th scope="row">$data['id']</th>
                    <td>$data['Code']</td>
                    <td>$data['fecha']</td>
                    <td>$data['UserGithub']</td>
                    </tr>
                    <tr>
                    <th scope="row">$data['id']</th>
                    <td>$data['Code']</td>
                    <td>$data['fecha']</td>
                    <td>$data['UserGithub']</td>
                    </tr>
                </tbody>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
            </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
  </body>
</html>