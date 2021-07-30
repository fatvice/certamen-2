@extends("templates.master")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medidor</td>
                        <td>Valor</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody id="tbody-lectura">

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/lecturasService.js')}}"></script>
    <script src="{{asset('js/mediciones.js')}}"></script>
@endsection