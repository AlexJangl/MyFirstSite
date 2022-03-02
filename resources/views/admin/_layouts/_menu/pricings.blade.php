<li class="nav-item has-treeview @if(Route::is('*.pricings.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.pricings.index') }}" class="nav-link @if(Route::is('*.pricings.*')) active @endif">
{{--        <i class="nav-icon fa-thin fa-circle-dollar"></i>--}}
        <i class="nav-icon far fa-money-bill-alt"></i>
        <p>
            {!! $page_title !!}
        </p>
    </a>
</li>
