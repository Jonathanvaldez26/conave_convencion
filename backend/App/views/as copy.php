<?php echo $header; ?>
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-2">
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
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/Home/">Inicio</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;" disabled>Datos Personales</a></li>
                </ol>
            </nav> -->

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>

                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/Home/" class="nav-link text-body font-weight-bold mx-lg-4 mx-0 px-0">
                            <i class="fa fa-home me-sm-0"></i>
                            <span class="d-sm-inline d-none">Inicio</span>
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
        <div class="row mt-lg-5 mt-2">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 mt-lg-0 mt-0">
                <!-- Card Profile -->
                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="../../../assets/img/bruce-mars.jpg" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    CARLOS CRUZ SÁNCHEZ
                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                    Equipo Asofarma
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <label class="form-check-label mb-0">
                            </label>
                        </div>
                    </div>
                </div>

                
                <!-- Card Basic Info -->
                <div class="card mt-4" id="basic-info">
                    <div class="card-header">
                        <h5>Información Básica</h5>
                        <?php $prueba;?>
                        <?php //$userData; ?>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Nombre *</label>
                                <div class="input-group">
                                    <input id="firstName" name="firstName" class="form-control" type="text" placeholder="Alec" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?=$userData['nombre']?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Apellido Paterno *</label>
                                <div class="input-group">
                                    <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?=$userData['apellido_p']?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Apellido Materno *</label>
                                <div class="input-group">
                                    <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required" onfocus="focused(this)" onfocusout="defocused(this)" value="<?=$userData['apellido_m']?>">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="choices" data-type="select-one" hidden tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner">
                                <select class="choices__input choices__input--cloned form -control choices__list" aria-expanded="false" name="choices-button" id="choices-button" placeholder="Genero" hidden="" tabindex="-1" data-choice="active"><option value="Male">Hombre</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Male" data-custom-properties="null" aria-selected="true">Hombre</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="false" placeholder=""><div class="choices__list" role="listbox"><div id="choices--choices-button-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Male" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Hombre</div><div id="choices--choices-button-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Male" data-select-text="Press to select" data-choice-selectable="">Mujer</div><div id="choices--choices-button-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Male" data-select-text="Press to select" data-choice-selectable="">Otro</div></div></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-12">                                      
                                <label class="form-label mt-4">Me identifico como: *</label>
                                <!-- <select class="form-control" style="cursor: pointer;" name="choices-button" id="choices-button" placeholder="Genero" >
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Otro">Otro</option>
                                </select> -->
                                <input type="text" class="form-control" value="<?=$userData['genero']?>" disabled>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-5 col-5">
                                        <label class="form-label mt-4">Fecha de Nacimiento *</label>
                                        <!-- <select class="form-control" style="cursor: pointer;" name="choices-button" id="choices-button" placeholder="Mes" >
                                            <option value="Male">Enero</option>
                                            <option value="Male">Febrero</option>
                                            <option value="Male">Marzo</option> -->
                                            <input type="date" class="form-control" value="<?=$userData['fecha_nacimiento']?>"> 
                                        </select>
                                    </div>
                                    <!-- <div class="col-sm-4 col-3 mt-lg-0 mt-3">
                                        <label class="form-label mt-4">&nbsp;</label>
                                        <select class="form-control choices__inner" style="cursor: pointer;" name="choices-day" id="choices-day" tabindex="-1" data-choice="active">
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
                                    </div> -->
                                    <!-- <div class="col-sm-3 col-4 mt-lg-0 mt-3">
                                        <label class="form-label mt-4">&nbsp;</label>
                                        <select class="form-control" style="cursor: pointer;" name="choices-year" id="choices-year" data-choice="active">
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label class="form-label mt-4">Email Rregistrado y Verificado</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com" onfocus="focused(this)" onfocusout="defocused(this)" disabled value="<?=$userData['usuario']?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <label class="form-label mt-4">Número de Telefono</label>
                                <div class="input-group">
                                    <input id="phone" name="phone" class="form-control" type="number" placeholder="+40 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)" value="<?=$userData['telefono']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <label class="form-label mt-4">Pertenezco a la Línea ASOFARMA</label>
                                <select class="form-control" style="cursor: pointer;" name="choices-linea" id="choices-linea" tabindex="-1" data-choice="active" disabled>
                                    <option value="asofem">ASOFEM</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-4">Alergias</label>
                                <input class="form-control" id="choices-tags" data-color="dark" type="text" value="<?=$userData['alergias']?>" placeholder="Enter something" />
                                <!-- <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">
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
                                    </div> -->
                            </div>
                        </div>
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
            </div>
        </div>

    </div>
    <?php echo $footer; ?>
</main>




