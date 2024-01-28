       <!-- sidebar-->
       <section class="sidebar">

           <div class="user-profile">
               <div class="ulogo">
                   <a href="{{url('dashboard')}}">
                       <!-- logo for regular state and mobile devices -->
                       <div class="d-flex align-items-center justify-content-center">
                           <img src="../images/logo-dark.png" alt="">
                           <h3>Admin-Dashboard</h3>
                       </div>
                   </a>
               </div>
           </div>

           <!-- sidebar menu-->
           <ul class="sidebar-menu" data-widget="tree">

               <li>
                   <a href="{{url('dashboard')}}">
                       <i data-feather="pie-chart"></i>
                       <span>Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="{{url('admin/approval')}}">
                       <i data-feather="mail"></i>
                       <span>Approval Requests</span>
                   </a>
               </li>

               <!-- <li class="treeview">
                   <a href="#">
                       <i data-feather="mail"></i> <span>Approval Requests</span>
                       <span class="pull-right-container">
                           <i class="fa fa-angle-right pull-right"></i>
                       </span>
                   </a>
                   <ul class="treeview-menu">
                       <li><a href="{{url('admin/approval')}}"><i class="ti-more"></i>Manage Requests</a></li>
                   </ul>
               </li> -->



               <li>
                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                       <i data-feather="lock"></i> {{ __('Logout') }}
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
               </li>

           </ul>
       </section>