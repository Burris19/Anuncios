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
                            @foreach(config('menu') as $key => $value )
                                <li>
                                    <a href="{{ $key }}" class="index">
                                        {{ $value }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-copy" aria-hidden="true"></i>
                            <span>Perfiles</span>
                        </a>
                        <ul class="nav nav-children">
                            @foreach(config('menuProfiles') as $key => $value )
                                <li>
                                    <a href="{{ $key }}" class="index">
                                        {{ $value }}
                                    </a>
                                </li>
                            @endforeach

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