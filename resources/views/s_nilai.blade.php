@extends('layout.app')
@section('title', 'Nilai')
    
@section('content')
<br>
@if(auth()->check() && auth()->user()->is_admin == 2)
    <h1>ini halaman absen GURU</h1>
@else
<div class="row">
	<div class="col-sm-4">
        <div class="card text-center">
            <a href="{{ url('/') }}">
                <div class="card-header">
                    Matematika
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text">nama guru</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="/" class="btn btn-primary">Detail Nilai</a>
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
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text">nama guru</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="/" class="btn btn-primary">Detail Nilai</a>
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
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text">nama guru</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="/" class="btn btn-primary">Detail Nilai</a>
                </div>
            </a>
        </div>
    </div>
</div>
@endif
@endsection