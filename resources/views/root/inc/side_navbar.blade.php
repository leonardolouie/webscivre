<!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span>Menu</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>
        <li class=" nav-item" id="dashboard"><a href="
          {{route('root.dashboard')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboards</span><span class="badge badge badge-primary badge-pill float-right mr-2">3</span></a>

        <li class=" nav-item"><a href="#"><i class="ft-folder"></i><span class="menu-title" data-i18n="">Record Managment</a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{URL::to('sectionlist/index')}}">Sections List</a>
            </li>
            <li><a class="menu-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/vertical-menu-template/layout-2-columns.html">Master List</a>
                </ul>
            </li>

             <li class=" nav-item"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">Account Managment</a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{URL::to('student/index')}}">Create New Student</a>
            </li>
            <li><a class="menu-item" href="{{URL::to('teacher/index')}}">Create New Teacher</a>
             <li><a class="menu-item" href="{{URL::to('section/index')}}">Create New Section</a>
                
                </ul>
            </li>


          <li class=" nav-item"><a href="#"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Account Settings</a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{URL::to('student/index')}}">Edit Account</a>
            </li>
        




      </ul>
    </div>
  </div>
