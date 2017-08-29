@extends('header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <span class="logo-mini"><b>A</b>LT</span>
    <span class="logo-lg"><b>Employee</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{asset('bower_components/adminlte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
      <span class="hidden-xs">Alexander Pierce</span>
      </a>
      <ul class="dropdown-menu">
      <!-- User image -->
      <li class="user-header">
      <img src="{{asset('bower_components/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

      <p>
      Alexander Pierce - Web Developer
      <small>Member since Nov. 2012</small>
      </p>
      </li>
      <!-- Menu Footer-->
      <li class="user-footer">
      <div class="pull-left">
      <a href="#" class="btn btn-default btn-flat">Profile</a>
      </div>
      <div class="pull-right">
      <a href="{{ route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
      </div>
      </li>
      </ul>
      </li>
      </ul>
    </div>
  </nav>
</header>
  <!-- jQuery 2.2.3 -->
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('bower_components/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
          <div class="pull-left">
        <ul>
          <li>Dashboard</li>
        </ul>
      </div>
      </div>
    

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview"><a href="#">Employee Management</a></li>
         <li class="treeview">

          <a href="#">
            <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
           
           <li class="active"><a href="{{url('department')}}">Department</a></li>
           <li><a href="{{url('division')}}">Division</a></li>
           <li><a href="{{url('country')}}">Country</a></li>
           <li><a href="{{url('state')}}">State</a></li>
           <li><a href="{{url('city')}}">City</a></li>
           <li><a href="{{url('report')}}">Report</a></li>

         </ul>



         </li>
        <li class="treeview"><a href="{{url('user')}}">User Management</a></li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Department Mangement</h1>
      <br>
      <a href="{{url('newdepart')}}"><button type="button" class="user btn btn-primary">Add new department</button></a>
    </section>
    <br>
 <form action= "" class="navbar-form navbar-left" role="search" method="GET"></form>
  <label class="col-sm-2 col-form-label">Search</label>
<div class="col-sm-10 input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search">
        </button>
    </span>
</div>
</form>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th>Department Name</th>
      <th>Action</th>    
    </tr>
  </thead>
<tbody>
  @foreach($depart as $d)
  <tr>
    <td>{{$d->id}}</td>
    <td>{{$d->dept_name}}</td>
  </tr>
  @endforeach

</tbody>
</table>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</body>
<!-- ./wrapper -->

