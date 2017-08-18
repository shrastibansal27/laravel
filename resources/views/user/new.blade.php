@extends('user.header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
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
        <li class="treeview"><a href="#">System Management</a></li>
        <li class="treeview"><a href="{{url('user')}}">User Management</a></li>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
   <section class="content-header">
      <h1>User Management</h1>
@if (isset($errors) && $errors->any())
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-alt">
                <strong><i class="fa fa-bug fa-fw"></i>Warning</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <br/>
@endif
<form role="form" action="{{url('/adduser')}}" method="POST">
{{csrf_field()}}
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
    </div>
  </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="inputUsername" placeholder="Email">
    </div>
    <div class="row">
    	<div class="col-xs-12">
    		@if($errors->has('email'))
    		<div class="alert alert-danger alert-alt">
            </div>
            @endif
    	</div>
    </div>
  </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" name="fname" class="form-control" id="inputUsername" placeholder="firstname">
    </div>
  </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" name="lname" class="form-control" id="inputUsername" placeholder="lastname">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
    </div>
  </div>
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsername" placeholder="confirm password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
    </section>
    <!-- /.content -->
  </div>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  </body>