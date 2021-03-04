@extends('layout.app')
@section('title', 'Absen')
@section('content')
<br>
{{-- @if(auth()->check() && auth()->user()->is_admin == 2)
    <h1>ini absen GURU</h1>
@else  --}}
    <h3>Daftar Hadir Bulan Januari</h3>
    <div class="entry-content-page">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>2/16/2021</td>
                        <td>Hadir</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>2/17/2021</td>
                        <td>Hadir</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{{-- @endif --}}
    
@endsection