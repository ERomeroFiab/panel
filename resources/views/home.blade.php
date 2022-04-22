@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Empresas</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="grid-margin">
                        <div class="">
                            <div class="panel-body tabs-menu-body border-0 pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="table-responsive">
                                            <table id="Empresas"
                                                class="table table-bordered text-nowrap mb-0">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Grupo Empresa
                                                        </th>
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Pdfs
                                                        </th>
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Empresas en Previred
                                                        </th>
                                                        <th class="wd-15p border-bottom-0 sorting sorting_asc" tabindex="0"
                                                            aria-controls="responsive-datatable" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="First name: activate to sort column descending"
                                                            style="width: 81.4583px;">
                                                            Información faltante
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>0</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="chat-details mb-1 p-3">
                                                                <h4 class="mb-0">
                                                                    <span class="float-end p-1 btn btn-sm text-default">
                                                                        <b>80</b>%</span>
                                                                </h4>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div class="progress-bar bg-primary" style="width: 80%;"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>40</td>
                                                        <td>15</td>
                                                        <td>
                                                            <div class="chat-details mb-1 p-3">
                                                                <h4 class="mb-0">
                                                                    <span class="float-end p-1 btn btn-sm text-default">
                                                                        <b>20</b>%</span>
                                                                </h4>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div class="progress-bar  bg-success" style="width: 20%;"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>17</td>
                                                        <td>30</td>
                                                        <td>
                                                            <div class="chat-details mb-1 p-3">
                                                                <h4 class="mb-0">
                                                                    <span class="float-end p-1 btn btn-sm text-default">
                                                                        <b>10</b>%</span>
                                                                </h4>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div class="progress-bar  bg-warning" style="width: 10%;"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>0</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="chat-details mb-1 p-3">
                                                                <h4 class="mb-0">
                                                                    <span class="float-end p-1 btn btn-sm text-default">
                                                                        <b>50</b>%</span>
                                                                </h4>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div class="progress-bar  bg-danger" style="width: 50%;"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EMPRESA 1</td>
                                                        <td>0</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="chat-details mb-1 p-3">
                                                                <h4 class="mb-0">
                                                                    <span class="float-end p-1 btn btn-sm text-default">
                                                                        <b>90</b>%</span>
                                                                </h4>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div class="progress-bar  bg-info" style="width: 90%;"></div>
                                                                </div>
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
@endsection

@section('customjs')
    <script>
        var table = $('#Empresas').DataTable({
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            language: {
                searchPlaceholder: 'Search...',
                scrollX: "100%",
                sSearch: '',
            }
        });
        table.buttons().container().appendTo('#Empresas_wrapper .col-md-6:eq(0)');
    </script>
    
@endsection
