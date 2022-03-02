<li class="nav-item has-treeview @if(Route::is('*.translations.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.translations.index') }}" class="nav-link @if(Route::is('*.translations.*')) active @endif">
        <i class="nav-icon fas fa-globe"></i>
        <p>
            {!! trans('trans.translations') !!}
        </p>
    </a>
</li>
