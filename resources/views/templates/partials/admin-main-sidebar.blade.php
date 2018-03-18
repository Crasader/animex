<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/avatar6.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Daniel Gonz&aacute;lez Brise&ntilde;o</p>
            </div>
        </div><!-- / Sidebar user panel -->

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar ...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVEGACI&Oacute;N PRINCIPAL</li>
            <li>
                <a href="/admin"><i class="fa fa-dashboard {{ (Request::segment(2) == '' ? 'text-aqua' : null) }}"></i>&nbsp;<span>Dashboard</span></a>
            </li>
            <li class="treeview {{ (Request::segment(2) != '' ? 'active menu-open' : null) }}">
                <a href="#">
                    <i class="fa fa-bars"></i> <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="{{ (Request::segment(2) == '' ? 'display: none;' : null) }}">
                    <li class="{{ (Request::segment(2) == 'categories' ? 'active' : null) }}">
                        <a href="{!! route('admin.categories.index') !!}">
                            <i class="fa fa-folder-o {{ (Request::segment(2) == 'categories' ? 'text-aqua' : null) }}"></i>&nbsp;<span>Categorias</span>
                        </a>
                    </li>
                    <li class="{{ (Request::segment(2) == 'posts' ? 'active' : null) }}">
                        <a href="{!! route('admin.posts.index') !!}">
                            <i class="fa fa-file-o {{ (Request::segment(2) == 'posts' ? 'text-aqua' : null) }}"></i>&nbsp;<span>Publicaciones</span>
                        </a>
                    </li>
                    <li class="{{ (Request::segment(2) == 'tags' ? 'active' : null) }}">
                        <a href="{!! route('admin.tags.index') !!}">
                            <i class="fa fa-tag {{ (Request::segment(2) == 'tags' ? 'text-aqua' : null) }}"></i>&nbsp;<span>Etiquetas</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section><!-- /.sidebar -->
</aside>