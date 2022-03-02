<li class="nav-item has-treeview @if(Route::is('*.services.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.services.index') }}" class="nav-link @if(Route::is('*.services.*')) active @endif">
        <i class="nav-icon fas fa-tools"></i>
        <p>
            {!! $page_title !!}
        </p>
    </a>
</li>
