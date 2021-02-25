@extends('layout.app')
@section('title', 'Beranda')
    
@section('content')
@if(auth()->check() && auth()->user()->is_admin == 2)
    <h1>ini LMS GURU</h1>
@else
    <h1>ini LMS SISWA</h1>
@endif
@endsection