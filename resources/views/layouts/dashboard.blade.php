@extends('layouts.plane')
{{--@extends('plantillaGeneral')--}}

@section('body')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">

                <img src="http://www.ucn.cl/wp-content/uploads/2018/05/Escudo-UCN-Full-Color.png" width="" height="80" alt="">
                <a class="navbar-brand" href="{{ route('home') }}">Vinculación DISC UCN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                </a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>

                                    <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'))
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>

                                    <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'))
                                        <span class="sr-only">20% Complete</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>

                                    <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'))
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>

                                    <div>
                                        @include('widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'))
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        {{--<li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>

                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboardd</a>
                        </li>
                        {{--<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>--}}
                            {{--<a href="{{ url ('charts') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>--}}
                            {{--<!-- /.nav-second-level -->--}}
                        {{--</li>--}}
                        {{--<li {{ (Request::is('*tables') ? 'class="active"' : '') }}>--}}
                            {{--<a href="{{ url ('tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a>--}}
                        {{--</li>--}}
                        {{--<li {{ (Request::is('*forms') ? 'class="active"' : '') }}>--}}
                            {{--<a href="{{ url ('forms') }}"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
                        {{--</li>--}}
                        <li >
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Actividades<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*actividadExtension') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('actividadExtension') }}">Actividades de Extension</a>
                                </li>
                                <li {{ (Request::is('*actividadTitulacion') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('actividadTitulacion' ) }}">Actividades de Titulacion</a>
                                </li>
                                <li {{ (Request::is('*actividadAprendizajeServicio') ? 'class="active"' : '') }}>
                                    <a href="{{ url('actividadAprendizajeServicio') }}">Actividades Aprendizaje - Servicio</a>
                                </li>
                                {{--<li {{ (Request::is('*typography') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('typography') }}">Typography</a>--}}
                                {{--</li>--}}
                                {{--<li {{ (Request::is('*icons') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('icons') }}"> Icons</a>--}}
                                {{--</li>--}}
                                {{--<li {{ (Request::is('*grid') ? 'class="active"' : '') }}>--}}
                                    {{--<a href="{{ url ('grid') }}">Grid</a>--}}
                                {{--</li>--}}
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Convenios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*convenio') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('convenio') }}">Convenios</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>

                            <a href="#"><i class="fa fa-building fa-fw"></i> Organizaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*organizacion') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('organizacion') }}">Organizaciones</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>

                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Titulados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*titulado') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('titulado') }}">Titulados</a>
                                </li>
                            </ul>


                        </li>

                        <li>

                            <a href="#"><i class="fa fa-paperclip fa-fw"></i> Evidencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('documentation') }}">Evidencias</a>
                                </li>

                            </ul>


                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop
