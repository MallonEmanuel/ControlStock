<!-- Navigation -->
  <div class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- <a class="navbar-brand page-scroll glyphicon glyphicon-menu-hamburger" href="#page-top"></a> --}}
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li class="{{ (Request::is('/') ? 'active' : '') }}">
                        <a href="{{ url('') }}"><i class="fa fa-home"></i> ControlStock</a>
                    </li>
                    <li class="{{ (Request::is('articulos') ? 'active' : '') }}">
                        <a href="{{ url('articulos') }}">Articulos</a>
                    </li>
                    <li class="{{ (Request::is('ventas') ? 'active' : '') }}">
                        <a href="{{ url('ventas') }}">Ventas</a>
                    </li>
                    <li class="{{ (Request::is('proveedores') ? 'active' : '') }}">
                        <a href="{{ url('proveedores') }}">Proveedores</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a ng-click="" href="#/register"><span class="glyphicon glyphicon-user" ></span> Registar</a></li>
                    <li><a ng-click="" href="#/login"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
  </div>
