<?php echo $header; ?>
<link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-3 text-dark" href="javascript:;">
                            <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Principal</a></li>
                </ol>
            </nav>

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Account" class="nav-link text-body font-weight-bold mx-lg-4 mx-0  px-0">
                            <i class="fa fa-user me-sm-0"></i>
                            <span class="d-sm-inline d-none">Mi Cuenta</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Login/cerrarSession" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-power-off me-sm-1"></i>
                            <span class="d-sm-inline d-none">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-0">
        <div class="row mt-4">
            <div class="col-xl-7">
                <div class="card">
                    
                    <div  id="days-desk" class="card-header d-flex pb-0 p-3">
                        <h6 id="titulo-program" class="my-auto">Programa</h6>
                        <div class="nav-wrapper position-relative ms-auto w-50">
                            <ul class="nav nav-pills nav-fill p-1 flex-row" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                        Miércoles
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                        Jueves
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                                        Viernes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam3" aria-selected="false">
                                        Sábado
                                    </a>
                                </li>
                                <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); "><a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">-</a></div></ul>
                        </div>
                        <div class="dropdown pt-2">
                            <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end me-sm-n4 px-2 py-3" aria-labelledby="dropdownCam">
                                <li><a class="dropdown-item border-radius-md" href="/Dinners/">Mis cenas</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Reservar cena para mi y mis amigos</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Cancelar Reservacion (Cena)</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="days-movil" class="card-header pb-0 p-3">
                        <h6 id="titulo-program" class="">Programa</h6>
                        <div class="nav-wrapper position-relative ms-auto">
                            <ul class="nav nav-pills nav-fill p-1 " role="tablist">
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1 active" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                        Mi.
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                                        Ju.
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                                        Vi.
                                    </a>
                                </li>
                                <li id="movil-li" class="nav-item">
                                    <a id="nav-day" class="nav-link mb-0 px-3 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam3" aria-selected="false">
                                        Sa.
                                    </a>
                                </li>
                                <div class="dropdown pt-1">
                                    <a href="javascript:;" class="text-secondary ps-4" id="dropdownCam" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end me-sm-n4 px-2 py-3" aria-labelledby="dropdownCam">
                                        <li><a class="dropdown-item border-radius-md" href="/Dinners/">Mis cenas</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Reservar cena para mi y mis amigos</a></li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Cancelar Reservacion (Cena)</a></li>
                                    </ul>
                                </div>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="card-body p-3 mt-2">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show position-relative active height-350 border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('../../assets/img/miercoles.jpeg'); background-size:cover;">

                            </div>
                            <div class="tab-pane fade position-relative height-350 border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('../../assets/img/jueves.jpeg'); background-size:cover;">

                            </div>
                            <div class="tab-pane fade position-relative height-350 border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('../../assets/img/viernes.jpeg'); background-size:cover;">

                            </div>
                            <div class="tab-pane fade position-relative height-350 border-radius-lg" id="cam4" role="tabpanel" aria-labelledby="cam3" style="background-image: url('../../assets/img/sabado.jpeg'); background-size:cover;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 ms-auto mt-xl-0 mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-gradient-faded-dark">
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-8 my-auto">
                                        <div class="numbers">
                                            <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">Crecer 5in Límites</p>
                                            <h5 class="text-white font-weight-bolder mb-0">
                                                CONAVE 2022
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  mt-md-4 mt-0">
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_user.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/Account/">Datos Personales</a></h6>
                                <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_comprobante_vacuna.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/Vaccination/">Comprobantes Vacuna</a></h6>
                                <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_prueba_covid.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/Covid/">Mis Pruebas Covid</a></h6>
                                <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-clock me-sm-0" style="color: #8a6d3b"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_pase_abordar.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/Passes/">Pases de Abordar</a></h6>
                                <p class="opacity-8 mb-0 text-sm">Disponible <i class="fa fa-check-circle me-sm-0" style="color: #01a31c"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_boleto_virtual.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/VirtualTicket/">Mi boleto Virtual</a></h6>
                                <p class="opacity-8 mb-0 text-sm">A un click tus asistencias</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_cenas.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/Dinners/">Cenas</a></h6>
                                <p class="opacity-8 mb-0 text-sm">Reserva y disfruta</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_pickup.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a type="button" data-toggle="modal" data-target="#ver-pickup">PICK UP</a></h6>
                                <p class="opacity-8 mb-0 text-sm">A un click tus asistencias</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="col-12 text-end">
                                    <img class="w-30" src="../../assets/img/small-logos/asofarma_1.png">
                                </div>
                                <h6 class="mb-0 font-weight-bolder"><a href="/News/">NOTIASOFARMA</a></h6>
                                <p class="opacity-8 mb-0 text-sm">A un click</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- MODAL VISTA - COMPROBANTE -->
    <div class="modal fade" id="ver-pickup" tabindex="-1" role="dialog" aria-labelledby="ver-comprobante" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document" style="max-width: 590px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PICKUP Convención 2022</h5>
                    <span type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                            X
                        </span>
                </div>
                <!-- <div class="modal-header">
                    <p>Por su seguridad y la de las demás personas, le pedimos que nos proporcione la Información siguiente para comprobar que no este contagiado de COVID.</p>
                </div> -->
                <div class="modal-body">
                        <div class="container">
                            <div class="row mt-lg-0 mt-8">
                                <div class="col-lg-12 my-auto">
                                    <h1 class="display-1 text-bolder text-gradient text-danger fadeIn1 fadeInBottom mt-5">Estamos preparando tu PickUp</h1>
                                    <h2 class="fadeIn3 fadeInBottom opacity-8">Equipo Asofarma</h2>
                                    <p class="lead opacity-6 fadeIn2 fadeInBottom">Le sugerimos consultar más tarde...</p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $footer; ?>
</main>




