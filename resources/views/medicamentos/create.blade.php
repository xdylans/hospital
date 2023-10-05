<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <h1 style="text-align: center; color: #0084ff;">Crear Medicina</h1>
    
      @csrf
      <div class="container">
        <h1>Crear Medicamento</h1>
        <form method="POST" action="{{ route('medicamentos-store') }}">
            @csrf
            <div class="form-group">
                <label for="medicamento">Medicamento</label>
                <input type="text" class="form-control" id="medicamento" name="medicamento" >
            </div>
            <div class="form-group">
                <label for="uso">Uso</label>
                <textarea class="form-control" id="uso" name="uso" rows="4" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="cargarVista('/medicamentos')">Guardar</button>
        </form>
    </div>

    <script>
        function cargarVista(vista) {
          var container = document.getElementById('vista-container');
          var xhttp = new XMLHttpRequest();
          var navLinks = document.querySelectorAll('#navLinks li');
          
          navLinks.forEach(function(link) {
            link.classList.remove('active');
          });
          xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
              container.innerHTML = this.responseText;
            }
          };
          xhttp.open('GET', vista, true);
          xhttp.send();
          event.target.parentElement.classList.add('active');
        }
      </script>
</body>

</html>