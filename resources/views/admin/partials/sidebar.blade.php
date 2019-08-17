<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Admin::user()->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Admin::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin.online') }}</a>
            </div>
        </div>

    @if(config('admin.enable_menu_search'))
        <!-- search form (Optional) -->
            <form class="sidebar-form" style="overflow: initial;border: 0px" onsubmit="return false;">
                <div class="input-group">
                    <input type="text" autocomplete="off" class="form-control autocomplete" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
                    <ul class="dropdown-menu" role="menu" style="min-width: 210px;max-height: 300px;overflow: auto;">
                        @foreach(Admin::menuLinks() as $link)
                            <li>
                                <a href="{{ admin_base_path($link['uri']) }}"><i
                                        class="fa {{ $link['icon'] }}"></i>{{ admin_trans($link['title']) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>


            </form>
            <!-- /.search form -->
    @endif

    <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('admin.menu') }}</li>

            @each('admin::partials.menu', Admin::menu(), 'item')
            <li class="header">快捷</li>
            <li><a href="/admin/user"><i class="fa fa-circle-o text-red"></i> <span>用户列表</span></a></li>
            <li><a href="/admin/question"><i class="fa fa-circle-o text-yellow"></i> <span>反馈处理</span></a></li>
            <li><a href="/admin/user_plan"><i class="fa fa-circle-o text-aqua"></i> <span>计划列表</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
