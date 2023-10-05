<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <h1 style="text-align: center; color: #0084ff;">Crear historia clinica</h1>
    <div class="container mt-3">
      @csrf
      <form action="{{ route('historiasclinicas-store') }}" method="POST">

            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label" style="font-weight: 800;">Nombre/s:</label>
                        <input type="text" class="form-control" id="FormControlInput1" name="first_name"
                            placeholder="Dylan Job" style="width: 70%;">
                    </div>
                    <div class="mb-3">
                        <label for="FormControlInput2" class="form-label" style="font-weight: 800;">Apellidos:</label>
                        <input type="text" class="form-control" id="FormControlInput2" name="last_name"
                            placeholder="Sanchez Alvarez" style="width: 70%;">
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label for="flexRadioDefault" class="form-label mt-1" style="font-weight: 800;">Sexo:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Femenino
                                </label>
                            </div>
                        </div>
                        <div class="col-9">
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 800;">Fecha de nacimiento:</label>
                            <div class="row">
                                <div class="col-4">
                                    <label for="day" class="form-label" style="font-weight: 800;">Día</label>
                                    <input type="text" class="form-control" id="day" name="day" placeholder="">
                                </div>
                                <div class="col-4">
                                    <label for="month" class="form-label" style="font-weight: 800;">Mes</label>
                                    <input type="text" class="form-control" id="month" name="month" placeholder="">
                                </div>
                                <div class="col-4">
                                    <label for="year" class="form-label" style="font-weight: 800;">Año</label>
                                    <input type="text" class="form-control" id="year" name="year" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 border-top">
                        <label for="FormControlInput1" class="form-label" style="font-weight: 800;">Ocupacion/es:</label>
                        <input type="text" class="form-control" id="FormControlInput1" name="ocupacion" placeholder="Trabajo" style="width: 70%;">
                    </div>

                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label" style="font-weight: 800;">Signos vitales:</label>
                        <input type="text" class="form-control" id="FormControlInput1" name="signos_vitales" placeholder="180/20" style="width: 70%;">
                    </div>

                    <div class="mb-3">
                        <label for="FormControlInput1" class="form-label" style="font-weight: 800;">Examen físico:</label>
                        <input type="text" class="form-control" id="FormControlInput1" name="examen_fisico" placeholder="" style="width: 70%;">
                    </div>
                </div>

                <div class="col-6">
                    <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: 800;">Antecedentes médicos</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="antecedentes_medicos" rows="3"></textarea>

                    <label for="exampleFormControlTextarea2" class="form-label" style="font-weight: 800;">Antecedentes familiares</label>
                    <textarea class="form-control" id="exampleFormControlTextarea2" name="antecedentes_familiares" rows="3"></textarea>

                    <div class="mb-3">
                        <label for="FormControlInput2" class="form-label" style="font-weight: 800;">Diagnóstico:</label>
                        <input type="text" class="form-control" id="FormControlInput2" name="diagnostico" placeholder="" style="width: 70%;">
                    </div>

                    <label for="exampleFormControlTextarea3" class="form-label" style="font-weight: 800;">Tratamiento</label>
                    <textarea class="form-control" id="exampleFormControlTextarea3" name="tratamiento" rows="3"></textarea>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" onclick="cargarVista('historiasclinicas')" style="margin-left: 30%; padding: 10px; margin-top: 10px; margin-bottom: 10px; padding-right: 35px; padding-left: 35px;">Volver</button>
                            <button type="submit" class="btn btn-success" style="padding: 10px; margin-top: 10px; margin-bottom: 10px; padding-right: 35px; padding-left: 35px;" onclick="cargarVista('historiasclinicas')">Enviar datos</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
