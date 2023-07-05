@extends('layouts.base')
@section('title','Ofertas')
@section('lnk_home','active')
@section('content')
<h1>Ofertas</h1>

@if(count($ofertas)>0)
<table class='table'>
    <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Oferta</th>
        <th>Mercearia</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($ofertas as $oferta)
    <tr>
        <td>{{$oferta->id}}</td>
        <td>{{$oferta->descricao}}</td>
        <td>De R$ {{$oferta->valorOriginal}},00 por R$ {{$oferta->valorOferta}},00 </td>
        <td>{{$oferta->user->name}}</td>
        @if (auth()->check())
            @if($oferta->user_id == $usuario->id)
            <td>
                <a href="/oferta/{{$oferta->id}}" title="Editar" class="btn btn-secondary">Editar {{$oferta->user_id}}</a>
            </td>
            <td>
                <form action="/oferta/{{$oferta->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta oferta?')">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger" title="Excluir">Excluir {{$oferta->user->id}}</button>
                </form>
            </td> 
            @else
            <td></td>       
            <td></td>
            @endif
        @else
            <td></td>       
            <td></td>    
        @endif

    </tr>
    @endforeach
</table>
@else
<figure align='center'>
    <img src='fail.png' title='Falha ao carregar as ofertas.'>
</figure>
<p align='center'>Ainda não foram cadastradas ofertas.</p>
@guest 
<strong>Crie o login de sua Mercearia e seja o primeiro a criar uma oferta.</strong>
@endguest
@endif
@endsection
