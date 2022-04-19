@extends('layouts.app')

@section('content')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Empresas en Previred</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="responsive-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="responsive-datatable_length">
                                        <label>show
                                            <select name="responsive-datatable_length" aria-controls="responsive-datatable"
                                                class="form-select form-select-sm select2 select2-hidden-accessible"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <span class="select2 select2-container select2-container--default" dir="ltr"
                                                style="width: 61.3333px;">
                                                <span class="selection">
                                                    <span class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0"
                                                        aria-labelledby="select2-responsive-datatable_length-59-container">
                                                        <span class="select2-selection__rendered"
                                                            id="select2-responsive-datatable_length-59-container"
                                                            title="10">10</span>
                                                        <span class="select2-selection__arrow" role="presentation">
                                                            <b role="presentation"></b>
                                                        </span>
                                                    </span>
                                                </span>
                                                <samp class="dropdown-wrapper" aria-hidden="true"></samp>
                                            </span>
                                            entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="responsive-datatable_filter" class="dataTables_filter">
                                        <label>
                                            <input type="search" class="form-control form-control" placeholder="Search..."
                                                aria-controls="responsive-datatable">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered text-nowrap border-bottom dataTable no-footer"
                                        id="responsive-datatable" role="grid" aria-describedby="responsive-datatable_info">
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
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_info" id="responsive-datatable_info" role="status"
                                        aria-live="polite">Showing 1 to 10 of 50 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="responsive-datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous "
                                                id="responsive-datatable_previous">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="0"
                                                    tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="1"
                                                    tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="2"
                                                    tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="3"
                                                    tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="4"
                                                    tabindex="0" class="page-link">4</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="5"
                                                    tabindex="0" class="page-link">5</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="responsive-datatable_next">
                                                <a href="#" aria-controls="responsive-datatable" data-dt-idx="6"
                                                    tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

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
