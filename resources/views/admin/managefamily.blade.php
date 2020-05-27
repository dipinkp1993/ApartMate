@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.css') }}">
<div id="app">
<add-family></add-family>
</div>
<script src="{{asset('assets/libs/datatables/datatables.js')}}"></script>
<script src="{{asset('assets/js/pages/tables_datatables.js')}}"></script>
@endsection

