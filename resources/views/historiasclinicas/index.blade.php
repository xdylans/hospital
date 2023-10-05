
<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    </head>
    <body>
        <h1 style="text-align: center; color: #0084ff;" >Historias clinica</h1>
        <div class="container">
            <div class="row" style="height: 300px">
                <div class="col-4 card" style="border-radius: 0;     text-align: -webkit-center;">
                    <h2>Buscar Historia Clínica</h2>
                    <form method="GET" action="{{ route('historiasclinicas') }}">
                        @csrf
                        <div class="form-group" style="margin-top: 50px">
                            <label for="identifier">Identificador del Paciente:</label>
                            <input type="text" name="identifier" id="identifier" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Buscar</button>
                    </form>
                </div>
                <div class="col-8 card" style="border-radius: 0">
                    <table>
                        <tr>
                        <th>
                        Nombre        
                        </th>
                        </tr> 
                    
                        <tr>
                            <td>
                               Dylan
                            </td>
                        </tr>
                      
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-success" style="margin-left: 80%; padding: 10px; margin-top: 10px; margin-bottom: 10px;     padding-right: 35px;padding-left: 35px;"  onclick="cargarVista('/historiasclinicas/create')">Crear historia clinica</button>
    

        </div>
       
        
    </body>
</html>


 
