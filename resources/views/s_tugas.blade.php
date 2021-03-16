@extends('layout.app')
@section('title', 'Tugas')
    
@section('content')
<br>
@if(auth()->check() && auth()->user()->is_admin == 2)
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Buat Tugas</label>  
 
        {{-- {!! Form::open(['url'=>'s_tugas/simpan','class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}         --}}
        @if ($errors->any())     
            <div class="alert alert-danger">         
                <ul>             
                    @foreach ($errors->all() as $error)                 
                    <li>{{ $error }}</li>            
                    @endforeach         
                </ul>     
            </div>  
        @endif 
 
        <div class="col-sm-5">   
            {{-- {!! Form::text('nama_tugas',null,['class'=>'formcontrol','placeholder'=>"nama_tugas"]) !!}  </div> --}}
            <div class="col-sm-5">   
                {{-- {!! Form::text('end_date',null,['class'=>'formcontrol','placeholder'=>"mm/dd/yyyy"]) !!}  </div> --}}
 
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Tambah') }}
                        </button>
                    </div>
                </div>
            {{-- {!! Form::close() !!} --}}
        </div>
        
@else
<table border="1">
	<tr>
		<td>
			{{ $tugas->nama_tugas }}
		</td>
	</tr>
	<tr>
		<td>
			<script>
				CountDownTimer('{{$tugas->created_at}}', 'countdown');
				function CountDownTimer(dt, id)
				{
					var end = new Date('{{$tugas->end_date}}');
					var _second = 1000;
					var _minute = _second * 60;
					var _hour = _minute * 60;
					var _day = _hour * 24;
					var timer;
					function showRemaining() {
						var now = new Date();
						var distance = end - now;
						if (distance < 0) {

							clearInterval(timer);
							document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
							return;
						}
						var days = Math.floor(distance / _day);
						var hours = Math.floor((distance % _day) / _hour);
						var minutes = Math.floor((distance % _hour) / _minute);
						var seconds = Math.floor((distance % _minute) / _second);

						document.getElementById(id).innerHTML = days + 'days ';
						document.getElementById(id).innerHTML += hours + 'hrs ';
						document.getElementById(id).innerHTML += minutes + 'mins ';
						document.getElementById(id).innerHTML += seconds + 'secs';
						document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
					}
					timer = setInterval(showRemaining, 1000);
				}
			</script>
			<div id="countdown"> 
			</td>
		</tr>
	</table>
{{-- <div class="row">
	<div class="col-sm-4">
        <div class="card text-center">
            <a href="{{ url('/') }}">
                <div class="card-header">
                    Matematika 
               </div>
               <div class="card-body">
                   <h5 class="card-title">Tugas BAB 1</h5>
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
                   <h5 class="card-title">Tugas BAB 1</h5>
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
                   <h5 class="card-title">Tugas BAB 1</h5>
                   <p class="card-text">nama guru</p>
               </div>
            </a>
        </div>
    </div>
</div> --}}
@endif
@endsection