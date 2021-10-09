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
            <a class=""><i class="la la-users"></i> <span> Manage User</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'user.view')?'active':'' }}" href="{{ route('user.view') }}"> View User</a></li>
              <li><a class="{{ ($route == 'users.add')?'active':'' }}" href="{{ route('users.add') }}"> Add User</a></li>
            </ul>
          </li>

          <li class="submenu {{ ($prefix == '/profiles')?'active':'' }}" >
            <a href=""><i class="la la-user"></i> <span> Manage Profile</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'profile.view')?'active':'' }}" href="{{ route('profile.view') }}"> Your Profile</a></li>
              <li><a class="{{ ($route == 'password.view')?'active':'' }}" href="{{ route('password.view') }}"> Change Password</a></li>
            </ul>
          </li>

          <li class="submenu {{ ($prefix == '/setups')?'active':'' }} " >
            <a class=""><i class="la la-building"></i> <span> Setup Management</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
              <li><a class="{{ ($route == 'student.class.view')?'active':'' }}" href="{{ route('student.class.view') }}"> Student Class </a></li>
              <li><a class="{{ ($route == 'student.year.view')?'active':'' }}" href="{{ route('student.year.view') }}"> Student Year </a></li>
              <li><a class="{{ ($route == 'student.group.view')?'active':'' }}" href="{{ route('student.group.view') }}"> Student Group </a></li>
              <li><a class="{{ ($route == 'student.shift.view')?'active':'' }}" href="{{ route('student.shift.view') }}"> Student Shift </a></li>
              <li><a class="{{ ($route == 'fee.category.view')?'active':'' }}" href="{{ route('fee.category.view') }}"> Fee Category </a></li>
              <li><a class="{{ ($route == 'fee.amount.view')?'active':'' }}" href="{{ route('fee.amount.view') }}"> Fee Category Amount </a></li>
              <li><a class="{{ ($route == 'exam.type.view')?'active':'' }}" href="{{ route('exam.type.view') }}"> Exam Type </a></li>
              <li><a class="{{ ($route == 'school.subject.view')?'active':'' }}" href="{{ route('school.subject.view') }}"> School Subject </a></li>
              <li><a class="{{ ($route == 'assign.subject.view')?'active':'' }}" href="{{ route('assign.subject.view') }}"> Assign Subject </a></li>
              <li><a class="{{ ($route == 'designation.view')?'active':'' }}" href="{{ route('designation.view') }}"> Designation </a></li>

            </ul>
          </li>

      </ul>

    </div>

  </div>

</div>
<!-- /Sidebar -->