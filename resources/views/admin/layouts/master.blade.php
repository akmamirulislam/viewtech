<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.6 -->
    {!! Html::style('admin/bootstrap/css/bootstrap.min.css', array('rel' => 'stylesheet')) !!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!! Html::style('admin/dist/css/AdminLTE.min.css', array('rel' => 'stylesheet')) !!}
    <!-- DataTables -->
    {!! Html::style('admin/plugins/datatables/dataTables.bootstrap.css', array('rel' => 'stylesheet')) !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('admin/dist/css/skins/_all-skins.min.css', array('rel' => 'stylesheet')) !!}

    <style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="/dashboard" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>IT</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Venus </b>IT Limited</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">          
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'user-image')) }}
                <span class="hidden-xs"> {{ Auth::user()->name }} </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'img-circle')) }}
                  <p>
                     {{ Auth::user()->name }} - Web Developer
                    <small>Member since Nov. 2016</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" 
                        class="btn btn-default btn-flat">Sign out</a>
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      </form>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- including left side-bar -->
        @include('admin.pages.includes.left-sidebar')
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.7
      </div>
      <strong>Copyright &copy; 2014-{{ date("Y") }} <a href="#">Venus IT Limited </a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- including left side-bar -->
        @include('admin.pages.includes.control-sidebar')
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->


  <!-- jQuery 2.2.3 -->
  {!! Html::script('admin/plugins/jQuery/jquery-2.2.3.min.js') !!}
  <!-- Bootstrap 3.3.6 -->
  {!! Html::script('admin/bootstrap/js/bootstrap.min.js') !!}
  <!-- SlimScroll -->
  {!! Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
  <!-- FastClick -->
  {!! Html::script('admin/plugins/fastclick/fastclick.js') !!}
  <!-- AdminLTE App -->
  {!! Html::script('admin/dist/js/app.min.js') !!}
  <!-- AdminLTE for demo purposes -->
  {!! Html::script('admin/dist/js/demo.js') !!}
  <!-- DataTables -->
  {!! Html::script('admin/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('admin/plugins/datatables/dataTables.bootstrap.min.js') !!}

  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

  <!-- Scripts -->
  <script>
     window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
     ]); ?>
  </script>


  <script>
  $(document).ready(function() {
          $("#fileUpload").on('change', function() {
            //Get count of selected files
            var countFiles = $(this)[0].files.length;
            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();
            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
              if (typeof(FileReader) != "undefined") {
                //loop for each file selected for uploaded.
                for (var i = 0; i < countFiles; i++) 
                {
                  var reader = new FileReader();
                  reader.onload = function(e) {
                    $("<img />", {
                      "src": e.target.result,
                      "class": "thumb-image"
                    }).appendTo(image_holder);
                  }
                  image_holder.show();
                  reader.readAsDataURL($(this)[0].files[i]);
                }
              } else {
                alert("This browser does not support FileReader.");
              }
            } else {
              alert("Pls select only images");
            }
          });
        });
  </script>

  </body>
</html>
