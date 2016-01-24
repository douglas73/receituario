
<ul class="sidebar-menu">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->

    @foreach($menus as $menu)

    @if(count($menu->filhos) > 0)
                <!-- Itens de menu com filhos -->
    <li class="treeview">
        <a href="{{ $menu->rota ? route($menu->rota) : '' }}"><span>{{ $menu->nome }}</span> <i class="fa {{ $menu->icone }} pull-right"></i></a>
        <ul class="treeview-menu">
            @foreach($menu->filhos as $filhos)
                <li><a href="{{ $filhos->rota ? route($filhos->rota) : '' }}"><i class="{{ $filhos->icone }}"></i>{{$filhos->nome}}</a></li>
            @endforeach
        </ul>
    </li>
    @else
            <!-- Item de menu sem filhos -->
    <li class="active"><a href="{{ $menu->rota ? route($menu->rota) : '' }}"><span>{{ $menu->nome }}</span><i class="fa {{ $menu->icone }} pull-right"></i></a></li>
    @endif

    @endforeach

</ul><!-- /.sidebar-menu -->
