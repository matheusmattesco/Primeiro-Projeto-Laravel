@extends('layouts.main')

@section('title','HDC Events')'
    
@section('content')


<h1>Algum Titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
<p>A condição é true</p>
@endif   

<p>{{ $nome }}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif($nome == "Matheus")
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++)
<p>Array = {{ $arr[$i] }} Indice = {{ $i }}</p>
    @if($i == 2)
    <p>o I é 2</p>
    @endif
@endfor

@foreach ($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome}} </p>
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

<!-- comentario HTML (Aparece no inspecionar) -->
{{--  comentario do blade(não aparece no inspencionar) --}}
    
@endsection