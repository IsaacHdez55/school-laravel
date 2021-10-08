@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

{{-- @dd($route); --}}

<div class="sidebar" id="sidebar">
    
    <div class="sidebar-inner slimscroll">
    
      <div id="sidebar-menu" class="sidebar-menu">
      
        <ul>
      
          <li class="{{ ($route == 'dashboard')?'active':'' }}"> 
            <a href="{{ route('dashboard') }}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
          </li>

          <li class="submenu {{ ($prefix == '/users')?'active':'' }} " >
            <a class=""><i class="la la-users"></i> <span> Gestión de Usuarios</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'user.view')?'active':'' }}" href="{{ route('user.view') }}"> Ver usuarios</a></li>
              <li><a class="{{ ($route == 'users.add')?'active':'' }}" href="{{ route('users.add') }}"> Agregar usuario</a></li>
            </ul>
          </li>

          <li class="submenu {{ ($prefix == '/profiles')?'active':'' }}" >
            <a href=""><i class="la la-user"></i> <span> Gestión de perfil</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'profile.view')?'active':'' }}" href="{{ route('profile.view') }}"> Mi Perfil</a></li>
              <li><a class="{{ ($route == 'password.view')?'active':'' }}" href="{{ route('password.view') }}"> Cambiar Contraseña</a></li>
            </ul>
          </li>

          <li class="submenu {{ ($prefix == '/setups')?'active':'' }} " >
            <a class=""><i class="la la-building"></i> <span> Académico</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'student.class.view')?'active':'' }}" href="{{ route('student.class.view') }}"> Clases </a></li>
              <li><a class="{{ ($route == 'student.year.view')?'active':'' }}" href="{{ route('student.year.view') }}"> Año Académico </a></li>
              <li><a class="{{ ($route == 'student.group.view')?'active':'' }}" href="{{ route('student.group.view') }}"> Grupo </a></li>
              <li><a class="{{ ($route == 'student.shift.view')?'active':'' }}" href="{{ route('student.shift.view') }}"> Turno </a></li>
              <li><a class="{{ ($route == 'fee.category.view')?'active':'' }}" href="{{ route('fee.category.view') }}"> Tarifas </a></li>
              <li><a class="{{ ($route == 'fee.amount.view')?'active':'' }}" href="{{ route('fee.amount.view') }}"> Importe de Tarifa </a></li>
              <li><a class="{{ ($route == 'exam.type.view')?'active':'' }}" href="{{ route('exam.type.view') }}"> Examenes </a></li>
            </ul>
          </li>

      </ul>

    </div>

  </div>

</div>
<!-- /Sidebar -->