<li class="nav-item has-treeview @if(Route::is('*.users.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.users.index') }}" class="nav-link @if(Route::is('*.users.*')) active @endif">
        <i class="nav-icon fas fa-users"></i>
        <p>
            {!! trans('trans.users') !!}
        </p>
    </a>
</li>
