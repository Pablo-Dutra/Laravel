@extends('layouts.base')
@section('title','Edição')
@section('lnk_novo','active')
@section('content')
<h2>Editar Oferta</h2>
<form action="/oferta/{{$oferta->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" class="form-control" value="{{$oferta->descricao}}">
    </div>
    <div class="form-group">
        <label for="valorOriginal">Valor Original</label>
        <input type="number" name="valorOriginal" class="form-control" value="{{$oferta->valorOriginal}}">
    </div>
    <div class="form-group">
        <label for="valorOferta">Valor da Oferta</label>
        <input type="number" name="valorOferta" class="form-control" value="{{$oferta->valorOferta}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar alterações</button>
    </div>
</form>    
@endsection