@extends('layout.master')
@section('content')
<style type="text/css">
	.textss{
		font-size:20px;
	}
    .container {
        width:67em;
        overflow-x: auto;
        white-space: nowrap;
    }
     .center {
  text-align: center;
}
    @keyframes float {
        0% {
            transform: translatey(0px);
        }
        50% {
            transform: translatey(-10px);
        }
        100% {
            transform: translatey(0px);
        }
    }
    img{
        animation: float 3s ease-in-out infinite;
        border-radius: 50%;
        height:120px;
        width:120px;
    }
    
</style>
<div>
    <div class="center">
        @foreach($sum as $s)

        @if($s->sum <= 7)
        <img src="/virus (1).png">
        <br>
        @foreach($question as $q)
        <font color="black" size="100" face="Century Gothic">{{$q->name}}...<br>Anda beresiko rendah terkena virus</font>
        @endforeach
        <br>
        <font color="black" size="100" face="Century Gothic">Total jawaban YA : {{$s->sum}}</font>

        @elseif($s->sum <= 14)
        <img src="/virus.png">
        <br>
        @foreach($question as $q)
        <font color="black" size="100" face="Century Gothic">{{$q->name}}...<br>Anda beresiko sedang terkena virus</font>
        @endforeach
        <br>
        <font color="black" size="100" face="Century Gothic">Total jawaban YA : {{$s->sum}}</font>

        @else
        <img src="/virus (2).png">
        <br>
        @foreach($question as $q)
        <font color="black" size="100" face="Century Gothic">{{$q->name}}...<br> Anda beresiko tinggi terkena virus</font>
        @endforeach
        <br>
        <font color="black" size="100" face="Century Gothic">Total jawaban YA : {{$s->sum}}</font>
        @endif
        @endforeach
        <br><br>
        <form action="/dashboard">
            <button type="submit" class="btn btn-primary">
                    Kembali
            </button>
        </form>
</div>  
</div> 

 @stop
