@php
$configData = Helper::applClasses();
@endphp
<div
  class="main-menu menu-fixed {{($configData['theme'] === 'light') ? "menu-light" : "menu-dark"}} menu-accordion menu-shadow"
  data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto">
        <a class="navbar-brand colapehide" href="dashboard-analytics">
          <div class="brand-logo">
            {{-- <img src="{{asset('images/logo/logo.svg') }}" class="img-fluid"/> --}}
            <p class="logoname">Mystery<span>-Shopper</span></p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
          <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon"
            data-ticon="icon-disc">
          </i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <li class="nav-item">
        <a href="dashboard-analytics">
          <i class="feather icon-home"></i>
          <span class="menu-title" data-i18n="nav.app_email">Dashboard</span>
        </a>
      </li>

      <li class="nav-item has-sub">
        <a href="">
          <i class="feather icon-user"></i>
          <span class="menu-title" data-i18n="">Manage Admin</span>
        </a>
        <ul class="menu-content">
          <li class=""> 
            <a href="admin-user">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Admin User</span>
            </a>
          </li>
          <li class="">
            <a href="access-manager">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Access Manager</span>
            </a>
          </li>
        </ul>              
      </li>

      <li class="nav-item has-sub">
        <a href="">
          <i class="feather icon-hard-drive"></i>
          <span class="menu-title" data-i18n="">Data Collection</span>
        </a>
        <ul class="menu-content">
          <li class=""> 
            <a href="category">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Category</span>
            </a>
          </li>
          <li class="">
            <a href="subcategory">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Subcategory</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Templates</span>
            </a>
          </li>
        </ul>              
      </li>

      <li class="nav-item has-sub">
        <a href="">
          <i class="feather icon-users"></i>
          <span class="menu-title" data-i18n="">User Management</span>
        </a>
        <ul class="menu-content">
          <li class=""> 
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">user</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">manage</span>
            </a>
          </li>
        </ul>              
      </li>


      <li class="nav-item has-sub">
        <a href="">
          <i class="feather icon-star"></i>
          <span class="menu-title" data-i18n="">Campaigns Mgmt</span>
        </a>
        <ul class="menu-content">
          <li class=""> 
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Custom Properties</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Location</span>
            </a>
          </li>
          <li class="">
            <a href="campaign">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Campaign</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Workforce Assignment</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Quality Check</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Publish Report</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Ineffective Report</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Custom Property User Mapping</span>
            </a>
          </li>
        </ul>              
      </li>

      <li class="nav-item has-sub">
        <a href="">
          <i class="feather icon-dollar-sign"></i>
          <span class="menu-title" data-i18n="">Payments</span>
        </a>
        <ul class="menu-content">
          <li class=""> 
            <a href="paymentapproval">
              <i class="feather icon-circle"></i>
              <span class="menu-title" data-i18n="">Payments Approval</span>
            </a>
          </li>
        </ul>              
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-clipboard"></i>
          <span class="menu-title" data-i18n="nav.app_email">Survery</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-image"></i>
          <span class="menu-title" data-i18n="nav.app_email">Gallery</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-bar-chart-2"></i>
          <span class="menu-title" data-i18n="nav.app_email">Qlik Sense</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-aperture"></i>
          <span class="menu-title" data-i18n="nav.app_email">Escalation</span>
        </a>
      </li>



      <li class="nav-item">
        <a href="">
          <i class="feather icon-check-circle"></i>
          <span class="menu-title" data-i18n="nav.app_email">QC Approval Records</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-sliders"></i>
          <span class="menu-title" data-i18n="nav.app_email">Project Configuration</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-mic"></i>
          <span class="menu-title" data-i18n="nav.app_email">Communications</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="">
          <i class="feather icon-file"></i>
          <span class="menu-title" data-i18n="nav.app_email">Reports</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- END: Main Menu-->