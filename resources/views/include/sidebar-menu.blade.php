<ul class="sidebar-menu" data-widget="tree">
    @php
    $menus = \App\Menu::orderBy('sorting', 'ASC')->get();
    //$url = Request::segment(1);
    //echo $url;
    @endphp
    @foreach($menus as $menu_first)
        @if($menu_first->parent_id == 0)
        <li class="header">{{ $menu_first->name }}</li>
            @foreach($menus as $menu_second)
                @if($menu_second->parent_id == $menu_first->id)
                    @if($menu_second->url == '')
                        <li class="treeview">
                            <a href="#"><i class="fa {{ $menu_second->icon }}"></i> <span>{{ $menu_second->name }}</span>
                                <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                            </a>
                            <ul class="treeview-menu">
                                @foreach($menus as $menu_third)
                                    @if($menu_third->parent_id == $menu_second->id)
                                        @can($menu_third->url)
                                    <li><a href="{{ url(isset($menu_third->url)?$menu_third->url:'/') }}" title="menu"><i class="fa {{ $menu_third->icon }}"></i>{{ $menu_third->name }}</a></li>
                                        @endcan
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @can($menu_second->url)
                        <li><a href="{{ url($menu_second->url) }}" title="menu"><i class="fa {{ $menu_second->icon }}"></i> <span>{{ $menu_second->name }}</span></a></li>
                        @endcan
                    @endif
                @endif
            @endforeach
        @endif
    @endforeach
</ul>