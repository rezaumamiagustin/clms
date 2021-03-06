@extends('layout.app')
@section('title', 'Materi')

@section('content')
<br>
@if(auth()->check() && auth()->user()->is_admin == 2)
    <h1>ini halaman Materi GURU</h1>
@else
<div class="row">
	<div class="col-sm-4">
        <div class="card text-center">
            <a href="{{ url('/') }}">
                <div class="card-header">
                    Matematika
                </div>
                <div class="card-body">
                    <h5 class="card-title">BAB 1</h5>
                    <p class="card-text">nama guru</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <a href="{{ url('/') }}">
                <div class="card-header">
                    Bahasa Indonesia
                </div>
                <div class="card-body">
                    <h5 class="card-title">BAB 1</h5>
                    <p class="card-text">nama guru</p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-center">
            <a href="{{ url('/') }}">
                <div class="card-header">
                    Bahasa Inggris
                </div>
                <div class="card-body">
                    <h5 class="card-title">BAB 1</h5>
                    <p class="card-text">nama guru</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endif
@endsection