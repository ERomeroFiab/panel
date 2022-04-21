@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Pdf's por periodo</h3>
            </div>
            <div class="card-body pt-4">
                <div class="card-body">
                        <div class="row">
                            <div style="text-align: right" class="col-4">
                                <div  class="form-group">
                                    <label>Año</h4>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="text-align: right" class="form-group">
                                    <label>Mes</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div style="left:118px;" class="col-4">
                                <div class="form-group">
                                    <select  class="form-control select2 form-select"
                                    data-placeholder="Escoge un año">
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
                            <div style="left: 120px;"class="col-4">
                                <div  class="form-group">
                                    <select class="form-control select2 form-select"
                                        data-placeholder="Escoge un mes" >
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
                        </div>
                    <div class="grid-margin">
                        <div class="">
                            <div class="panel-body tabs-menu-body border-0 pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="table-responsive">
                                            <table id="data-table"
                                                class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th class="text-center bg-transparent border-bottom-0">
                                                            Periodo
                                                        </th>
                                                        <th class="text-center bg-transparent border-bottom-0">
                                                            Empresas en Previred
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
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        TURISMO Y HOTELES VJ LIMITADA</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
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
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        SOCIEDAD DE TRANSPORTES LO SALDES LTDA</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        12/08/2021</h6>
                                                                </div>
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
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        INVERSIONES LA GLORIA S A</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
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
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        PANADERIA LO SALDES SAN CARLOS DE APOQU</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        NO</h6>
                                                                </div>
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
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="ms-3 mt-0 mt-sm-2 d-block">
                                                                    <h6
                                                                        class="mb-0 fs-14 fw-semibold">
                                                                        PANIFICADORA LO SALDES S.A.</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="mt-0 mt-sm-3 d-block">
                                                                    <h6
                                                                    class="mb-0 fs-14 fw-semibold">
                                                                    08/07/2022</h6>
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
            
            

@endsection
