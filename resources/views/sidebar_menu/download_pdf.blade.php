@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Pdf's por Empresas Previred</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Año</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                        <option value="4">2018</option>
                                        <option value="5">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Mes</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">Julio</option>
                                        <option value="2">Agosto</option>
                                        <option value="3">Septiembre</option>
                                        <option value="4">Octubre</option>
                                        <option value="5">Noviembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Empresas en Previred</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">TURISMO Y HOTELES VJ LIMITADA</option>
                                        <option value="2">SOCIEDAD DE TRANSPORTES LO SALDES LTDA</option>
                                        <option value="3">INVERSIONES LA GLORIA S A</option>
                                        <option value="4">PANADERIA LO SALDES SAN CARLOS DE APOQU</option>
                                        <option value="5">PANIFICADORA LO SALDES S.A.</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="grid-margin">
                            <div class="">
                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="table-responsive">
                                                <table id="EmpPrevired" class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="text-center bg-transparent border-bottom-0">
                                                                Periodo
                                                            </th>
                                                            <th class="text-center bg-transparent border-bottom-0">
                                                                Pdf's
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        07/19/2019</h6>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex"></div>
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        08/20/2021</h6>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        12/08/2021</h6>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        04/15/2021</h6>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        12/16/2018</h6>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        02/05/2022</h6>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        08/07/2022</h6>
                                                                </div>
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
    </div>


    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Pdf's por Empresas en Silvertool</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Año</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                        <option value="4">2018</option>
                                        <option value="5">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Mes</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">Julio</option>
                                        <option value="2">Agosto</option>
                                        <option value="3">Septiembre</option>
                                        <option value="4">Octubre</option>
                                        <option value="5">Noviembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Empresas en Silvertool</label>
                                    <select class="form-control select2 form-select" data-placeholder="Seleccione">
                                        <option label="Choose one">
                                        </option>
                                        <option value="1">TURISMO Y HOTELES VJ LIMITADA</option>
                                        <option value="2">SOCIEDAD DE TRANSPORTES LO SALDES LTDA</option>
                                        <option value="3">INVERSIONES LA GLORIA S A</option>
                                        <option value="4">PANADERIA LO SALDES SAN CARLOS DE APOQU</option>
                                        <option value="5">PANIFICADORA LO SALDES S.A.</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">LOGISTICA LOS LIBERTADORES LIMITADA</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="card-body">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    <table id="LibertaLimit"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Periodo
                                                                                </th>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Pdf's
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            07/19/2019</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="d-flex"></div>
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/20/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/08/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            04/15/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/16/2018</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            02/05/2022</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/07/2022</h6>
                                                                                    </div>
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

                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">COMERCIAL LIGHTROOM SPA</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="card-body">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    <table id="LightRoomSPA"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Periodo
                                                                                </th>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Pdf's
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            07/19/2019</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="d-flex"></div>
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/20/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/08/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            04/15/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/16/2018</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            02/05/2022</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/07/2022</h6>
                                                                                    </div>
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

                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">COMERCIAL LIGHTROOM SPA</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="card-body">
                                            <div class="grid-margin">
                                                <div class="">
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    <table id="CLightRoomSP"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Periodo
                                                                                </th>
                                                                                <th
                                                                                    class="text-center bg-transparent border-bottom-0">
                                                                                    Pdf's
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            07/19/2019</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="d-flex"></div>
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/20/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/08/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            04/15/2021</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            12/16/2018</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            NO</h6>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            02/05/2022</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                                            08/07/2022</h6>
                                                                                    </div>
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

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script>
        var table = $('#EmpPrevired').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });

        table.buttons().container().appendTo('#EmpPrevired_wrapper .col-md-6:eq(0)');
    </script>
    <script>
        var table = $('#LibertaLimit').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });

        table.buttons().container().appendTo('#LibertaLimit_wrapper .col-md-6:eq(0)');
    </script>
    <script>
        var table = $('#LightRoomSPA').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });

        table.buttons().container().appendTo('#LightRoomSPA_wrapper .col-md-6:eq(0)');
    </script>
    <script>
        var table = $('#CLightRoomSP').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });

        table.buttons().container().appendTo('#CLightRoomSP_wrapper .col-md-6:eq(0)');
    </script>   
@endsection

