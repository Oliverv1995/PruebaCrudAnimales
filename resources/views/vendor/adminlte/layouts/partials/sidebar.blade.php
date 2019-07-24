<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #320801;">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>En línea</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form" style="background-color: #320801;">
            <div class="input-group"  >
                <input type="text" name="q" class="form-control" placeholder="Buscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <br>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span> <i></i></a>
                <li class="treeview">
                <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Tipo Animal</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/tipovista') }}">Ingresar tipo animal</a></li>
                    <li><a href="{{ url('tipoanimal/lista') }}">Mostrar tipo</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Animal</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/animalvista') }}">Ingresar animal</a></li>
                    <li><a href="{{ url('animal/lista') }}">Mostrar animales</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
