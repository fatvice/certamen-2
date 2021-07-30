@extends("templates.master")

@section("contenido")   
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-info">
                    <span>Registrar lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-date" class="form-label">Fecha</label>
                        <input type="date" id="fecha-date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="text" name="form-control" id="hora-txt">
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select id="medidor-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Dirección</label>
                        <input type="text" name="form-control" id="direccion-txt">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" name="form-control" id="valor-txt">
                    </div>
                    <div class="mb-3">
                        <label for="tipo-select" class="form-label">Tipo de medida</label>
                        <select id="tipo-select">
                        </select>
                    </div>
                </div>
                <div class="card-footer d-grip gap-1">
                    <button class="btn btn-info" id="registrar-btn">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/registrar_lecturas.js')}}"></script>
    <script src="{{asset('js/servicios/lecturasService.js')}}"></script>
@endsection