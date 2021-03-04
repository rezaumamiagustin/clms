@extends('layout.app')
@section('title', 'Absen Keluar')
   
<script src="{{ asset('temp/js/jam.js') }}"></script>
    <body class="hold-transition sidebar-mini" onload="realtimeClock()">
        <div class="wrapper">
            @section('content')
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Presensi Keluar</div>
                        <div class="card-body">
                            <form method="post" action="{{ route ('ubah-presensi') }}" >
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <center>
                                        <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                    text-shadow: 4px 4px 10px #36D6FE,
                                                    4px 4px 20px #36D6FE,
                                                    4px 4px 30px#36D6FE,
                                                    4px 4px 40px #36D6FE;">
                                        </label>
                                    </center>
                                </div>
                                <center>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Presensi Keluar</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
        </div>
    </body>

        
