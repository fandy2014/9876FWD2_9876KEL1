@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Pengguna</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('users.create') !!}">Tambah baru</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('users.table')
        
@endsection