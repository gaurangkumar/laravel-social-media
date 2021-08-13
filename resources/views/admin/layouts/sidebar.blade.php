    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper">
          <a class="brand-logo darken-1" href="{{ route('admin.home') }}">
            <img class="hide-on-med-and-down" src="{{asset('assets\images/brand.svg') }}"  alt="materialize logo"/>
            <img class="show-on-medium-and-down hide-on-med-and-up" src="{{asset('assets\images/brand.svg') }}" alt="materialize logo"/>
            <span class="logo-text hide-on-med-and-down">Agwis Admin</span>
          </a>
          <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        
<!--         <li class="navigation-header"><a class="navigation-header-text" href="{{ route('admin.home') }}">Home</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
 -->
        <li class=" bold"><a class="waves-effect waves-cyan {{ $currentRoute == 'admin.home' ? 'active' : ''}}" href="{{ route('admin.home') }}"><i class="fas fa-home"></i><span class="menu-title" data-i18n="Home">Home</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if($currentRoute == 'admin.user.index' || $currentRoute == 'admin.user.show' || $currentRoute == 'admin.user.edit'){{ 'active' }} @endif " href="{{ route('admin.user.index') }}"><i class="far fa-user"></i><span class="menu-title" data-i18n="Home">Users</span></a>
        </li>
         <li class="bold"><a class="waves-effect waves-cyan @if( $currentRoute == 'admin.group.index' || $currentRoute == 'admin.group.show' || $currentRoute == 'admin.group.edit' ) {{'active'}} @endif" href="{{ route('admin.group.index') }}"><i class="fas fa-users"></i><span class="menu-title" data-i18n="Home">Group</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if( $currentRoute == 'admin.page.index' || $currentRoute == 'admin.page.show' || $currentRoute == 'admin.page.edit') {{ 'active'}} @endif" href="{{ route('admin.page.index') }}"><i class="fas fa-file-alt"></i><span class="menu-title" data-i18n="Home">Page</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan @if( $currentRoute == 'admin.business' || $currentRoute == 'admin.business.show' || $currentRoute == 'admin.business.edit'){{ 'active' }} @endif" href="{{ route('admin.business') }}"><i class="far fa-building"></i><span class="menu-title" data-i18n="Home">Business</span></a>
        </li>

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
