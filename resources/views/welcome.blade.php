<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('backend/img/logo/logo.png')}}" rel="icon">
    <title>Fahmin Shamilli  - Dashboard</title>
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>

 <body id="page-top">
 <div id="app">
 <div id="wrapper">
     <!-- Sidebar -->
    <nav id="sidebar" v-show="$route.path === '/' || $route.path === '/register' ||$route.path === '/forget' ? false: true" style="display: none">
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <router-link to="/home" class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="{{asset('backend/img/logo/logo2.png')}}">
            </div>
            <div class="sidebar-brand-text mx-3">Inventory</div>
        </router-link>
        <hr class="sidebar-divider my-0">
        <li class="nav-item bg-info">
            <router-link class="nav-link" to="/pos">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>POS</span></router-link>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Features
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-user-cog"></i>
                <span>Employee</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-employee">Add Employee</router-link>
                    <router-link class="collapse-item" to="/employee">All Employee</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-dolly"></i>
                <span>Suppliers</span>
            </a>
            <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-supplier">Add Suppliers</router-link>
                    <router-link class="collapse-item" to="/supplier">All Suppliers</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-folder-open"></i>
                <span>Category</span>
            </a>
            <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-category">Add Category</router-link>
                    <router-link class="collapse-item" to="/category">All Category</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-tv"></i>
                <span>Products</span>
            </a>
            <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-product">Add Product</router-link>
                    <router-link class="collapse-item" to="/product">All Product</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Expense</span>
            </a>
            <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-expense">Add Expense</router-link>
                    <router-link class="collapse-item" to="/expense">All Expense</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap41"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-user-check"></i>
                <span>Customers</span>
            </a>
            <div id="collapseBootstrap41" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-customer">Add Customer</router-link>
                    <router-link class="collapse-item" to="/customer">All Customer</router-link>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-dollar-sign"></i>
                <span>Salary</span>
            </a>
            <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/given-salary">Add Salary</router-link>
                    <router-link class="collapse-item" to="/salary">All Salary</router-link>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap7"
               aria-expanded="true" aria-controls="collapseBootstrap7">
                <i class="fas fa-shopping-basket"></i>
                <span>Orders</span>
            </a>
            <div id="collapseBootstrap7" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/order">Today Order</router-link>
                    <router-link class="collapse-item" to="/searchorder">Search</router-link>

                </div>
            </div>
        </li>


        <li class="nav-item">
            <router-link class="nav-link" to="/stock">
                <i class="fas fa-fw fa-palette"></i>
                <span>Stock</span>
            </router-link>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap42"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="fas fa-exclamation"></i>
                <span>Report</span>
            </a>
            <div id="collapseBootstrap42" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <router-link class="collapse-item" to="/store-expense">Report One</router-link>
                    <router-link class="collapse-item" to="/expense">Report Two</router-link>

                </div>
            </div>
        </li>

    </ul>
    </nav>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" id="topbar" v-show="$route.path === '/' || $route.path === '/register' ||$route.path === '/forget' ? false: true" style="display: none">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                                           aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="{{('backend/img/boy.png')}}" style="max-width: 60px">
                            <router-link to="/logout" class="ml-2 d-none d-lg-inline text-white small">Logout</router-link>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Topbar -->
            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <router-view></router-view>

            </div>
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Fahmin Shamilli</a></b>
            </span>
                </div>
            </div>
        </footer>
        <!-- Footer -->
    </div>
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript">
    let token = localStorage.getItem('token');
    if (token) {
        $("#sidebar").css("display","");
        $("#topbar").css("display","");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
<script src="{{ asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('backend/js/demo/chart-area-demo.js')}}"></script>
</body>

</html>
