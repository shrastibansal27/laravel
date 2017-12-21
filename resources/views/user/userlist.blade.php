@extends('header')
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


  <div class="content-wrapper">
{{config('app.key')}}
    <section class="content-header">
      <h1>User Management</h1>
      <a href="{{url('newuser')}}"><button type="button" class="user btn btn-primary">Add User</button></a>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Sub-Category</button>
       <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{url('add_subcat')}}">
        {{csrf_field()}}
          <div class="form-group">
            <label for="sub_category" class="col-md-4 control-label">Sub-Category Name</label>
            <div class="col-md-6">
              <input type="text"  class="form-control" name="sub_category" id="sub_category">
            </div>
          </div>
          <div class="form-group">
            <label for="sub_category_info" class="col-md-4 control-label">Sub-Category Info</label>
            <div class="col-md-6">
               <input type="text" class="form-control" name="sub_category_info" id="sub_category_info">
          </div>
          </div> 
           <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
          <input type="submit" name="save" value="save">
          </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </section>
    <br>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>Username</th>
      <th>Email</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Action</th>    
    </tr>
  </thead>
  <tbody>
     @foreach($users as $u)
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->username}}</td>
      <td>{{$u->email}}</td>
      <td>{{$u->fname}}</td>
      <td>{{$u->lname}}</td>
      <td><a href="{{url('edituser',$u->id)}}"><button class="btn btn-warning" >Edit</button></a>
      <a href="{{route('deleteuser', $u->id)}}"><button class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    @endforeach 

  </tbody>

</table>
{!! str_replace('/?', '?', $users->render()) !!}

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

