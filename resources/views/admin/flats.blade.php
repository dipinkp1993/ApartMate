@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.css') }}">
<div id="app">
<add-flats></add-flats>
</div>
<script src="{{asset('assets/libs/datatables/datatables.js')}}"></script>
<script src="{{asset('assets/js/pages/tables_datatables.js')}}"></script>
@endsection

