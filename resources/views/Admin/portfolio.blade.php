<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>


        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_dashboard')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Section Setting</span>
            </a>

        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_home')}}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Home Setting</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin_about')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>About Setting</span>
            </a>

        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_resume')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Blog Setting</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_portfolio')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Portfolio Setting</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_contact')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Contact Setting</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{$allHome->title}} {{$allHome->lasttitle}}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('images/' . $addProfile->img)}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route('admin_profile')}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <div class="container">

                        <!-- Large button groups (default and split) -->
                        <div class="btn-group">
                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Go to other section
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('admin_my_skill')}}">My Skill Section</a>
                                <a class="dropdown-item" href="#">Research Paper Section</a>
                            </div>
                        </div>


                    </div>

                </div>

                <!-- Content Row -->


                <div class="container">

                    <div class="card">
                        <h5 class="card-header">Education & Professional Background</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            Add Education Background
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('add_education_background')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="type" value="e">

                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputEmail1"
                                                           style="float: left;">Degree</label>
                                                    <input type="text" name="title" class="form-control"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Name of degree...">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputPassword1"
                                                           style="float: left;">University</label>
                                                    <input type="text" name="organization" class="form-control"
                                                           id="exampleInputPassword1" placeholder="University name...">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputPassword1"
                                                           style="float: left;">Duration</label>
                                                    <input type="text" name="time" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Duration of Degree Ex: 2018-2022 , 2020-2023">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" style="float: left;">Short
                                                        Description</label>
                                                    <textarea name="about_exp" rows="4" cols="50"
                                                              placeholder="About university...."
                                                              class="form-control"></textarea>
                                                </div>

                                                <button type="submit" style="float: left;" class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            Add Professional Background
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('add_profesional_background')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="type" value="p">

                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputEmail1"
                                                           style="float: left;">Post Name</label>
                                                    <input type="text" name="title" class="form-control"
                                                           id="exampleInputEmail1" aria-describedby="emailHelp"
                                                           placeholder="Name of post Ex: Software Engineer,Java Developer">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputPassword1"
                                                           style="float: left;">Organization Name</label>
                                                    <input type="text" name="organization" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Organization name...">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" for="exampleInputPassword1"
                                                           style="float: left;">Duration</label>
                                                    <input type="text" name="time" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Duration of Degree Ex: 2018-2022 , 2020-2023">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-left" style="float: left;">Short
                                                        Description</label>
                                                    <textarea name="about_exp" rows="4" cols="50"
                                                              placeholder="About Organization...."
                                                              class="form-control"></textarea>
                                                </div>

                                                <button type="submit" style="float: left;" class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </form>

                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="card mt-3">
                        <h5 class="card-header">All List</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            Education Background List
                                        </div>
                                        <div class="card-body">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Degree</th>
                                                    <th scope="col">University</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Short Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($data1 as $datas)
                                                    <tr>
                                                        <th>{{ $i++ }}</th>
                                                        <th>{{ $datas->title }}</th>
                                                        <td>{{ $datas->organization }}</td>
                                                        <td>{{ $datas->time }}</td>
                                                        <td>{{ $datas->about_exp }}</td>

                                                        <td>
                                                            <a class="btn btn-warning"
                                                               href="/admin/portfolio/educational/{{ $datas->id }}">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a class="btn btn-danger mt-1"
                                                               href="/admin/portfolio/delete/educational/{{ $datas->id }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        </div>


                                    </div>

                                </div>

                            </div>



                            <div class="row mt-3">
                                <div class="col">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            Professional Background List
                                        </div>
                                        <div class="card-body">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Post Name</th>
                                                    <th scope="col">Organization</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Short Description</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($data as $datas)
                                                    <tr>
                                                        <th>{{ $i++ }}</th>
                                                        <th>{{ $datas->title }}</th>
                                                        <td>{{ $datas->organization }}</td>
                                                        <td>{{ $datas->time }}</td>
                                                        <td>{{ $datas->about_exp }}</td>

                                                        <td>
                                                            <a class="btn btn-warning"
                                                               href="/admin/portfolio/professional/{{ $datas->id }}">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                            </a>
                                                            <a class="btn btn-danger mt-1"
                                                               href="/admin/portfolio/delete/educational/{{ $datas->id }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>

                                        </div>


                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>


                </div>


            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{url('/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('/admin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{url('/admin/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{url('/admin/js/demo/chart-area-demo.js')}}"></script>
<script src="{{url('/admin/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
