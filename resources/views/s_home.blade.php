@extends('layout.app')
@section('title', 'Beranda')
    
@section('content')
{{-- guru --}}
@if(auth()->check() && auth()->user()->is_admin == 2)
    <h1>ini LMS GURU</h1>
{{-- admin --}}
@elseif(auth()->check() && auth()->user()->is_admin == 1)
    <h1>ini LMS ADMIN</h1>
@else 
    <h1>ini LMS SISWA</h1>
@endif
@endsection