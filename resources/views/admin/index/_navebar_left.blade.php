        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="{{ Auth::user()->get_user_icon() }}" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">{{ Auth::user()->name }}</strong></span>
                                <span class="text-muted text-xs block">{{ Auth::user()->name }}<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ route('logout') }}">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ route('admin.carousel') }}"><i class="fa fa-home"></i> <span class="nav-label">轮播管理</span></a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{ route('goods_cats.index') }}"><i class="fa fa-columns"></i> <span class="nav-label">商品分类管理</span></a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="{{ route('goods.index') }}"><i class="fa fa-columns"></i> <span class="nav-label">商品分类管理</span></a>
                    </li>

                </ul>
            </div>
        </nav>
