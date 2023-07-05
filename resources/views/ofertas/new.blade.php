@extends('layouts.base')
@section('title','Nova Oferta')
@section('lnk_novo','active')
@section('content')
<h2>Criar Nova Oferta</h2>
<form action="/oferta/store" method="post">
    @csrf
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="valorOriginal">Valor Original</label>
        <input type="number" name="valorOriginal" class="form-control">
    </div>
    <div class="form-group">
        <label for="valorOferta">Valor da Oferta</label>
        <input type="number" name="valorOferta" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</form>
@endsection