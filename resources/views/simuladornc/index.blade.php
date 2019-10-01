<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title>Nikken Chalenge</title>
        <link rel="shortcut icon" href="https://nikkenlatam.com/nikken-challenge/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://nikkenlatam.com/nikken-challenge/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
        <link href="{{asset('simuladornc/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
        <link href="{{asset('simuladornc/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
        <link href="{{asset('simuladornc/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('simuladornc/css/custom.css')}}">
    </head>
    <body>
        <div class="main-content">
            <header class="baner" id="home">
                <div class="container-fluid">
                    <div class="flex-container">
                        <div class="flex-slide home" data-toggle="modal" href="#modal-kin-ya">
                            <div class="flex-title flex-title-home"><img src="https://services.nikken.com.mx/../img/slider/king-ya.png" alt=""></div>
                        </div>
                        <div class="flex-slide about" data-toggle="modal" href="#modal-kin-ya-mas">
                            <div class="flex-title"><img src="https://services.nikken.com.mx/../img/slider/king-ya-mas.png" alt=""></div>
                        </div>
                        <div class="flex-slide contact" data-toggle="modal" href="#modal-kin-tai">
                            <div class="flex-title"><img src="https://services.nikken.com.mx/../img/slider/king-tai.png" alt=""></div>
                        </div>
                        <div class="flex-slide work" data-toggle="modal" href="#modal-kin-master">
                            <div class="flex-title"><img src="https://services.nikken.com.mx/../img/slider/king-master.png" class="img-responsive" alt=""></div>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="header pb-5 pt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="{{asset('simuladornc/img/nikken_chalenge_logo.png')}}" width="50%">
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-5">
                <div class="row mt-5">
                    <div class="col">
                        <div class="card-header bg-transparent border-0">
                            <center>
                                <h1 class="display-3">Bienvenido a tu simulador</h1>
                                <div class="Rectángulo_1_copia"></div>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 mb-8 mt-8 mb-xl-0">
                        <form class="gralForm" name="gralForm" id="gralForm" method="POST" action="'simuladornc.welcome'">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="fixed-action-btn my-custom-btn justify-content-center col col-lg-2 col-xl-2">
                                        <button type="submit" class="btn btn-success" id="sendForm">Calcular</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 order-xl-1 mb-5 mb-xl-0"></div>
                                    <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
                                        <div class="card card-profile shadow">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="javascript:void(0)">
                                                            <img src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle" id="lvl0Avatar">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                            <div class="card-body pt-0 pt-md-4">
                                                <div class="card-profile-stats d-flex mt-md-5"></div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table striped">
                                                            <tbody class="list">
                                                                <tr class="table-info">
                                                                    <th>
                                                                        <span>Total nikken challenge:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0NCHtotal"></span><span id="lvl0NCHtotal">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0kinya"></span><span id="lvl0kinya">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <th>
                                                                        <span>Ganancias a sugerido:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0bonificaciones"></span><span id="lvl0bonificaciones">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L1:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0kinyal1"></span><span id="lvl0kinyal1">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table-info">
                                                                    <th>
                                                                        <span>Ganancias por compra:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0venta"></span><span id="lvl0venta">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L2:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0kinyal2"></span><span id="lvl0kinyal2">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Bonificacion por grupo personal:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0bonoGP"></span><span id="lvl0bonoGP">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kintai:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl0kintai"></span><span id="lvl0kintai">0.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr class="table-info">
                                                                    <th>
                                                                        <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                    </th>
                                                                    <td>
                                                                        <h4 class="text-warning"><span class="lvl0retail"></span><span id="lvl0retail">0.00</span></h4>
                                                                    </td>
                                                                    <td>
                                                                        Volumen personal:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl0puntaje">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <h4 class="text-warning">
                                                                            <span id="lvl0rangoText">-</span>
                                                                        </h4>
                                                                    </th>
                                                                    <td>
                                                                        <h5>Pz: <span id="lvl0pz_vendidas">0 </span></h5>
                                                                    </td>
                                                                    <td>
                                                                        VGP:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl0vc">0</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Pais:
                                                        <select class="form-control" id="lvl0pais" name="lvl0pais" onchange="hideProducts( this.id, 'lvl0pzaqp', 'lvl0pzop')">
                                                            <option value="Lat">México</option>
                                                            <option value="Col">Colombia</option>
                                                            <option value="Cri">Costa Rica</option>
                                                            <option value="Pan">Panamá</option>
                                                            <option value="Ecu">Ecuador</option>
                                                            <option value="Per">Peru</option>
                                                            <option value="Slv">El Salvador</option>
                                                            <option value="Gtm">Guatemala</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Rango:
                                                        <select class="form-control" id="lvl0rango" name="lvl0rango" onchange="setTextRango(this.id, 'lvl0rangoText')">
                                                            <option value="1">Directo</option>
                                                            <option value="3">Ejecutivo</option>
                                                            <option value="5">Plata</option>
                                                            <option value="6">Oro</option>
                                                            <option value="7">Platino</option>
                                                            <option value="8">Diamante</option>
                                                            <option value="9">Diamante Real</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6 class="lvl0pzop">OPTIMIZER</h6></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl0pzpiw" id="lvl0pzpiw">
                                                    </div>
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl0pzwa" id="lvl0pzwa">
                                                    </div>
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl0pzaqp" id="lvl0pzaqp">
                                                    </div>
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl0pzop" id="lvl0pzop">
                                                    </div>
                                                </div>
                                                <br>
                                                <center>
                                                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="tooltip" title="Añadir jugador" data-placement="bottom" onclick="addNodeLinea1()">
                                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                                    </button>
                                                </center>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-4 order-xl-1 mb-5 mb-xl-0" id="nivel1linea1">
                                        <div class="card card-profile shadow">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="javascript:void(0)">
                                                            <img id="lvl1l1Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                            <div class="card-body pt-0 pt-md-4">
                                                <div class="card-profile-stats d-flex mt-md-5"></div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span>Total nikken challenge:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1NCHtotal"></span><span id="lvl1l1NCHtotal">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1kinya"></span><span id="lvl1l1kinya">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias a sugerido:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1bonificaciones"></span><span id="lvl1l1bonificaciones">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L1:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1kinyal1"></span><span id="lvl1l1kinyal1">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias por compra:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1venta"></span><span id="lvl1l1venta">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L2:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1kinyal2"></span><span id="lvl1l1kinyal2">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Bonificacion por grupo personal:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1bonoGP"></span><span id="lvl1l1bonoGP">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kintai:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l1kintai"></span><span id="lvl1l1kintai">0.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                    </th>
                                                                    <td>
                                                                        <h4 class="text-warning"><span class="lvl1l1retail"></span><span id="lvl1l1retail">0.00</span></h4>
                                                                    </td>
                                                                    <td>
                                                                        Volumen personal;
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l1puntaje">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <h4 class="text-warning">
                                                                            <span id="lvl1l1rangoText">-</span>
                                                                        </h4>
                                                                    </th>
                                                                    <td>
                                                                        <h5>Pz: <span id="lvl1l1pz_vendidas">0</span></h5>
                                                                    </td>
                                                                    <td>
                                                                        VGP:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l1vc">0</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Pais:
                                                        <select class="form-control" id="lvl1l1pais" name="lvl1l1pais" onchange="hideProducts(this.id, 'lvl1l1pzaqp', 'lvl1l1pzop')">
                                                            <option value="Lat">México</option>
                                                            <option value="Col">Colombia</option>
                                                            <option value="Cri">Costa Rica</option>
                                                            <option value="Pan">Panamá</option>
                                                            <option value="Ecu">Ecuador</option>
                                                            <option value="Per">Peru</option>
                                                            <option value="Slv">El Salvador</option>
                                                            <option value="Gtm">Guatemala</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Rango:
                                                        <select class="form-control" id="lvl1l1rango" name="lvl1l1rango" onchange="setTextRango(this.id, 'lvl1l1rangoText')">
                                                            <option value="1">Directo</option>
                                                            <option value="3">Ejecutivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6 class="lvl1l1pzop">OPTIMIZER</h6></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l1pzpiw" id="lvl1l1pzpiw">
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l1pzwa" id="lvl1l1pzwa">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l1pzaqp" id="lvl1l1pzaqp">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l1pzop" id="lvl1l1pzop">
                                                    </div>
                                                </div>
                                                <br>
                                                <center>
                                                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="tooltip" title="Añadir jugador" data-placement="bottom" onclick="addLinea3('nivel2linea1')">
                                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                                    </button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0" id="nivel1linea2">
                                        <div class="card card-profile shadow">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="javascript:void(0)">
                                                            <img id="lvl1l2Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                            <div class="card-body pt-0 pt-md-4">
                                                <div class="card-profile-stats d-flex mt-md-5"></div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span>Total nikken challenge:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2NCHtotal"></span><span id="lvl1l2NCHtotal">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2kinya"></span><span id="lvl1l2kinya">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias a sugerido:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2bonificaciones"></span><span id="lvl1l2bonificaciones">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L1:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2kinyal1"></span><span id="lvl1l2kinyal1">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias por compra:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2venta"></span><span id="lvl1l2venta">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L2:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2kinyal2"></span><span id="lvl1l2kinyal2">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Bonificacion por grupo personal:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2bonoGP"></span><span id="lvl1l2bonoGP">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kintai:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l2kintai"></span> <span id="lvl1l2kintai">0.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                    </th>
                                                                    <td>
                                                                        <h4 class="text-warning"><span class="lvl1l2retail"></span><span id="lvl1l2retail">0.00</span></h4>
                                                                    </td>
                                                                    <td>
                                                                        Volumen personal:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l2puntaje">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <h4 class="text-warning">
                                                                            <span id="lvl1l2rangoText">-</span>
                                                                        </h4>
                                                                    </th>
                                                                    <td>
                                                                        <h5>Pz: <span id="lvl1l2pz_vendidas">0</span></h5>
                                                                    </td>
                                                                    <td>
                                                                        VGP:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l2vc">0.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Pais:
                                                        <select class="form-control" id="lvl1l2pais" name="lvl1l2pais" onchange="hideProducts(this.id, 'lvl1l2pzaqp', 'lvl1l2pzop')">
                                                            <option value="Lat">México</option>
                                                            <option value="Col">Colombia</option>
                                                            <option value="Cri">Costa Rica</option>
                                                            <option value="Pan">Panamá</option>
                                                            <option value="Ecu">Ecuador</option>
                                                            <option value="Per">Peru</option>
                                                            <option value="Slv">El Salvador</option>
                                                            <option value="Gtm">Guatemala</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Rango:
                                                        <select class="form-control" id="lvl1l2rango" name="lvl1l2rango" onclick="setTextRango(this.id, 'lvl1l2rangoText')">
                                                            <option value="1">Directo</option>
                                                            <option value="3">Ejecutivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6 class="lvl1l2pzop">OPTIMIZER</h6></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l2pzpiw" id="lvl1l2pzpiw">
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l2pzwa" id="lvl1l2pzwa">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l2pzaqp" id="lvl1l2pzaqp">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l2pzop" id="lvl1l2pzop">
                                                    </div>
                                                </div>
                                                <br>
                                                <center>
                                                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="tooltip" title="Añadir jugador" data-placement="bottom" onclick="addLinea3('nivel2linea2')">
                                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                                    </button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 order-xl-3 mb-5 mb-xl-0" id="nivel1linea3">
                                        <div class="card card-profile shadow">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 order-lg-2">
                                                    <div class="card-profile-image">
                                                        <a href="javascript:void(0)">
                                                            <img id="lvl1l3Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                            <div class="card-body pt-0 pt-md-4">
                                                <div class="card-profile-stats d-flex mt-md-5"></div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span>Total nikken challenge:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3NCHtotal"></span><span id="lvl1l3NCHtotal">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3kinya"></span><span id="lvl1l3kinya">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias a sugerido:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3bonificaciones"></span><span id="lvl1l3bonificaciones">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L1:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3kinyal1"></span><span id="lvl1l3kinyal1">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Ganancias por compra:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3venta"></span><span id="lvl1l3venta">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kinya L2:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3kinyal2"></span><span id="lvl1l3kinyal2">0.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <span>Bonificacion por grupo personal:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3bonoGP"></span><span id="lvl1l3bonoGP">0.00</span>
                                                                    </td>
                                                                    <th>
                                                                        <span>Kintai:</span>
                                                                    </th>
                                                                    <td>
                                                                        <span class="lvl1l3kintai"></span><span id="lvl1l3kintai">0.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div>
                                                        <table class="table">
                                                            <tbody class="list">
                                                                <tr>
                                                                    <th>
                                                                        <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                    </th>
                                                                    <td>
                                                                        <h4 class="text-warning"><span class="lvl1l3retail"></span><span id="lvl1l3retail">0.00</span></h4>
                                                                    </td>
                                                                    <td>
                                                                        Volumen personal:
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l3puntaje">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <h4 class="text-warning">
                                                                            <span id="lvl1l3rangoText">-</span>
                                                                        </h4>
                                                                    </th>
                                                                    <td>
                                                                        <h5>Pz: <span id="lvl1l3pz_vendidas">0</span></h5>
                                                                    </td>
                                                                    <td>
                                                                        VGP
                                                                    </td>
                                                                    <td>
                                                                        <span id="lvl1l3vc">0</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Pais:
                                                        <select class="form-control" id="lvl1l3pais" name="lvl1l3pais" onchange="hideProducts(this.id, 'lvl1l3pzaqp', 'lvl1l3pzop')">
                                                            <option value="Lat">México</option>
                                                            <option value="Col">Colombia</option>
                                                            <option value="Cri">Costa Rica</option>
                                                            <option value="Pan">Panamá</option>
                                                            <option value="Ecu">Ecuador</option>
                                                            <option value="Per">Peru</option>
                                                            <option value="Slv">El Salvador</option>
                                                            <option value="Gtm">Guatemala</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                        Rango:
                                                        <select class="form-control" id="lvl1l3rango" name="lvl1l3rango" onchange="setTextRango(this.id, 'lvl1l3rangoText')">
                                                            <option value="1">Directo</option>
                                                            <option value="3">Ejecutivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                        </div>
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <div class="media-body">
                                                            <span class="mb-0 text-sm"><h6 class="lvl1l3pzop">OPTIMIZER</h6></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l3pzpiw" id="lvl1l3pzpiw">
                                                    </div>
                                                    
                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l3pzwa" id="lvl1l3pzwa">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l3pzaqp" id="lvl1l3pzaqp">
                                                    </div>

                                                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                        <input class="form-control" type="number" maxlength="2" value="0" name="lvl1l3pzop" id="lvl1l3pzop">
                                                    </div>
                                                </div>
                                                <br>
                                                <center>
                                                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="tooltip" title="Añadir jugador" data-placement="bottom" onclick="addLinea3('nivel2linea3')">
                                                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                                                    </button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0" >
                                        <div id="nivel2linea1">
                                            <div class="card card-profile shadow">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-3 order-lg-2">
                                                        <div class="card-profile-image">
                                                            <a href="javascript:void(0)">
                                                                <img id="lvl2l1Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                                <div class="card-body pt-0 pt-md-4">
                                                    <div class="card-profile-stats d-flex mt-md-5"></div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span>Total nikken challenge:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1NCHtotal"></span><span id="lvl2l1NCHtotal">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1kinya"></span><span id="lvl2l1kinya">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias a sugerido:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1bonificaciones"></span><span id="lvl2l1bonificaciones">$0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L1:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1kinyal1"></span><span id="lvl2l1kinyal1">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias por compra:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1venta"></span><span id="lvl2l1venta">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L2:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1kinyal2"></span><span id="lvl2l1kinyal2">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Bonificacion por grupo personal:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1bonoGP"></span><span id="lvl2l1bonoGP">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kintai:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l1kintai"></span><span id="lvl2l1kintai">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                        </th>
                                                                        <td>
                                                                            <h4 class="text-warning"><span class="lvl2l1retail"></span><span id="lvl2l1retail">0.00</span></h4>
                                                                        </td>
                                                                        <td>
                                                                            Volumen personal:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l1puntaje">0</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <h4 class="text-warning">
                                                                                <span id="lvl2l1rangoText">-</span>
                                                                            </h4>
                                                                        </th>
                                                                        <td>
                                                                            <h5>Pz: <span id="lvl2l1pz_vendidas">0</span></h5>
                                                                        </td>
                                                                        <td>
                                                                            VGP:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l1vc">0</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Pais:
                                                            <select class="form-control" id="lvl2l1pais" name="lvl2l1pais" onchange="hideProducts(this.id, 'lvl2l1pzaqp', 'lvl2l1pzop')">
                                                                <option value="Lat">México</option>
                                                                <option value="Col">Colombia</option>
                                                                <option value="Cri">Costa Rica</option>
                                                                <option value="Pan">Panamá</option>
                                                                <option value="Ecu">Ecuador</option>
                                                                <option value="Per">Peru</option>
                                                                <option value="Slv">El Salvador</option>
                                                                <option value="Gtm">Guatemala</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Rango:
                                                            <select class="form-control" id="lvl2l1rango" name="lvl2l1rango" onchange="setTextRango(this.id, 'lvl2l1rangoText')">
                                                                <option value="1">Directo</option>
                                                                <option value="3">Ejecutivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6 class="lvl2l1pzop">OPTIMIZER</h6></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l1pzpiw" id="lvl2l1pzpiw">
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l1pzwa" id="lvl2l1pzwa">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l1pzaqp" id="lvl2l1pzaqp">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l1pzop" id="lvl2l1pzop">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0" >
                                        <div  id="nivel2linea2">
                                            <div class="card card-profile shadow">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-3 order-lg-2">
                                                        <div class="card-profile-image">
                                                            <a href="javascript:void(0)">
                                                                <img id="lvl2l2Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                                <div class="card-body pt-0 pt-md-4">
                                                    <div class="card-profile-stats d-flex mt-md-5"></div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span>Total nikken challenge:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2NCHtotal"></span><span id="lvl2l2NCHtotal">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2kinya"></span><span id="lvl2l2kinya">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias a sugerido:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2bonificaciones"></span><span id="lvl2l2bonificaciones">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L1:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2kinyal1"></span><span id="lvl2l2kinyal1">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias por compra:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2venta"></span><span id="lvl2l2venta">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L2:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2kinyal2"></span><span id="lvl2l2kinyal2">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Bonificacion por grupo personal:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2bonoGP"></span><span id="lvl2l2bonoGP">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kintai:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l2kintai"></span><span id="lvl2l2kintai">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                        </th>
                                                                        <td>
                                                                            <h4 class="text-warning"><span class="lvl2l2retail"></span><span id="lvl2l2retail">0.00</span></h4>
                                                                        </td>
                                                                        <td>
                                                                            Volumen personal:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l2puntaje">0</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <h4 class="text-warning">
                                                                                <span id="lvl2l2rangoText">-</span>
                                                                            </h4>
                                                                        </th>
                                                                        <td>
                                                                            <h5>Pz: <span id="lvl2l2pz_vendidas">0</span></h5>
                                                                        </td>
                                                                        <td>
                                                                            VGP:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l2vc">0</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Pais:
                                                            <select class="form-control" id="lvl2l2pais" name="lvl2l2pais" onchange="hideProducts(this.id, 'lvl2l2pzaqp', 'lvl2l2pzop')">
                                                                <option value="Lat">México</option>
                                                                <option value="Col">Colombia</option>
                                                                <option value="Cri">Costa Rica</option>
                                                                <option value="Pan">Panamá</option>
                                                                <option value="Ecu">Ecuador</option>
                                                                <option value="Per">Peru</option>
                                                                <option value="Slv">El Salvador</option>
                                                                <option value="Gtm">Guatemala</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Rango:
                                                            <select class="form-control" id="lvl2l2rango" name="lvl2l2rango" onchange="setTextRango(this.id, 'lvl2l2rangoText')">
                                                                <option value="1">Directo</option>
                                                                <option value="3">Ejecutivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6 class="lvl2l2pzop">OPTIMIZER</h6></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l2pzpiw" id="lvl2l2pzpiw">
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l2pzwa" id="lvl2l2pzwa">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l2pzaqp" id="lvl2l2pzaqp">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l2pzop" id="lvl2l2pzop">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </div>

                                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0" >
                                        <div id="nivel2linea3">
                                            <div class="card card-profile shadow">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-3 order-lg-2">
                                                        <div class="card-profile-image">
                                                            <a href="javascript:void(0)">
                                                                <img id="lvl2l3Avatar" src="https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png" class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>
                                                <div class="card-body pt-0 pt-md-4">
                                                    <div class="card-profile-stats d-flex mt-md-5"></div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span>Total nikken challenge:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3NCHtotal"></span><span id="lvl2l3NCHtotal">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3kinya"></span><span id="lvl2l3kinya">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias a sugerido:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3bonificaciones"></span><span id="lvl2l3bonificaciones">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L1:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3kinyal1"></span><span id="lvl2l3kinyal1">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Ganancias por compra:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3venta"></span><span id="lvl2l3venta">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kinya L2:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3kinyal2"></span><span id="lvl2l3kinyal2">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <span>Bonificacion por grupo personal:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3bonoGP"></span><span id="lvl2l3bonoGP">0.00</span>
                                                                        </td>
                                                                        <th>
                                                                            <span>Kintai:</span>
                                                                        </th>
                                                                        <td>
                                                                            <span class="lvl2l3kintai"></span><span id="lvl2l3kintai">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div>
                                                            <table class="table">
                                                                <tbody class="list">
                                                                    <tr>
                                                                        <th>
                                                                            <span><h4 class="text-warning">Total Bonificacion: </h4></span>
                                                                        </th>
                                                                        <td>
                                                                            <h4 class="text-warning"><span class="lvl2l3retail"></span><span id="lvl2l3retail">0.00</span></h4>
                                                                        </td>
                                                                        <td>
                                                                            Volumen personal:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l3puntaje">0</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <h4 class="text-warning">
                                                                                <span id="lvl2l3rangoText">-</span>
                                                                            </h4>
                                                                        </th>
                                                                        <td>
                                                                            <h5>Pz: <span id="lvl2l3pz_vendidas">0</span></h5>
                                                                        </td>
                                                                        <td>
                                                                            VGP:
                                                                        </td>
                                                                        <td>
                                                                            <span id="lvl2l3vc">0</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Pais:
                                                            <select class="form-control" id="lvl2l3pais" name="lvl2l3pais" onchange="hideProducts(this.id, 'lvl2l3pzaqp', 'lvl2l3pzop')">
                                                                <option value="Lat">México</option>
                                                                <option value="Col">Colombia</option>
                                                                <option value="Cri">Costa Rica</option>
                                                                <option value="Pan">Panamá</option>
                                                                <option value="Ecu">Ecuador</option>
                                                                <option value="Per">Peru</option>
                                                                <option value="Slv">El Salvador</option>
                                                                <option value="Gtm">Guatemala</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col">
                                                            Rango:
                                                            <select class="form-control" id="lvl2l3rango" name="lvl2l3rango" onchange="setTextRango(this.id, 'lvl2l3rangoText')">
                                                                <option value="1">Directo</option>
                                                                <option value="3">Ejecutivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>PI WATER</h6></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>WATERFALL</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6>AQUA POUR</h6></span>
                                                            </div>
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <div class="media-body">
                                                                <span class="mb-0 text-sm"><h6 class="lvl2l3pzop">OPTIMIZER</h6></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l3pzpiw" id="lvl2l3pzpiw">
                                                        </div>
                                                        
                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l3pzwa" id="lvl2l3pzwa">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l3pzaqp" id="lvl2l3pzaqp">
                                                        </div>

                                                        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                            <input class="form-control" type="number" maxlength="2" value="0" name="lvl2l3pzop" id="lvl2l3pzop">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer">
                    <div class="row align-items-center justify-content-xl-between">
                        <div class="col-xl-6">
                            <div class="copyright text-center text-xl-left text-muted">
                                &copy; 2019 <a href="https://nikkenlatam.com" class="font-weight-bold ml-1" target="_blank">Nikken Latam.</a> Todos los derechos reservados.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    <script src="{{asset('simuladornc/js/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('simuladornc/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('simuladornc/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
    <script src="{{asset('simuladornc/js/custom.js')}}"></script>
</html>
