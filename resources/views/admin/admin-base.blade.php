<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name??'';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Afonete Affiliate</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{asset('assets/a/img/small-logo.png')}}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('assets/a/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/a/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/a/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/a/dist/css/tree_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/a/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('assets/a/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/a/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/a/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/a/css/style.css')}}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
    <!-- /.navbar -->

    {{-- left navigation menu start --}}
<style type="text/css">
    ul li img{
        width: 25px;
        height: 25px;
    }
</style>
    <!-- Main Sidebar Container -->
 <!--   <aside class="main-sidebar sidebar-dark-info elevation-4">-->
        <!-- Brand Logo -->
 <!--       <a href="index3.html" class="brand-link">-->
 <!--           <img src="{{asset('assets/a/img/log1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"-->
 <!--               style="opacity: .8">-->
 <!--           <span class="brand-text font-weight-light">Afonete</span>-->
 <!--       </a>-->

        <!-- Sidebar -->
 <!--       <div class="sidebar">-->
            <!-- Sidebar user panel (optional) -->
 <!--           <div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
 <!--               <div class="image">-->
 <!--                   <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle elevation-2" alt="User Image">-->
 <!--               </div>-->
 <!--               <div class="info">-->
 <!--                   <a href="#" class="d-block">{{$name}}</a>-->
 <!--               </div>-->
 <!--           </div>-->

            <!-- Sidebar Menu -->
 <!--           <nav class="mt-2">-->
 <!--               <ul class="nav nav-pills nav-sidebar flex-column nav-fixed" data-widget="treeview" role="menu"-->
 <!--                   data-accordion="false">-->
                    <!-- Add icons to the links using the .nav-icon class -->
 <!--              with font-awesome or any other icon font library -->
 <!--                   <li class="nav-item has-treeview ">-->
 <!--                       <a href="" class="nav-link active">-->
 <!--                           <i class="nav-icon fas fa-tachometer-alt"></i>-->
 <!--                           <p>-->
 <!--                               <p>-->
 <!--                                   Dashboard-->
 <!--                               </p>-->
 <!--                           </p>-->
 <!--                       </a>-->

 <!--                   </li>-->

                    <!-- End of nav-item -->
 <!--                   <li class="nav-item has-treeview ">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-share"></i>-->
 <!--                           <p>-->
 <!--                               <p>-->
 <!--                                   Fear Loss-->
 <!--                               </p>-->

 <!--                           </p>-->
 <!--                       </a>-->

 <!--                   </li>-->

                    <!-- End of nav-item -->

 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-signal"></i>-->
 <!--                           <p>-->
 <!--                               Balance-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li>-->
 <!--                     <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                         <img src="https://cdn-icons-png.flaticon.com/256/7544/7544957.png">-->
 <!--                               Investment Package-->
 <!--                                                  </a>-->
 <!--                   </li>-->

                    <!-- End of nav-item -->

 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-road"></i>-->
 <!--                           <p>-->
 <!--                               Payments-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li>-->
 <!--<li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                        <img src="https://cdn-icons-png.flaticon.com/128/999/999346.png">  Featured <i>coming soon</i>-->
                         
 <!--                       </a>-->
 <!--                   </li>-->
                    <!-- End of nav-item -->
 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-star"></i>-->
 <!--                           <p>-->
 <!--                               Upgrade Package-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li> <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <img src="https://cdn-icons-png.flaticon.com/128/4595/4595164.png">-->
 <!--                               Upload Project-->
                            
 <!--                       </a>-->
 <!--                   </li>-->

                    <!-- End of nav-item -->


 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link ">-->
 <!--                           <i class="nav-icon fas fa-users"></i>-->
 <!--                           <p>-->
 <!--                               Team Building-->

 <!--                           </p>-->
 <!--                       </a>-->

 <!--                   </li>-->
                    
                    

                    <!-- End of nav-item -->

 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link ">-->
 <!--                           <i class="nav-icon fas fa-book"></i>-->
 <!--                           <p>-->
 <!--                               Education-->
 <!--                           </p>-->
 <!--                       </a>-->

 <!--                   </li>-->

                    <!-- End of nav-item -->

 <!--                   <li class="nav-item has-treeview">-->
 <!--                       <a href="" class="nav-link ">-->
 <!--                           <i class="nav-icon fas fa-home"></i>-->
 <!--                           <p>-->
 <!--                               Exchange-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li>-->

 <!--                   {{-- End of nav-item -->
 <!--         <li class="nav-item has-treeview">-->
 <!--           <a href="" class="nav-link ">-->
 <!--                   <i class="nav-icon fas fa-home"></i>-->
 <!--                   <p>-->
 <!--                       Marchants-->
 <!--                   </p>-->
 <!--                   </a>-->
 <!--                   </li> --}}-->

                    <!-- End of nav-item -->

 <!--                   <li class=" nav-item has-treeview">-->
 <!--                       <a href="#" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-plus"></i>-->
 <!--                           <p>-->
 <!--                               Products-->
 <!--                               <i class="fas fa-angle-left right"></i>-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                       <ul class="nav nav-treeview" style="background-color: blanchedalmond">-->
 <!--                           <li class="nav-item">-->
 <!--                               <a href="www.muhahe.com" class="nav-link">-->
 <!--                                   <i class="fas fa-shopping-cart nav-icon" style="color: black"></i>-->
 <!--                                   <p style="color: black">Our Shop</p>-->
 <!--                               </a>-->
 <!--                           </li>-->
 <!--                           <li class="nav-item">-->
 <!--                               <a href="www.booking.muhahe.com" class="nav-link">-->
 <!--                                   <i class="fas fa-home nav-icon" style="color: black"></i>-->
 <!--                                   <p style="color: black">Our Booking</p>-->
 <!--                               </a>-->
 <!--                           </li>-->
 <!--                           <li class="nav-item">-->
 <!--                               <a href="" class="nav-link">-->
 <!--                                   <i class="far fa-circle nav-icon" style="color: black"></i>-->
 <!--                                   <p style="color: black">Other Products</p>-->
 <!--                               </a>-->
 <!--                           </li>-->
 <!--                       </ul>-->
 <!--                   </li> End of nav-item-->

 <!--                   <li class="nav-item">-->
 <!--                       <a href="" class="nav-link ">-->
 <!--                           <i class="nav-icon fas fa-user"></i>-->
 <!--                           <p>-->
 <!--                               Refer & Earn-->
 <!--                           </p>-->
 <!--                       </a>-->

 <!--                   </li>-->

                    <!-- End of nav-item -->
 <!--                   <li class="nav-item">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-cog"></i>-->
 <!--                           <p>-->
 <!--                               Profile Settings-->
 <!--                               <span class="right badge badge-success">New</span>-->
 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li>-->
 <!--                   {{-- END FO PROFILE SETTINGS --}}-->
 <!--                   <li class="nav-item">-->
 <!--                       <a href="" class="nav-link">-->
 <!--                           <i class="nav-icon fas fa-cog"></i>-->
 <!--                           <p>-->
 <!--                               FAQ-->

 <!--                           </p>-->
 <!--                       </a>-->
 <!--                   </li>-->
 <!--                    <li> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">-->
 <!--               <img src="https://cdn-icons-png.flaticon.com/128/4436/4436954.png" width="25px" height="25px">  -->
 <!--Log out</a><form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf                -->
 <!--                    </form>-->
 <!--                   </li>-->
 <!--               </ul>-->
 <!--           </nav><br><br>-->
            <!-- /.sidebar-menu -->
 <!--       </div>-->
        <!-- /.sidebar -->
 <!--   </aside>-->

    {{-- left navigation menu end --}}



    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-info elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="{{asset('assets/a/img/log1.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('assets/a/img/johndoe.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{$name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-fixed" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview ">
                        <a href="{{route('admin.dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <p>
                                    Dashboard
                                </p>
                            </p>
                        </a>

                    </li>


                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Profile Settings
                               
                            </p>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="{{route('admin.contacted')}}" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Contacted
                                <sup><span class="right badge badge-success">2</span></sup>
                                
                               
                            </p>
                        </a>
                    </li>
                    {{-- END FO PROFILE SETTINGS --}}
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                FAQ

                            </p>
                        </a>
                    </li>
               <li> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <img src="https://cdn-icons-png.flaticon.com/128/4436/4436954.png" width="25px" height="25px">  
 Log out</a><form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf                
                     </form>
                    </li>

                </ul>
            </nav><br><br>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- REQUIRED SCRIPTS -->
    </div>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidsbar content goes here -->
        <center>
            <div class="p-2">
                <h3 id="prof"></h3>

                <p> <i class="fas fa-bitcoin mr-2"></i><a href="">Profile</a></p>
                <p> <i class="fas fa-cog mr-2"></i> <a href="">Settings</a></p>
                <hr id="hrs">

                <p><i class="fas fa-logout mr-2"></i> <a href="">Need Help</a></p>
                <p><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        Logout</a></p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf
                </form>

            </div>
        </center>
    </aside>

    <!-- /.control-sidebar -->



</body>

</html>