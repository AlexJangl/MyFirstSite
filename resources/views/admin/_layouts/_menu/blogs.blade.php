<li class="nav-item has-treeview @if(Route::is('*.blogs.*')) menu-open @else menu-hide @endif">
    <a href="{{ route('admin.blogs.index') }}" class="nav-link @if(Route::is('*.blogs.*')) active @endif">
        <i class="nav-icon fas fa-blog"></i>
        <p>
            {!! $page_title !!}
        </p>
    </a>
</li>
