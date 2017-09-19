@section('aside')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::to('UserImage/'.Auth::user()->image)}}" class="user-image" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{route('dash')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                </a>

            </li>
            <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-link"></i><span>User</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('add')}}"><i class="fa fa-circle-o"></i> Add user</a></li>
                    <li><a href="{{route('users')}}"><i class="fa fa-circle-o"></i> Show user</a></li>
                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-link"></i><span>News</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addnews')}}"><i class="fa fa-circle-o"></i> Add news</a></li>
                    <li><a href="{{route('new')}}"><i class="fa fa-circle-o"></i> Show news</a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>
    @stop