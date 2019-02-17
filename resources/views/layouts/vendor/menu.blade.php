<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
            <i class="nav-main-link-icon si si-cursor"></i>
            <span class="nav-main-link-name">Dashboard</span>
        </a>
</li>
<li class="nav-main-heading">Various</li>
<li class="nav-main-item{{ request()->is('examples/*') ? ' open' : '' }}">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
            <i class="nav-main-link-icon si si-bulb"></i>
            <span class="nav-main-link-name">Examples</span>
        </a>
    <ul class="nav-main-submenu">
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('examples/plugin') ? ' active' : '' }}" href="/examples/plugin">
                    <span class="nav-main-link-name">Plugin</span>
                </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link{{ request()->is('examples/blank') ? ' active' : '' }}" href="/examples/blank">
                    <span class="nav-main-link-name">Blank</span>
                </a>
        </li>
    </ul>
</li>
<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is('dashboard/users') ? ' active' : '' }}" href="/dashboard/users">
        <i class="nav-main-link-icon si si-cursor"></i>
        <span class="nav-main-link-name">Usuarios</span>
    </a>
</li>
<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is('dashboard/empresas') ? ' active' : '' }}" href="/dashboard/empresas">
        <i class="nav-main-link-icon si si-cursor"></i>
        <span class="nav-main-link-name">Empresas</span>
    </a>
</li>
<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is('dashboard/responsables') ? ' active' : '' }}" href="/dashboard/responsable">
            <i class="nav-main-link-icon si si-cursor"></i>
            <span class="nav-main-link-name">Responsables</span>
        </a>
</li>
<li class="nav-main-item">
    <a class="nav-main-link{{ request()->is('plantillas') ? ' active' : '' }}" href="/dashboard/plantillas">
            <i class="nav-main-link-icon si si-cursor"></i>
            <span class="nav-main-link-name">Plantillas</span>
        </a>
</li>
<li class="nav-main-heading">More</li>
<li class="nav-main-item open">
    <a class="nav-main-link" href="/">
            <i class="nav-main-link-icon si si-globe"></i>
            <span class="nav-main-link-name">Landing</span>
        </a>
</li>
