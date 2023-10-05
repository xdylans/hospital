<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h1 style="text-align: center; color: #0084ff;">Medicinas</h1>
    <div class="container">
        <div class="row" style="height: 300px">
            <div class="col-4 card" style="border-radius: 0;     text-align: -webkit-center;">
                <h2>Buscar Medicinas</h2>
                
            </div>
            <div class="col-8 card" style="border-radius: 0">
                <table>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            uso
                        </th>
                    </tr>
                    @foreach ($medicamentos as $medicamento)
                    <tr>
                            <td>{{ $medicamento->medicamento }}</td>
                            <td>{{ $medicamento->uso }}</td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
        <button type="button" class="btn btn-success"
        onclick="cargarVista('/medicamentos/create')" style="margin-left: 80%; padding: 10px; margin-top: 10px; margin-bottom: 10px;     padding-right: 35px;padding-left: 35px;">
                Crear Medicamento</button>


    </div>


</body>

</html>
