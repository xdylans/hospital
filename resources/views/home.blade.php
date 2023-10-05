<html>
<head>
  <title>Hospital</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>

    <div class="" >
        <div class="row" style="margin-right: 0">     
            <div class="col-3  btn btn-link" style="text-align: center;margin-bottom: 10px;margin-top: 10px; border-right: groove; text-decoration: none; border-radius: 0;" onclick="cargarVista('/inicio')"><p class="a" id="inicio">Inicio</p>
                
            </div>
            <div class="col-3 btn btn-link" style="text-align: center;margin-bottom: 10px;margin-top: 10px; border-right: groove; text-decoration: none; border-radius: 0;" onclick="cargarVista('/historiasclinicas')"><p class="a" id="historias">Historias clinicas</p>
            
            </div>
            <div class="col-3  btn btn-link" style="text-align: center;margin-bottom: 10px;margin-top: 10px; border-right: groove; text-decoration: none; border-radius: 0;" onclick="cargarVista('/medicamentos')"><p class="a"  id="inventario">Inventario de medicamentos</p>
            
            </div>
            <div class="col-3 btn btn-link" style="text-align: center;margin-bottom: 10px;margin-top: 10px;  text-decoration: none; border-radius: 0;" onclick="cargarVista('/reportes')"><p class="a" id="reportes">Reportes y estadisticas</p>
            
            </div>
        </div>
    </div>
    <div class="arrow-container">
        <div class="arrow"></div>
    </div>

        <div class="line-container">
          <div class="line"></div>
        </div>

 
    

  <div id="vista-container">
    <!-- La vista se cargará aquí -->
  </div>

  <script>
    function cargarVista(vista) {
        var container = document.getElementById('vista-container');
        var xhttp = new XMLHttpRequest();
        var navLinks = document.querySelectorAll('#navLinks li');

        navLinks.forEach(function (link) {
            link.classList.remove('active');
        });

        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                container.innerHTML = this.responseText;
            }
        };

        xhttp.open('GET', vista, true);
        xhttp.send();
        event.target.parentElement.classList.add('active');
    }

    // Agregar un evento de escucha para el formulario
    document.getElementById('medicamento-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Evita el envío predeterminado del formulario
        cargarVista('/medicamentos'); // Carga la vista manualmente
    });
</script>
</body>
</html>
