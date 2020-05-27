@extends('layouts.adminlayout')

@section('content')
<div class="layout-content" id="app">
<!--<example-component ></example-component>-->

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Membership Dashboard</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="#!">Membership</a></li>
<li class="breadcrumb-item active"><a href="#!">Dashboard</a></li>
</ol>
</div>
<div class="row">

<div class="col-sm-3">
<div class="card bg-primary text-white widget-visitor-card">
<div class="card-body text-center">
<h2 class="text-white">18</h2>


<h6 class="text-white">Registered Users</h6>

<i class="feather icon-user-plus"></i>
</div>

</div>
</div>
<div class="col-sm-3">
<div class="card bg-success text-white widget-visitor-card">
<div class="card-body text-center">
<h2 class="text-white">14</h2>
<h6 class="text-white">Active Users</h6>
<i class="feather icon-user-check"></i>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card bg-danger text-white widget-visitor-card">
<div class="card-body text-center">
<h2 class="text-white">1</h2>
<h6 class="text-white">Pending Users</h6>
<i class="feather icon-user-minus"></i>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="card bg-warning text-white widget-visitor-card">
<div class="card-body text-center">
<h2 class="text-white">16</h2>
<h6 class="text-white">Active Memberships</h6>
<i class="feather icon-users"></i>
</div>
</div>
</div>


<!--<div class="col-md-8">
<div class="card">
<div class="card-header">
<h5>Total collected all time</h5>
</div>
<div class="card-body">
<div id="collected-chart"></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body">
<h6>This Month</h6>
<div class="row mt-3">
<div class="col-6">
<span class="d-block text-uppercase">Amount</span>
<h3 class="mt-3">$2,144</h3>
<div class="mt-3" id="transactions1"></div>
</div>
<div class="col-6">
<span class="d-block text-uppercase">Sales</span>
<h3 class="mt-3">100</h3>
<div class="mt-3" id="transactions2"></div>
</div>
</div>
</div>
</div>
</div>-->
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5>Coming soon</h5>
</div>
<div class="card-body">
<!--<div id="sales-chart"></div>-->
</div>
</div>
</div>

</div>

</div>
@endsection
