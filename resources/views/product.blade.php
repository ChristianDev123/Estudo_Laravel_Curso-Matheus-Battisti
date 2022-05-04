@extends('layouts.main')
@section('titlePage','Produto')
@section('contentPage')
    @if($id != '')
        <p>Exibindo produto id: {{$id}}</p>
    @endif
    @if($busca != '')
        <p>O usuário está procurando por: {{$busca}}</p>
    @endif
@endsection