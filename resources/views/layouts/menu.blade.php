<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Satistiques</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('employees.index') }}" class="nav-link ">
        <i class="nav-icon fas fa-users"></i>
        <p>Emlpoyees</p>
    </a>
</li>

