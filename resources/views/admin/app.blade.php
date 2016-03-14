@extends('admin.base.layout')
@section('content')
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="assets/images/logo.png" height="35" alt="Escorts in Mallorca - Website Administrator" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <form action="pages-search-results.html" class="search nav-form">
                    <div class="input-group input-search">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Buscar...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                    </div>
                </form>

                <span class="separator"></span>


                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="assets/images/!logged-user.jpg" alt="Administrador" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="Administrador" data-lock-email="info@escortsinmallorca.com">
                            <span class="name">Escorts in Mallorca</span>
                            <span class="role">administrador</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="/admin/logout"><i class="fa fa-power-off"></i> Cerrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Menú
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Inicio</span>
                                    </a>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        <span>Configuración</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="config-principal.html">
                                                Principal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="banners-slider.html">
                                                Banners y Slider
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Perfiles</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="galeria.html#*">
                                                Ver todos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="galeria.html#escorts">
                                                Escorts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="galeria.html#trans">
                                                Trans
                                            </a>
                                        </li>
                                        <li>
                                            <a href="galeria.html#boys">
                                                Boys
                                            </a>
                                        </li>
                                        <li>
                                            <a href="galeria.html#agencias">
                                                Agencias
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://www.escortsinmallorca.com" target="_blank">
                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                        <span>Front-End <em class="not-included">(visualizar web)</em></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <hr class="separator" />

                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Administración</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Inicio</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="#"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <div class="container">
                    <h1>Hola este es el contenido</h1>
                </div>

            </section>
        </div>
    </section>
@endsection