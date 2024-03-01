<!-- usuários -->
<li class="nav-item has-treeview {{ Request::is('admin/permissions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
        <i class="fa fa-user mr-2 ml-2" aria-hidden="true"></i>
        <p>
            Permissões
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview " style="{{ Request::is('admin/permissions*') ? 'display: block;' : '' }}">
        <li class="nav-item">
            <a href="{{ url('/admin/permissions') }}" class="nav-link {{ Request::is('admin/permissions') ? 'active text-primary' : '' }}">
                <i class="{{ Request::is('admin/permissions') ? 'fa ' : 'far' }} fa-circle  nav-icon"></i>
                <p>Lista de Permissões</p>
            </a>
        </li>
    </ul>
</li>