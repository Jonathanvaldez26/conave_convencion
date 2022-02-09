<?php
echo $header;
?>
    <script src="/backend/public/assets/js/plugins/choices.min.js"></script>
    <body class="">
    <main class="main-content main-content-bg mt-0">
        <section>

            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 ">
                        Crecer 5in Límites
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    ¿Quienes Somos?
                                    <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/kanban.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-single-copy-04 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Historía</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/wizard.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-atom text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Misión</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/datatables.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-diamond text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Visión</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-notification-70 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Nuestros Logros</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <i class="ni ni-active-40 text-gradient text-warning"></i>
                                                        </div>
                                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="dropdown-header text-dark p-0">Política de Privacidad</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- responsive -->
                                    <div class="row d-lg-none">
                                        <div class="col-md-12">
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/kanban.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Kanban</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/wizard.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-laptop text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Wizard</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/datatables.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-badge text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">DataTables</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="py-2 ps-3 border-radius-md" href="../../../pages/applications/calendar.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-notification-70 text-gradient text-primary"></i>
                                                    </div>
                                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p class="dropdown-header text-dark p-0">Calendar</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nuestro Programa
                                    <img src=" ../../../assets/img/down-arrow-dark.svg  " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuEcommerce">
                                    <div class="row d-none d-lg-block">
                                        <div class="col-12 px-4 py-2">
                                            <div class="row">
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                                                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>document</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(154.000000, 300.000000)">
                                                                                    <path d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                                    <path d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        Actividades
                                                    </div>
                                                    <a href="../../../pages/ecommerce/orders/list.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/orders/details.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>box-3d-50</title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(603.000000, 0.000000)">
                                                                                    <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                                    <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                                    <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        General
                                                    </div>
                                                    <a href="../../../pages/ecommerce/overview.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/referral.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <hr class="vertical dark">
                                                </div>
                                                <div class="col-6 position-relative">
                                                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                                        <div class="d-inline-block">
                                                            <div class="icon icon-shape icon-xs border-radius-md bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <title>shop </title>
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                                <g transform="translate(0.000000, 148.000000)">
                                                                                    <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                                                                    <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        Otros
                                                    </div>
                                                    <a href="../../../pages/ecommerce/products/new-product.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 1</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/edit-product.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 2</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/product-page.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 3</span>
                                                    </a>
                                                    <a href="../../../pages/ecommerce/products/products-list.html" class="dropdown-item border-radius-md">
                                                        <span class="ps-3">Link 4</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- responsive -->
                                    <div class="d-lg-none">
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                                    <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>document</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(154.000000, 300.000000)">
                                                                        <path d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                        <path d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            Orders
                                        </div>
                                        <a href="../../../pages/ecommerce/orders/list.html" class="dropdown-item border-radius-md">
                                            Link 1
                                        </a>
                                        <a href="../../../pages/pages/orders/details.html" class="dropdown-item border-radius-md">
                                            Link 2
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                        <path d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                        <path d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            General
                                        </div>
                                        <a href="../../../pages/ecommerce/overview.html" class="dropdown-item border-radius-md">
                                            Overview
                                        </a>
                                        <a href="../../../pages/ecommerce/referral.html" class="dropdown-item border-radius-md">
                                            Referral
                                        </a>
                                        <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon icon-shape icon-xs border-radius-md bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center ps-0">
                                                    <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>shop </title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(0.000000, 148.000000)">
                                                                        <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                                                        <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            Products
                                        </div>
                                        <a href="../../../pages/ecommerce/products/new-product.html" class="dropdown-item border-radius-md">
                                            New Product
                                        </a>
                                        <a href="../../../pages/ecommerce/products/edit-product.html" class="dropdown-item border-radius-md">
                                            Edit Product
                                        </a>
                                        <a href="../../../pages/ecommerce/products/product-page.html" class="dropdown-item border-radius-md">
                                            Product Page
                                        </a>
                                        <a href="../../../pages/ecommerce/products/products-list.html" class="dropdown-item border-radius-md">
                                            Products List
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a role="button" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center " id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                    FAQs
                                    <img src=" ../../../assets/img/down-arrow-dark.svg " alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                                    <img src="../../../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                                    <div class="d-none d-lg-block">
                                        <ul class="list-group">
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>spaceship</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(4.000000, 301.000000)">
                                                                                <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                                <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                                <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                                <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">¿Como me registro?</h6>
                                                            <span class="text-sm">Una guía detallada para llevar a cabo un regisgtro exitoso. </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/soft-ui-dashboard">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>switches</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(154.000000, 149.000000)">
                                                                                <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                                                                                <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">¿Quienes participan?</h6>
                                                            <span class="text-sm">Conoce a detalle sobre nuestros ponentes y todos nuestros invitados.</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item list-group-item border-0 p-0">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/soft-ui-dashboard">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <title>settings</title>
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                        <g transform="translate(1716.000000, 291.000000)">
                                                                            <g transform="translate(304.000000, 151.000000)">
                                                                                <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                                <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                                <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Datos del Evento</h6>
                                                            <span class="text-sm">Fecha, Hora, Lugar, Sede y otros datos de importancia.</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="row d-lg-none">
                                        <div class="col-md-12 g-0">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/about-us.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>spaceship</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(4.000000, 301.000000)">
                                                                            <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                            <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                            <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                            <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Getting Started</h6>
                                                        <span class="text-sm">All about overview, quick start, license and contents</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/about-us.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>document</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(154.000000, 300.000000)">
                                                                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Foundation</h6>
                                                        <span class="text-sm">See our colors, icons and typography</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/about-us.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>box-3d-50</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(603.000000, 0.000000)">
                                                                            <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                            <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                            <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Components</h6>
                                                        <span class="text-sm">Explore our collection of fully designed components</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/about-us.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>switches</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(154.000000, 149.000000)">
                                                                            <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                                                                            <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Plugins</h6>
                                                        <span class="text-sm">Check how you can integrate our plugins</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="../../../pages/about-us.html">
                                                <div class="d-flex">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <title>settings</title>
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                    <g transform="translate(1716.000000, 291.000000)">
                                                                        <g transform="translate(304.000000, 151.000000)">
                                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">Utility Classes</h6>
                                                        <span class="text-sm">All about overview, quick start, license and contents</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="/Login/" class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">Iniciar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-7">
                                <div class="container-fluid py-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="multisteps-form">
                                                <!--progress bar-->
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 mx-auto my-4">
                                                        <div class="multisteps-form__progress">
                                                            <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                                                <span>Crear cuenta</span>
                                                            </button>
                                                            <button class="multisteps-form__progress-btn" type="button" title="Address">Verificar email</button>
                                                            <button class="multisteps-form__progress-btn" type="button" title="Address">Mis Datos</button>
                                                            <button class="multisteps-form__progress-btn" type="button" title="Socials">Crear contraseña</button>
                                                            <!--<button class="multisteps-form__progress-btn" type="button" title="Profile">Profile</button>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--form panels-->
                                                <div class="row">
                                                    <div class="col-12 col-lg-12 m-auto">
                                                        <form class="multisteps-form__form">
                                                            <!--single form panel-->
                                                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                                                <h5 class="font-weight-bolder mb-0">Crear cuenta</h5>
                                                                <!--<p class="mb-0 text-sm">Mandatory informations</p>-->
                                                                <div class="multisteps-form__content">
                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>Ingresa tu Email:</label>
                                                                            <input class="multisteps-form__input form-control" type="email" id="email" name="email" placeholder="usuario@grupolahe.com">
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                            <label>Confirma tu Email:</label>
                                                                            <input class="multisteps-form__input form-control" type="text" id="confirm_email" name="confirm_email" placeholder="usuario@grupolahe.com" autocomplete="no">
                                                                        </div>
                                                                    </div>

                                                                    <div class="button-row d-flex mt-4">
                                                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Siguiente</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--single form panel-->
                                                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                                <!--<h5 class="font-weight-bolder">Address</h5>-->




                                                                <main class="main-content  mt-0">
                                                                    <div>
                                                                        <div class="container">
                                                                            <div class="row justify-content-center">
                                                                                <div class="col-lg-7 col-md-7">
                                                                                    <div class="card-body px-lg-2 py-lg-2 text-center">
                                                                                        <div class="info mb-4">
                                                                                            <div class="icon icon-shape icon-xl rounded-circle bg-gradient-info shadow text-center py-3 mx-auto">
                                                                                                <svg class="mt-3" width="40px" height="35px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                                                    <title>spaceship</title>
                                                                                                    <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                        <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                                                            <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                                                                                <g id="spaceship" transform="translate(4.000000, 301.000000)">
                                                                                                                    <path d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z" id="Shape"></path>
                                                                                                                    <path d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path>
                                                                                                                    <path d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2" opacity="0.598539807"></path>
                                                                                                                    <path d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-center text-muted mb-2">
                                                                                            <h3>Enviar código de verificación</h3>
                                                                                        </div>
                                                                                        <div class="row gx-2 gx-sm-3">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control form-control-lg" maxlength="1" autocomplete="off" autocapitalize="off">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-center">
                                                                                            <button type="button" class="btn bg-gradient-info w-100">Verificar mi código</button>
                                                                                            <span class="text-muted text-sm">¿No ha recibido recibido un código?<a href="javascript:;"> Reenviar un nuevo código</a>.</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </main>

                                                            </div>

                                                            

                                                            <!--single form panel-->
                                                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                                <div class="multisteps-form__content">
                                                                    <div class="card-header">
                                                                        <h5>Información Básica</h5>
                                                                    </div>
                                                                    <div class="card-body pt-0">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <label class="form-label">Nombre *</label>
                                                                                <div class="input-group">
                                                                                    <input id="firstName" name="firstName" class="form-control" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <label class="form-label">Apellido Paterno *</label>
                                                                                <div class="input-group">
                                                                                    <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <label class="form-label">Apellido Materno *</label>
                                                                                <div class="input-group">
                                                                                    <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-sm-4 col-6">
                                                                                
                                                                                <label class="form-label mt-4">Me identifico como: *</label>
                                                                                <select class="form-control choices__input" name="choices-button" id="choices-button" placeholder="Genero" >
                                                                                    <option value="Male">Hombre</option>
                                                                                    <option value="Male">Mujer</option>
                                                                                    <option value="Male">Otro</option>
                                                                                </select>
                                                                                <!-- <div class="choices" data-type="select-one" tabindex="0" hidden="" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                                                    
                                                                                </div> -->
                                                                                <!-- <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                                                        <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder="">
                                                                                        <div class="choices__list" role="listbox">
                                                                                            <div id="choices--choices-gender-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Female" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Female</div>
                                                                                            <div id="choices--choices-gender-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Male" data-select-text="Press to select" data-choice-selectable="">Male</div>
                                                                                        </div>
                                                                                    </div> -->
                                                                                <!-- </div> -->
                                                                            </div>

                                                                            <div class="col-sm-8">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-5">
                                                                                        <label class="form-label mt-4">Fecha de Nacimiento *</label>
                                                                                            <select class="form-control" name="choices-button" id="choices-button" placeholder="Mes" >
                                                                                                <option value="Male">Enero</option>
                                                                                                <option value="Male">Febrero</option>
                                                                                                <option value="Male">Marzo</option>
                                                                                            </select>

                                                                                        <!--
                                                                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                                                                <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder="">
                                                                                                <div class="choices__list" role="listbox">
                                                                                                    <div id="choices--choices-month-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="4" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">April</div>
                                                                                                    <div id="choices--choices-month-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="8" data-select-text="Press to select" data-choice-selectable="">August</div><div id="choices--choices-month-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="12" data-select-text="Press to select" data-choice-selectable="">December</div><div id="choices--choices-month-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="2" data-select-text="Press to select" data-choice-selectable="">February</div>
                                                                                                    <div id="choices--choices-month-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="1" data-select-text="Press to select" data-choice-selectable="">January</div><div id="choices--choices-month-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="7" data-select-text="Press to select" data-choice-selectable="">July</div><div id="choices--choices-month-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="6" data-select-text="Press to select" data-choice-selectable="">June</div>
                                                                                                    <div id="choices--choices-month-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="3" data-select-text="Press to select" data-choice-selectable="">March</div><div id="choices--choices-month-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="5" data-select-text="Press to select" data-choice-selectable="">May</div><div id="choices--choices-month-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="11" data-select-text="Press to select" data-choice-selectable="">November</div>
                                                                                                    <div id="choices--choices-month-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="10" data-select-text="Press to select" data-choice-selectable="">October</div><div id="choices--choices-month-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="9" data-select-text="Press to select" data-choice-selectable="">September</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> -->
                                                                                    </div>
                                                                                    <div class="col-sm-3 col-3">
                                                                                        <label class="form-label mt-4">&nbsp;</label>
                                                                                        <!-- <div class="choices__inner" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"> -->
                                                                                        <select class="form-control" name="choices-day" id="choices-day" tabindex="-1" data-choice="active">
                                                                                            <option value="1">1</option>
                                                                                            <option value="2">2</option>
                                                                                            <option value="3">3</option>
                                                                                            <option value="4">4</option>
                                                                                            <option value="5">5</option>
                                                                                            <option value="6">6</option>
                                                                                            <option value="7">7</option>
                                                                                            <option value="8">8</option>
                                                                                            <option value="9">9</option>
                                                                                        </select>

                                                                                            <!-- <div class="choices__inner">
                                                                                                <select class="form-control choices__input" name="choices-day" id="choices-day" hidden="" tabindex="-1" data-choice="active">
                                                                                                    <option value="1">1</option>
                                                                                                </select>
                                                                                                <div class="choices__list choices__list--single">
                                                                                                    <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" data-custom-properties="null" aria-selected="true">1</div>
                                                                                                </div>
                                                                                            </div> -->
                                                                                            <!-- <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                                                                <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder="">
                                                                                                <div class="choices__list" role="listbox">
                                                                                                    <div id="choices--choices-day-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">1</div>
                                                                                                    <div id="choices--choices-day-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="2" data-select-text="Press to select" data-choice-selectable="">2</div>
                                                                                                    <div id="choices--choices-day-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="3" data-select-text="Press to select" data-choice-selectable="">3</div>
                                                                                                    <div id="choices--choices-day-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="4" data-select-text="Press to select" data-choice-selectable="">4</div>
                                                                                                    <div id="choices--choices-day-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="5" data-select-text="Press to select" data-choice-selectable="">5</div>
                                                                                                    <div id="choices--choices-day-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="6" data-select-text="Press to select" data-choice-selectable="">6</div>
                                                                                                    <div id="choices--choices-day-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="7" data-select-text="Press to select" data-choice-selectable="">7</div>
                                                                                                    <div id="choices--choices-day-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="8" data-select-text="Press to select" data-choice-selectable="">8</div>
                                                                                                    <div id="choices--choices-day-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="9" data-select-text="Press to select" data-choice-selectable="">9</div><div id="choices--choices-day-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="10" data-select-text="Press to select" data-choice-selectable="">10</div><div id="choices--choices-day-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="11" data-select-text="Press to select" data-choice-selectable="">11</div><div id="choices--choices-day-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="12" data-select-text="Press to select" data-choice-selectable="">12</div><div id="choices--choices-day-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="13" data-select-text="Press to select" data-choice-selectable="">13</div><div id="choices--choices-day-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="14" data-select-text="Press to select" data-choice-selectable="">14</div><div id="choices--choices-day-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="15" data-select-text="Press to select" data-choice-selectable="">15</div><div id="choices--choices-day-item-choice-16" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="16" data-value="16" data-select-text="Press to select" data-choice-selectable="">16</div><div id="choices--choices-day-item-choice-17" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="17" data-value="17" data-select-text="Press to select" data-choice-selectable="">17</div><div id="choices--choices-day-item-choice-18" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="18" data-value="18" data-select-text="Press to select" data-choice-selectable="">18</div><div id="choices--choices-day-item-choice-19" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="19" data-value="19" data-select-text="Press to select" data-choice-selectable="">19</div><div id="choices--choices-day-item-choice-20" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="20" data-value="20" data-select-text="Press to select" data-choice-selectable="">20</div><div id="choices--choices-day-item-choice-21" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="21" data-value="21" data-select-text="Press to select" data-choice-selectable="">21</div><div id="choices--choices-day-item-choice-22" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="22" data-value="22" data-select-text="Press to select" data-choice-selectable="">22</div><div id="choices--choices-day-item-choice-23" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="23" data-value="23" data-select-text="Press to select" data-choice-selectable="">23</div><div id="choices--choices-day-item-choice-24" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="24" data-value="24" data-select-text="Press to select" data-choice-selectable="">24</div><div id="choices--choices-day-item-choice-25" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="25" data-value="25" data-select-text="Press to select" data-choice-selectable="">25</div><div id="choices--choices-day-item-choice-26" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="26" data-value="26" data-select-text="Press to select" data-choice-selectable="">26</div><div id="choices--choices-day-item-choice-27" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="27" data-value="27" data-select-text="Press to select" data-choice-selectable="">27</div><div id="choices--choices-day-item-choice-28" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="28" data-value="28" data-select-text="Press to select" data-choice-selectable="">28</div><div id="choices--choices-day-item-choice-29" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="29" data-value="29" data-select-text="Press to select" data-choice-selectable="">29</div><div id="choices--choices-day-item-choice-30" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="30" data-value="30" data-select-text="Press to select" data-choice-selectable="">30</div><div id="choices--choices-day-item-choice-31" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="31" data-value="31" data-select-text="Press to select" data-choice-selectable="">31</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->
                                                                                    </div>
                                                                                    <div class="col-sm-3 col-4">
                                                                                        <label class="form-label mt-4">&nbsp;</label>
                                                                                        <select class="form-control" name="choices-year" id="choices-year" data-choice="active">
                                                                                            <option value="1991">1991</option>
                                                                                            <option value="1992">1992</option>
                                                                                            <option value="1993">1993</option>
                                                                                            <option value="1994">1994</option>
                                                                                        </select>
                                                                                        <!-- <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                                                            <div class="choices__inner">
                                                                                                <select class="form-control choices__input" name="choices-year" id="choices-year" hidden="" tabindex="-1" data-choice="active">
                                                                                                    <option value="2020">1991</option>
                                                                                                </select>
                                                                                                <div class="choices__list choices__list--single">
                                                                                                    <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="2020" data-custom-properties="null" aria-selected="true">1991</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder="">
                                                                                                <div class="choices__list" role="listbox">
                                                                                                    <div id="choices--choices-year-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="1900" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">1900</div>
                                                                                                    <div id="choices--choices-year-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="1901" data-select-text="Press to select" data-choice-selectable="">1901</div>
                                                                                                    <div id="choices--choices-year-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="1902" data-select-text="Press to select" data-choice-selectable="">1902</div>
                                                                                                    <div id="choices--choices-year-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="1903" data-select-text="Press to select" data-choice-selectable="">1903</div>
                                                                                                    <div id="choices--choices-year-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="1904" data-select-text="Press to select" data-choice-selectable="">1904</div>
                                                                                                    <div id="choices--choices-year-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="1905" data-select-text="Press to select" data-choice-selectable="">1905</div>
                                                                                                    <div id="choices--choices-year-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="1906" data-select-text="Press to select" data-choice-selectable="">1906</div>
                                                                                                    <div id="choices--choices-year-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="1907" data-select-text="Press to select" data-choice-selectable="">1907</div>
                                                                                                    <div id="choices--choices-year-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="1908" data-select-text="Press to select" data-choice-selectable="">1908</div>
                                                                                                    <div id="choices--choices-year-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="1909" data-select-text="Press to select" data-choice-selectable="">1909</div>
                                                                                                    <div id="choices--choices-year-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="1910" data-select-text="Press to select" data-choice-selectable="">1910</div>
                                                                                                    <div id="choices--choices-year-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="1911" data-select-text="Press to select" data-choice-selectable="">1911</div>
                                                                                                    <div id="choices--choices-year-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="1912" data-select-text="Press to select" data-choice-selectable="">1912</div>
                                                                                                    <div id="choices--choices-year-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="1913" data-select-text="Press to select" data-choice-selectable="">1913</div>
                                                                                                    <div id="choices--choices-year-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="1914" data-select-text="Press to select" data-choice-selectable="">1914</div>
                                                                                                    <div id="choices--choices-year-item-choice-16" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="16" data-value="1915" data-select-text="Press to select" data-choice-selectable="">1915</div>
                                                                                                    <div id="choices--choices-year-item-choice-17" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="17" data-value="1916" data-select-text="Press to select" data-choice-selectable="">1916</div>
                                                                                                    <div id="choices--choices-year-item-choice-18" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="18" data-value="1917" data-select-text="Press to select" data-choice-selectable="">1917</div>
                                                                                                    <div id="choices--choices-year-item-choice-19" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="19" data-value="1918" data-select-text="Press to select" data-choice-selectable="">1918</div>
                                                                                                    <div id="choices--choices-year-item-choice-20" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="20" data-value="1919" data-select-text="Press to select" data-choice-selectable="">1919</div>
                                                                                                    <div id="choices--choices-year-item-choice-21" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="21" data-value="1920" data-select-text="Press to select" data-choice-selectable="">1920</div><div id="choices--choices-year-item-choice-22" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="22" data-value="1921" data-select-text="Press to select" data-choice-selectable="">1921</div><div id="choices--choices-year-item-choice-23" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="23" data-value="1922" data-select-text="Press to select" data-choice-selectable="">1922</div><div id="choices--choices-year-item-choice-24" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="24" data-value="1923" data-select-text="Press to select" data-choice-selectable="">1923</div><div id="choices--choices-year-item-choice-25" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="25" data-value="1924" data-select-text="Press to select" data-choice-selectable="">1924</div><div id="choices--choices-year-item-choice-26" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="26" data-value="1925" data-select-text="Press to select" data-choice-selectable="">1925</div><div id="choices--choices-year-item-choice-27" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="27" data-value="1926" data-select-text="Press to select" data-choice-selectable="">1926</div><div id="choices--choices-year-item-choice-28" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="28" data-value="1927" data-select-text="Press to select" data-choice-selectable="">1927</div><div id="choices--choices-year-item-choice-29" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="29" data-value="1928" data-select-text="Press to select" data-choice-selectable="">1928</div><div id="choices--choices-year-item-choice-30" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="30" data-value="1929" data-select-text="Press to select" data-choice-selectable="">1929</div><div id="choices--choices-year-item-choice-31" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="31" data-value="1930" data-select-text="Press to select" data-choice-selectable="">1930</div><div id="choices--choices-year-item-choice-32" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="32" data-value="1931" data-select-text="Press to select" data-choice-selectable="">1931</div><div id="choices--choices-year-item-choice-33" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="33" data-value="1932" data-select-text="Press to select" data-choice-selectable="">1932</div><div id="choices--choices-year-item-choice-34" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="34" data-value="1933" data-select-text="Press to select" data-choice-selectable="">1933</div><div id="choices--choices-year-item-choice-35" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="35" data-value="1934" data-select-text="Press to select" data-choice-selectable="">1934</div><div id="choices--choices-year-item-choice-36" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="36" data-value="1935" data-select-text="Press to select" data-choice-selectable="">1935</div><div id="choices--choices-year-item-choice-37" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="37" data-value="1936" data-select-text="Press to select" data-choice-selectable="">1936</div><div id="choices--choices-year-item-choice-38" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="38" data-value="1937" data-select-text="Press to select" data-choice-selectable="">1937</div><div id="choices--choices-year-item-choice-39" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="39" data-value="1938" data-select-text="Press to select" data-choice-selectable="">1938</div><div id="choices--choices-year-item-choice-40" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="40" data-value="1939" data-select-text="Press to select" data-choice-selectable="">1939</div><div id="choices--choices-year-item-choice-41" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="41" data-value="1940" data-select-text="Press to select" data-choice-selectable="">1940</div><div id="choices--choices-year-item-choice-42" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="42" data-value="1941" data-select-text="Press to select" data-choice-selectable="">1941</div><div id="choices--choices-year-item-choice-43" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="43" data-value="1942" data-select-text="Press to select" data-choice-selectable="">1942</div><div id="choices--choices-year-item-choice-44" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="44" data-value="1943" data-select-text="Press to select" data-choice-selectable="">1943</div><div id="choices--choices-year-item-choice-45" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="45" data-value="1944" data-select-text="Press to select" data-choice-selectable="">1944</div><div id="choices--choices-year-item-choice-46" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="46" data-value="1945" data-select-text="Press to select" data-choice-selectable="">1945</div><div id="choices--choices-year-item-choice-47" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="47" data-value="1946" data-select-text="Press to select" data-choice-selectable="">1946</div><div id="choices--choices-year-item-choice-48" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="48" data-value="1947" data-select-text="Press to select" data-choice-selectable="">1947</div><div id="choices--choices-year-item-choice-49" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="49" data-value="1948" data-select-text="Press to select" data-choice-selectable="">1948</div><div id="choices--choices-year-item-choice-50" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="50" data-value="1949" data-select-text="Press to select" data-choice-selectable="">1949</div><div id="choices--choices-year-item-choice-51" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="51" data-value="1950" data-select-text="Press to select" data-choice-selectable="">1950</div><div id="choices--choices-year-item-choice-52" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="52" data-value="1951" data-select-text="Press to select" data-choice-selectable="">1951</div><div id="choices--choices-year-item-choice-53" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="53" data-value="1952" data-select-text="Press to select" data-choice-selectable="">1952</div><div id="choices--choices-year-item-choice-54" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="54" data-value="1953" data-select-text="Press to select" data-choice-selectable="">1953</div><div id="choices--choices-year-item-choice-55" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="55" data-value="1954" data-select-text="Press to select" data-choice-selectable="">1954</div><div id="choices--choices-year-item-choice-56" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="56" data-value="1955" data-select-text="Press to select" data-choice-selectable="">1955</div><div id="choices--choices-year-item-choice-57" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="57" data-value="1956" data-select-text="Press to select" data-choice-selectable="">1956</div><div id="choices--choices-year-item-choice-58" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="58" data-value="1957" data-select-text="Press to select" data-choice-selectable="">1957</div><div id="choices--choices-year-item-choice-59" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="59" data-value="1958" data-select-text="Press to select" data-choice-selectable="">1958</div>
                                                                                                    <div id="choices--choices-year-item-choice-60" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="60" data-value="1959" data-select-text="Press to select" data-choice-selectable="">1959</div><div id="choices--choices-year-item-choice-61" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="61" data-value="1960" data-select-text="Press to select" data-choice-selectable="">1960</div><div id="choices--choices-year-item-choice-62" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="62" data-value="1961" data-select-text="Press to select" data-choice-selectable="">1961</div><div id="choices--choices-year-item-choice-63" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="63" data-value="1962" data-select-text="Press to select" data-choice-selectable="">1962</div><div id="choices--choices-year-item-choice-64" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="64" data-value="1963" data-select-text="Press to select" data-choice-selectable="">1963</div><div id="choices--choices-year-item-choice-65" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="65" data-value="1964" data-select-text="Press to select" data-choice-selectable="">1964</div><div id="choices--choices-year-item-choice-66" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="66" data-value="1965" data-select-text="Press to select" data-choice-selectable="">1965</div><div id="choices--choices-year-item-choice-67" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="67" data-value="1966" data-select-text="Press to select" data-choice-selectable="">1966</div><div id="choices--choices-year-item-choice-68" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="68" data-value="1967" data-select-text="Press to select" data-choice-selectable="">1967</div><div id="choices--choices-year-item-choice-69" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="69" data-value="1968" data-select-text="Press to select" data-choice-selectable="">1968</div><div id="choices--choices-year-item-choice-70" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="70" data-value="1969" data-select-text="Press to select" data-choice-selectable="">1969</div><div id="choices--choices-year-item-choice-71" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="71" data-value="1970" data-select-text="Press to select" data-choice-selectable="">1970</div><div id="choices--choices-year-item-choice-72" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="72" data-value="1971" data-select-text="Press to select" data-choice-selectable="">1971</div><div id="choices--choices-year-item-choice-73" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="73" data-value="1972" data-select-text="Press to select" data-choice-selectable="">1972</div><div id="choices--choices-year-item-choice-74" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="74" data-value="1973" data-select-text="Press to select" data-choice-selectable="">1973</div><div id="choices--choices-year-item-choice-75" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="75" data-value="1974" data-select-text="Press to select" data-choice-selectable="">1974</div><div id="choices--choices-year-item-choice-76" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="76" data-value="1975" data-select-text="Press to select" data-choice-selectable="">1975</div><div id="choices--choices-year-item-choice-77" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="77" data-value="1976" data-select-text="Press to select" data-choice-selectable="">1976</div><div id="choices--choices-year-item-choice-78" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="78" data-value="1977" data-select-text="Press to select" data-choice-selectable="">1977</div><div id="choices--choices-year-item-choice-79" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="79" data-value="1978" data-select-text="Press to select" data-choice-selectable="">1978</div><div id="choices--choices-year-item-choice-80" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="80" data-value="1979" data-select-text="Press to select" data-choice-selectable="">1979</div><div id="choices--choices-year-item-choice-81" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="81" data-value="1980" data-select-text="Press to select" data-choice-selectable="">1980</div><div id="choices--choices-year-item-choice-82" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="82" data-value="1981" data-select-text="Press to select" data-choice-selectable="">1981</div><div id="choices--choices-year-item-choice-83" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="83" data-value="1982" data-select-text="Press to select" data-choice-selectable="">1982</div><div id="choices--choices-year-item-choice-84" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="84" data-value="1983" data-select-text="Press to select" data-choice-selectable="">1983</div><div id="choices--choices-year-item-choice-85" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="85" data-value="1984" data-select-text="Press to select" data-choice-selectable="">1984</div><div id="choices--choices-year-item-choice-86" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="86" data-value="1985" data-select-text="Press to select" data-choice-selectable="">1985</div><div id="choices--choices-year-item-choice-87" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="87" data-value="1986" data-select-text="Press to select" data-choice-selectable="">1986</div><div id="choices--choices-year-item-choice-88" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="88" data-value="1987" data-select-text="Press to select" data-choice-selectable="">1987</div><div id="choices--choices-year-item-choice-89" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="89" data-value="1988" data-select-text="Press to select" data-choice-selectable="">1988</div><div id="choices--choices-year-item-choice-90" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="90" data-value="1989" data-select-text="Press to select" data-choice-selectable="">1989</div><div id="choices--choices-year-item-choice-91" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="91" data-value="1990" data-select-text="Press to select" data-choice-selectable="">1990</div><div id="choices--choices-year-item-choice-92" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="92" data-value="1991" data-select-text="Press to select" data-choice-selectable="">1991</div><div id="choices--choices-year-item-choice-93" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="93" data-value="1992" data-select-text="Press to select" data-choice-selectable="">1992</div><div id="choices--choices-year-item-choice-94" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="94" data-value="1993" data-select-text="Press to select" data-choice-selectable="">1993</div><div id="choices--choices-year-item-choice-95" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="95" data-value="1994" data-select-text="Press to select" data-choice-selectable="">1994</div><div id="choices--choices-year-item-choice-96" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="96" data-value="1995" data-select-text="Press to select" data-choice-selectable="">1995</div><div id="choices--choices-year-item-choice-97" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="97" data-value="1996" data-select-text="Press to select" data-choice-selectable="">1996</div><div id="choices--choices-year-item-choice-98" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="98" data-value="1997" data-select-text="Press to select" data-choice-selectable="">1997</div>
                                                                                                    <div id="choices--choices-year-item-choice-99" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="99" data-value="1998" data-select-text="Press to select" data-choice-selectable="">1998</div><div id="choices--choices-year-item-choice-100" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="100" data-value="1999" data-select-text="Press to select" data-choice-selectable="">1999</div><div id="choices--choices-year-item-choice-101" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="101" data-value="2000" data-select-text="Press to select" data-choice-selectable="">2000</div><div id="choices--choices-year-item-choice-102" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="102" data-value="2001" data-select-text="Press to select" data-choice-selectable="">2001</div><div id="choices--choices-year-item-choice-103" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="103" data-value="2002" data-select-text="Press to select" data-choice-selectable="">2002</div><div id="choices--choices-year-item-choice-104" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="104" data-value="2003" data-select-text="Press to select" data-choice-selectable="">2003</div><div id="choices--choices-year-item-choice-105" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="105" data-value="2004" data-select-text="Press to select" data-choice-selectable="">2004</div><div id="choices--choices-year-item-choice-106" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="106" data-value="2005" data-select-text="Press to select" data-choice-selectable="">2005</div><div id="choices--choices-year-item-choice-107" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="107" data-value="2006" data-select-text="Press to select" data-choice-selectable="">2006</div><div id="choices--choices-year-item-choice-108" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="108" data-value="2007" data-select-text="Press to select" data-choice-selectable="">2007</div><div id="choices--choices-year-item-choice-109" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="109" data-value="2008" data-select-text="Press to select" data-choice-selectable="">2008</div><div id="choices--choices-year-item-choice-110" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="110" data-value="2009" data-select-text="Press to select" data-choice-selectable="">2009</div><div id="choices--choices-year-item-choice-111" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="111" data-value="2010" data-select-text="Press to select" data-choice-selectable="">2010</div><div id="choices--choices-year-item-choice-112" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="112" data-value="2011" data-select-text="Press to select" data-choice-selectable="">2011</div><div id="choices--choices-year-item-choice-113" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="113" data-value="2012" data-select-text="Press to select" data-choice-selectable="">2012</div><div id="choices--choices-year-item-choice-114" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="114" data-value="2013" data-select-text="Press to select" data-choice-selectable="">2013</div><div id="choices--choices-year-item-choice-115" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="115" data-value="2014" data-select-text="Press to select" data-choice-selectable="">2014</div><div id="choices--choices-year-item-choice-116" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="116" data-value="2015" data-select-text="Press to select" data-choice-selectable="">2015</div><div id="choices--choices-year-item-choice-117" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="117" data-value="2016" data-select-text="Press to select" data-choice-selectable="">2016</div><div id="choices--choices-year-item-choice-118" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="118" data-value="2017" data-select-text="Press to select" data-choice-selectable="">2017</div><div id="choices--choices-year-item-choice-119" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="119" data-value="2018" data-select-text="Press to select" data-choice-selectable="">2018</div><div id="choices--choices-year-item-choice-120" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="120" data-value="2019" data-select-text="Press to select" data-choice-selectable="">2019</div><div id="choices--choices-year-item-choice-121" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="121" data-value="2020" data-select-text="Press to select" data-choice-selectable="">1991</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <label class="form-label mt-4">Email Rregistrado y Verificado</label>
                                                                                <div class="input-group">
                                                                                    <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" value="user@asofarma.com">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <label class="form-label mt-4">Número de Telefono</label>
                                                                                <div class="input-group">
                                                                                    <input id="phone" name="phone" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="+52 7293787668">
                                                                                </div>
                                                                            </div>

                                                                            
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6 align-self-center">
                                                                                <label class="form-label mt-4">Pertenezco a la Línea ASOFARMA</label>
                                                                                <select class="form-control" name="choices-linea" id="choices-language" tabindex="-1" data-choice="active">
                                                                                    <option value="asofem">ASOFEM</option>
                                                                                </select>
                                                                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                                                                    <div class="choices__inner">
                                                                                        <select class="form-control choices__input" name="choices-language" id="choices-language" hidden="" tabindex="-1" data-choice="active">
                                                                                            <option value="English"></option>
                                                                                        </select>
                                                                                        <div class="choices__list choices__list--single">
                                                                                            <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="English" data-custom-properties="null" aria-selected="true">ASOFEM</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                                                        <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder="">
                                                                                        <div class="choices__list" role="listbox">
                                                                                            <div id="choices--choices-language-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="English" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">English</div>
                                                                                            <div id="choices--choices-language-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="French" data-select-text="Press to select" data-choice-selectable="">French</div>
                                                                                            <div id="choices--choices-language-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Spanish" data-select-text="Press to select" data-choice-selectable="">Spanish</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label mt-4">Alergias</label>
                                                                                <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">
                                                                                    <div class="choices__inner">
                                                                                        <input class="form-control choices__input" id="choices-skills" type="text" value="vuejs,angular,react" placeholder="Enter something" hidden="" tabindex="-1" data-choice="active" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                                        <div class="choices__list choices__list--multiple">
                                                                                            <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="vuejs" data-custom-properties="null" aria-selected="true" data-deletable="">
                                                                                                Leche
                                                                                                <button type="button" class="choices__button" aria-label="Remove item: 'vuejs'" data-button="">Remove item</button>
                                                                                            </div>
                                                                                            <div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="angular" data-custom-properties="null" aria-selected="true" data-deletable="">
                                                                                                Polen
                                                                                                <button type="button" class="choices__button" aria-label="Remove item: 'angular'" data-button="">Remove item</button>
                                                                                            </div>
                                                                                            <div class="choices__item choices__item--selectable" data-item="" data-id="3" data-value="react" data-custom-properties="null" aria-selected="true" data-deletable="">
                                                                                                Huevo
                                                                                                <button type="button" class="choices__button" aria-label="Remove item: 'react'" data-button="">Remove item</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false"></div>
                                                                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">

                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Regresar</button>
                                                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Siguiente</button>
                                                                </div>
                                                            </div>

                                                            <!--single form panel-->
                                                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                                                <!-- <h5 class="font-weight-bolder">Crear Contraseña</h5>-->
                                                                <div class="multisteps-form__content">
                                                                    <div class="row mt-3">
                                                                        <div class="col-12 col-sm-6">
                                                                            <label>Contraseña:</label>
                                                                            <input class="multisteps-form__input form-control" type="password" placeholder="********" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                            <label>Confirma Contraseña:</label>
                                                                            <input class="multisteps-form__input form-control" type="password" placeholder="********" onfocus="focused(this)" onfocusout="defocused(this)">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="button-row d-flex mt-4 col-12">
                                                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Regresar</button>
                                                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Next">Finalizar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <footer class="footer pt-3  ">
                                                    <div class="container-fluid">
                                                        <div class="row align-items-center justify-content-lg-between">
                                                            <div class="col-lg-6 mb-lg-0 mb-1s">
                                                                <div class="copyright text-center text-sm text-muted text-lg-start">


                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


    </body>

<?php echo $footer; ?>