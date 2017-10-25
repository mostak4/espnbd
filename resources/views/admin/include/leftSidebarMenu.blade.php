<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="active treeview">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>

            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>User Module</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-user')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
                    <li><a href="{{url('/manage-user')}}"><i class="fa fa-circle-o"></i> Manage User</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Category Module</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-category')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="{{url('/manage-category')}}"><i class="fa fa-circle-o"></i> Manage Category</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Product Module</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-product')}}"><i class="fa fa-circle-o"></i>Add Product</a></li>
                    <li><a href="{{url('/manage-product')}}"><i class="fa fa-circle-o"></i> Manage Product</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Slider Image</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/slider/image/add')}}"><i class="fa fa-circle-o"></i>Add Slider Image</a></li>
                    <li><a href="{{url('/manage/slider/image')}}"><i class="fa fa-circle-o"></i> Manage Slider Image </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Our Features</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-features')}}"><i class="fa fa-circle-o"></i>Add Features</a></li>
                    <li><a href="{{url('/manage-features')}}"><i class="fa fa-circle-o"></i>Manage Features</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Notice</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-notice')}}"><i class="fa fa-circle-o"></i>Add Notice</a></li>
                    <li><a href="{{url('/manage-notice')}}"><i class="fa fa-circle-o"></i>Manage Notice</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>