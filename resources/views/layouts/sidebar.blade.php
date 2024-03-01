<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link d-flex justify-content-center align-items-center bg-primary" style="height: 84px;">
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
    
</aside>