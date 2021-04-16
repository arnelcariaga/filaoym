<div class="row">
    <div class="col-12">
        <div class="mb-2">
            <h1>Lista de citas</h1>
            <div class="top-right-button-container">
                   <button type="button" class="btn btn-primary btn-sm top-right-button mr-1">ADD NEW</button>
           </div>
           <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb pt-0">
                <li class="breadcrumb-item">
                    <a href="#">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Agenda de citas registradas</li>
            </ol>
        </nav>
    </div>

    <div class="mb-2">
        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
            Display Options
            <i class="simple-icon-arrow-down align-middle"></i>
        </a>
        <div class="collapse dont-collapse-sm" id="displayOptions">
            <span class="mr-3 mb-2 d-inline-block float-md-left">
                <a href="#" class="mr-2 view-icon active">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                        <path class="view-icon-svg" d="M17.5,3H.5a.5.5,0,0,1,0-1h17a.5.5,0,0,1,0,1Z"></path>
                        <path class="view-icon-svg" d="M17.5,10H.5a.5.5,0,0,1,0-1h17a.5.5,0,0,1,0,1Z"></path>
                        <path class="view-icon-svg" d="M17.5,17H.5a.5.5,0,0,1,0-1h17a.5.5,0,0,1,0,1Z"></path>
                    </svg>
                </a>
                <a href="#" class="mr-2 view-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                        <path class="view-icon-svg" d="M17.5,3H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z"></path>
                        <path class="view-icon-svg" d="M3,2V3H1V2H3m.12-1H.88A.87.87,0,0,0,0,1.88V3.12A.87.87,0,0,0,.88,4H3.12A.87.87,0,0,0,4,3.12V1.88A.87.87,0,0,0,3.12,1Z"></path>
                        <path class="view-icon-svg" d="M3,9v1H1V9H3m.12-1H.88A.87.87,0,0,0,0,8.88v1.24A.87.87,0,0,0,.88,11H3.12A.87.87,0,0,0,4,10.12V8.88A.87.87,0,0,0,3.12,8Z"></path>
                        <path class="view-icon-svg" d="M3,16v1H1V16H3m.12-1H.88a.87.87,0,0,0-.88.88v1.24A.87.87,0,0,0,.88,18H3.12A.87.87,0,0,0,4,17.12V15.88A.87.87,0,0,0,3.12,15Z"></path>
                        <path class="view-icon-svg" d="M17.5,10H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z"></path>
                        <path class="view-icon-svg" d="M17.5,17H6.5a.5.5,0,0,1,0-1h11a.5.5,0,0,1,0,1Z"></path></svg>
                    </a>
                    <a href="#" class="mr-2 view-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 19">
                            <path class="view-icon-svg" d="M7,2V8H1V2H7m.12-1H.88A.87.87,0,0,0,0,1.88V8.12A.87.87,0,0,0,.88,9H7.12A.87.87,0,0,0,8,8.12V1.88A.87.87,0,0,0,7.12,1Z"></path>
                            <path class="view-icon-svg" d="M17,2V8H11V2h6m.12-1H10.88a.87.87,0,0,0-.88.88V8.12a.87.87,0,0,0,.88.88h6.24A.87.87,0,0,0,18,8.12V1.88A.87.87,0,0,0,17.12,1Z"></path>
                            <path class="view-icon-svg" d="M7,12v6H1V12H7m.12-1H.88a.87.87,0,0,0-.88.88v6.24A.87.87,0,0,0,.88,19H7.12A.87.87,0,0,0,8,18.12V11.88A.87.87,0,0,0,7.12,11Z"></path>
                            <path class="view-icon-svg" d="M17,12v6H11V12h6m.12-1H10.88a.87.87,0,0,0-.88.88v6.24a.87.87,0,0,0,.88.88h6.24a.87.87,0,0,0,.88-.88V11.88a.87.87,0,0,0-.88-.88Z"></path>
                        </svg>
                    </a>
                </span>
                <div class="d-block d-md-inline-block">
                    <div class="btn-group float-md-left mr-1 mb-1">
                        <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Organizar por
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Fecha</a>
                            <a class="dropdown-item" href="#">Servicios</a>
                        </div>
                    </div>
                    <div class="search-sm calendar-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                        <input class="form-control datepicker" placeholder="D&iacute;a especifico">
                    </div>
                </div>
                <div class="float-md-right">
                    <span class="text-muted text-small">Mostrando 1-10 de 210 registros </span>
                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        20
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">10</a>
                        <a class="dropdown-item active" href="#">20</a>
                        <a class="dropdown-item" href="#">30</a>
                        <a class="dropdown-item" href="#">50</a>
                        <a class="dropdown-item" href="#">100</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator mb-5"></div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-lg-4 mb-5">
        <div class="card d-flex flex-row">
            <a class="d-flex" href="#">
                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                    SK
                </div>
            </a>
            <div class=" d-flex flex-grow-1 min-width-zero">
                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                    <div class="min-width-zero">
                        <a href="#">
                            <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                        </a>
                        <p class="mb-2 text-muted text-small">Executive Director</p>
                        <button type="button" class="btn btn-xs btn-danger ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 mb-5">
        <div class="card d-flex flex-row">
            <a class="d-flex" href="#">
                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                    SK
                </div>
            </a>
            <div class=" d-flex flex-grow-1 min-width-zero">
                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                    <div class="min-width-zero">
                        <a href="#">
                            <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                        </a>
                        <p class="mb-2 text-muted text-small">Executive Director</p>
                        <button type="button" class="btn btn-xs btn-danger ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 mb-5">
        <div class="card d-flex flex-row">
            <a class="d-flex" href="#">
                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                    SK
                </div>
            </a>
            <div class=" d-flex flex-grow-1 min-width-zero">
                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                    <div class="min-width-zero">
                        <a href="#">
                            <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                        </a>
                        <p class="mb-2 text-muted text-small">Executive Director</p>
                        <button type="button" class="btn btn-xs btn-danger ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 mb-5">
        <div class="card d-flex flex-row">
            <a class="d-flex" href="#">
                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                    SK
                </div>
            </a>
            <div class=" d-flex flex-grow-1 min-width-zero">
                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                    <div class="min-width-zero">
                        <a href="#">
                            <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                        </a>
                        <p class="mb-2 text-muted text-small">Executive Director</p>
                        <button type="button" class="btn btn-xs btn-danger ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 mb-5">
        <div class="card d-flex flex-row">
            <a class="d-flex" href="#">
                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters">
                    SK
                </div>
            </a>
            <div class=" d-flex flex-grow-1 min-width-zero">
                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                    <div class="min-width-zero">
                        <a href="#">
                            <p class="list-item-heading mb-1 truncate">Sarah Kortney</p>
                        </a>
                        <p class="mb-2 text-muted text-small">Executive Director</p>
                        <button type="button" class="btn btn-xs btn-danger ">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>