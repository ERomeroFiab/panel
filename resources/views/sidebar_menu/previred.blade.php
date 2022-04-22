@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Empresas en Previred</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="grid-margin">
                        <div class="">
                            <div class="panel-body tabs-menu-body border-0 pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="table-responsive">
                                            <table id="EmpPrevi"
                                                class="table table-bordered text-nowrap mb-0">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Nombre
                                                        </th>
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Rut
                                                        </th>
                                                        <Th aria-controls="responsive-datatable" style="width: 81.4583px;">Acciones
                                                        </Th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>12345678-K</td>
                                                        <td>
                                                            <a href="#"><i class="fe fe-edit"
                                                                    style="color:#6c5ffc; padding-right: 15px;"></i></a>
                                                            <a href="#"><i class="fe fe-trash" style="color: #e82646;"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 2</td>
                                                        <td>12345678-K</td>
                                                        <td>
                                                            <a href="#"><i class="fe fe-edit"
                                                                    style="color: #6c5ffc; padding-right: 15px;"></i></a>
                                                            <a href="#"><i class="fe fe-trash" style="color: #e82646;"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 3</td>
                                                        <td>12345678-K</td>
                                                        <td>
                                                            <a href="#"><i class="fe fe-edit"
                                                                    style="color: #6c5ffc; padding-right: 15px; "></i></a>
                                                            <a href="#"><i class="fe fe-trash" style="color: #e82646;"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 4</td>
                                                        <td>12345678-K</td>
                                                        <td>
                                                            <a href="#"><i class="fe fe-edit"
                                                                    style="color: #6c5ffc; padding-right: 15px;"></i></a>
                                                            <a href="#"><i class="fe fe-trash" style="color: #e82646;"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 5</td>
                                                        <td>12345678-K</td>
                                                        <td>
                                                            <a href="#"><i class="fe fe-edit"
                                                                    style="color: #6c5ffc; padding-right: 15px;"></i></a>
                                                            <a href="#"><i class="fe fe-trash" style="color: #e82646;"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Registrar Nueva Empresa de Previred</h3>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Nombre:</h4>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Rut:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <input id="input__nombre" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input id="input__rut" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-icon btn-primary">
                                Registrar
                            </button>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script>
        var table = $('#EmpPrevi').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });
        table.buttons().container().appendTo('#EmpPrevi_wrapper .col-md-6:eq(0)');
    </script>
    
@endsection
