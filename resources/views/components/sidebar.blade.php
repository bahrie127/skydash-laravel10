<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link"  href="{{ url('dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
      </li>
      <li class="nav-item  {{ $type_menu === 'ui-element' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('ui-element-buttons') ? 'active' : '' }}" > <a class="nav-link" href="{{ url('ui-element-buttons') }}">Buttons</a></li>
            <li class="nav-item {{ Request::is('ui-element-dropdowns') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('ui-element-dropdowns') }}">Dropdowns</a></li>
            <li class="nav-item {{ Request::is('ui-element-typograpy') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('ui-element-typograpy') }}">Typography</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'form-element' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Form elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('form-element-basic') ? 'active' : '' }}"><a class="nav-link" href="{{ url('form-element-basic') }}">Basic Elements</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'chart' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Charts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item" {{ Request::is('charts-js') ? 'active' : '' }}> <a class="nav-link" href="{{ url('charts-js') }}">ChartJs</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'table' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item" {{ Request::is('table-basic') ? 'active' : '' }}> <a class="nav-link" href="{{ url('table-basic') }}">Basic table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'icon' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('icons-mdi') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('icons-mdi') }}">Mdi icons</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'user' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('login') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('login') }}"> Login </a></li>
            <li class="nav-item {{ Request::is('register') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('register') }}"> Register </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'error' ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
          <i class="icon-ban menu-icon"></i>
          <span class="menu-title">Error pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ Request::is('error-404') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('error-404') }}"> 404 </a></li>
            <li class="nav-item {{ Request::is('error-500') ? 'active' : '' }}"> <a class="nav-link" href="{{ url('error-500') }}"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $type_menu === 'doc' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('documentation') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>
