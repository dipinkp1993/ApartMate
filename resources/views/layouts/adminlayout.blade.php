<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
<title>ApartMate | Admin </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="Codedthemes" />
<link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/ionicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/open-iconic.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap-material.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/shreerang-material.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/uikit.css')}}">
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">

<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">

<div class="app-brand demo">
<span class="app-brand-logo demo">

</span>
<a href="index-2.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">ApartMate</a>
<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
<i class="ion ion-md-menu align-middle"></i>
</a>
</div>
<div class="sidenav-divider mt-0"></div>

<ul class="sidenav-inner py-1">
<li class="sidenav-item">
<a href="{{ route('adminhome')}}" class="sidenav-link">
<i class="sidenav-icon feather icon-home"></i>
<div>Dashboard</div>
<div class="pl-1 ml-auto"></div>
</a>
</li>
<li class="sidenav-item">
<a href="{{ route('managefamily')}}" class="sidenav-link">
<i class="sidenav-icon feather icon-users"></i>
<div>Family Management</div>
<div class="pl-1 ml-auto"></div>
</a>
</li>
<li class="sidenav-item">
<a href="javascript:" class="sidenav-link sidenav-toggle">
<i class="sidenav-icon feather icon-settings"></i>
<div>All settings</div>
<div class="pl-1 ml-auto">
<div class="badge badge-danger">Settings</div>
</div>
</a>
<ul class="sidenav-menu">
<li class="sidenav-item">
<a href="{{ route('manageflat')}}" class="sidenav-link">
<div>Floors & Flats</div>
</a>
</li>


</ul>
</li>







</ul>




</ul>
</div>


<div class="layout-container">

<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

<a href="index-2.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
<span class="app-brand-logo demo">
<img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
</span>
<span class="app-brand-text demo font-weight-normal ml-2">ApartMate</span>
</a>

<div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
<a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
<i class="ion ion-md-menu text-large align-middle"></i>
</a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse" id="layout-navbar-collapse">

<hr class="d-lg-none w-100 my-2">
<div class="navbar-nav align-items-lg-center">

<label class="nav-item navbar-text navbar-search-box p-0 active">
<i class="feather icon-search navbar-icon align-middle"></i>
<span class="navbar-search-input pl-2">
<input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
</span>
</label>
</div>
<div class="navbar-nav align-items-lg-center ml-auto">
<div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
<a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
<i class="feather icon-bell navbar-icon align-middle"></i>
<span class="badge badge-danger badge-dot indicator"></span>
<span class="d-lg-none align-middle">&nbsp; Notifications</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="bg-primary text-center text-white font-weight-bold p-3">
4 New Notifications
</div>
<div class="list-group list-group-flush">
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">Login from 192.168.1.1</div>
<div class="text-light small mt-1">
Aliquam ex eros, imperdiet vulputate hendrerit et.
</div>
<div class="text-light small mt-1">12h ago</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-user-plus bg-primary border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">You have
<strong>4</strong> new followers</div>
<div class="text-light small mt-1">
Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">Server restarted</div>
<div class="text-light small mt-1">
19h ago
</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
<div class="media-body line-height-condenced ml-3">
<div class="text-dark">99% server load</div>
<div class="text-light small mt-1">
Etiam nec fringilla magna. Donec mi metus.
</div>
<div class="text-light small mt-1">
20h ago
</div>
</div>
</a>
</div>
<a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
</div>
</div>
<div class="demo-navbar-messages nav-item dropdown mr-lg-3">
<a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
<i class="feather icon-mail navbar-icon align-middle"></i>
<span class="badge badge-success badge-dot indicator"></span>
<span class="d-lg-none align-middle">&nbsp; Messages</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<div class="bg-primary text-center text-white font-weight-bold p-3">
4 New Messages
</div>
<div class="list-group list-group-flush">
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
<div class="text-light small mt-1">
Josephin Doe &nbsp;·&nbsp; 58m ago
</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
<div class="text-light small mt-1">
Lary Doe &nbsp;·&nbsp; 1h ago
</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
<div class="text-light small mt-1">
Alice &nbsp;·&nbsp; 2h ago
</div>
</div>
</a>
<a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
<img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
<div class="media-body ml-3">
<div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
<div class="text-light small mt-1">
Suzen &nbsp;·&nbsp; 5h ago
</div>
</div>
</a>
 </div>
<a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
</div>
</div>

<div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
<div class="demo-navbar-user nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
<span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
<img src="assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
<span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Auth::guard('admin')->user()->name }}</span>
</span>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:" class="dropdown-item">
<i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
<a href="javascript:" class="dropdown-item">
<i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
<a href="javascript:" class="dropdown-item">
<i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
<div class="dropdown-divider"></div>
<a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" class="dropdown-item">
<i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</div>
</div>
</div>
</nav>
@yield('content')
<nav class="layout-footer footer footer-light">
<div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
<div class="pt-3">
<span class="float-md-right d-none d-lg-block">&copy; Exclusive on Themeforest | Hand-crafted &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
</div>
<div>
<a href="javascript:" class="footer-link pt-3">About Us</a>
<a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
<a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
<a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
</div>
</div>
</nav>

</div>

</div>

</div>

<div class="layout-overlay layout-sidenav-toggle"></div>
</div>


<script src="{{asset('assets/js/pace.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/sidenav.js')}}"></script>
<script src="{{asset('assets/js/layout-helpers.js')}}"></script>
<script src="{{asset('assets/js/material-ripple.js')}}"></script>

<script src="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="{{asset('assets/libs/datatables/datatables.js')}}"></script>
<script src="{{asset('assets/js/pages/tables_datatables.js')}}"></script>
<script>
        // [ revenue-map ] start
        $(function() {
            var options = {
                chart: {
                    height: 200,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 3,
                    curve: 'smooth'
                },
                series: [{
                    name: 'Sales',
                    data: [20, 50, 30, 60, 30, 50, 40]
                }, {
                    name: 'Amount',
                    data: [40, 20, 50, 15, 40, 65, 20]
                }],
                xaxis: {
                    type: 'datetime',
                    categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
                },
                colors: ['#ff4a00', '#62d493'],
                fill: {
                    type: 'solid',
                },
                markers: {
                    size: 5,
                    colors: ['#ff4a00', '#62d493'],
                    opacity: 0.9,
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                },
                grid: {
                    borderColor: '#e2e5e885',
                },
                yaxis: {
                    min: 10,
                    max: 70,
                }
            };
            var chart = new ApexCharts(document.querySelector("#collected-chart"), options);
            chart.render();
        });
        // [ revenue-map ] end
        // [ sales-chart ] start
        $(function() {
            var options = {
                chart: {
                    height: 250,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [{
                    name: 'Trial',
                    data: [20, 50, 30, 60, 30, 50, 40]
                }, {
                    name: 'Bronze',
                    data: [40, 20, 50, 15, 40, 65, 20]
                }, {
                    name: 'Gold',
                    data: [64, 40, 20, 30, 20, 40, 65]
                }, {
                    name: 'Platinum',
                    data: [30, 25, 40, 15, 20, 15, 30]
                }],
                xaxis: {
                    type: 'datetime',
                    categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
                },
                colors: ['#ff4a00', '#62d493', "#f4ab55", "#FF4961"],
                fill: {
                    type: 'solid',
                },
                markers: {
                    size: 5,
                    colors: ['#ff4a00', '#62d493', "#f4ab55", "#FF4961"],
                    opacity: 0.9,
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                },
                grid: {
                    borderColor: '#e2e5e885',
                },
                yaxis: {
                    min: 10,
                    max: 70,
                }
            };
            var chart = new ApexCharts(document.querySelector("#sales-chart"), options);
            chart.render();
        });
        // [ sales-chart ] end
        // [ Transection ] start
        $(function() {
            var options1 = {
                chart: {
                    type: 'bar',
                    height: 100,
                    sparkline: {
                        enabled: true
                    }
                },
                colors: ["#ff4a00"],
                plotOptions: {
                    bar: {
                        columnWidth: '80%'
                    }
                },
                series: [{
                    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
                }],
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                xaxis: {
                    crosshairs: {
                        width: 1
                    },
                },
                tooltip: {
                    fixed: {
                        enabled: false
                    },
                    x: {
                        show: false
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return 'Amount'
                            }
                        }
                    },
                    marker: {
                        show: false
                    }
                }
            }
            new ApexCharts(document.querySelector("#transactions1"), options1).render();
            var options2 = {
                chart: {
                    type: 'bar',
                    height: 100,
                    sparkline: {
                        enabled: true
                    }
                },
                colors: ["#FF4961"],
                plotOptions: {
                    bar: {
                        columnWidth: '80%'
                    }
                },
                series: [{
                    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
                }],
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                xaxis: {
                    crosshairs: {
                        width: 1
                    },
                },
                tooltip: {
                    fixed: {
                        enabled: false
                    },
                    x: {
                        show: false
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return 'Sales'
                            }
                        }
                    },
                    marker: {
                        show: false
                    }
                }
            }
            new ApexCharts(document.querySelector("#transactions2"), options2).render();
        });
        // [ Transection ] end
    </script>
</body>


</html>
