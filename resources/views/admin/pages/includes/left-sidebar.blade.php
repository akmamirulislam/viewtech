
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'img-circle')) }}
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }} </p>
          <p><i class="fa fa-circle text-success"></i> Online</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <!-- Dahsboard -->
        <li><a href="/dashboard"><i class="fa fa-th"></i> <span>Dashboard</span></a></li>
        <li><a href="/contacts"><i class="fa fa-files-o"></i> <span>Contacts</span></a></li>
        <li><a href="/career"><i class="fa fa-files-o"></i> <span>Career</span></a></li>

        <li class="treeview">
          <a href="#"><i class="fa fa-files-o"></i><span>Blog</span></a>
          <ul class="treeview-menu">
            <li><a href="/blogs/create"><i class="fa fa-circle-o"></i> Add New Blog</a></li>
            <li><a href="/blogs"><i class="fa fa-circle-o"></i> View All Blogs</a></li>
            <li><a href="/comments"><i class="fa fa-circle-o"></i> View All Comments</a></li>
          </ul>
        </li>        

        <li class="treeview">
          <a href="#"><i class="fa fa-files-o"></i><span>Settings</span></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings 1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings 2</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings 3</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings 4</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> General Settings 5</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->