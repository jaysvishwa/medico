<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/admin/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->firstname}},{{ Auth::user()->lastname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        

        <!--Dashboard-->
        <li class="{{current_page('dashboard') ? 'active' : '' }}">
          <a href="{{url('/admin/dashboard')}}">
            <i class="fa fa-tachometer"></i> <span>Dashboard</span>
          </a>
        </li><!--Dashboard-->

        <!--Appointment-->
        <li class="{{current_page('appointment') ? 'active' : '' }} treeview">          
          <a href="{{url('/admin/appointment/all')}}">
            <i class="fa fa-envelope"></i> <span>Appointment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{current_page('appointment/create') ? 'active' : '' }}"><a href="{{url('/admin/appointment/create')}}"><i class="fa fa-circle-o"></i> New Appointment</a></li>
            <li class="{{current_page('appointment/today') ? 'active' : '' }}"><a href="{{url('/admin/appointment/today')}}"><i class="fa fa-circle-o"></i> Today's Appointment</a></li>
            <li class="{{current_page('appointment/all') ? 'active' : '' }}"><a href="{{url('/admin/appointment/all')}}"><i class="fa fa-circle-o"></i> All Appointments</a></li>            
          </ul>
        </li><!--Appointment-->

        <!--Patient-->
        <li class="{{current_page('patient') ? 'active' : '' }} treeview">

          <a href="{{url('/admin/billing')}}">
            <i class="fa fa-users"></i>
            <span>Patients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> All Patients</a></li>
            <li><a href="{{url('admin/patient/new')}}"><i class="fa fa-circle-o"></i> New Patients</a></li>
          </ul>
        </li><!--Patient-->

        <!--Billing-->
        <li class="{{current_page('billing') ? 'active' : '' }}">
          <a href="{{url('/admin/billing')}}">
            <i class="fa fa-book"></i> <span>Billing</span>
          </a>
        </li><!--Billing-->
               
        <!--Options-->
        <li class="{{current_page('option') ? 'active' : '' }} treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/admin/symptom')}}"><i class="fa fa-circle-o"></i> Symptoms</a></li>
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Visit Type</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Billing Charge</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Reffered</a></li>
          </ul>
        </li><!--Options-->

        <!--Vue test-->
        <!--li class="{{current_page('veu') ? 'active' : '' }}">
          <router-link to="example">
          <a href="">
            <i class="fa fa-book"></i> <span> Vue Load</span>
          </a>
          </router-link>
        </li--><!--vue test-->


         <!--Appointment-->
        <li class="{{current_page('appointmentvue') ? 'active' : '' }} treeview">          
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Vue Example</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{current_page('vueappointment') ? 'active' : '' }}"><a href="{{url('/admin/vueappointment')}}"><i class="fa fa-circle-o"></i> Appointment</a></li>
                       
          </ul>
        </li><!--Appointment-->

        
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>