@extends('site.layout')
@section('title', 'Detalhes do Produto')
@section('content')
<div class="row container">
    <div class="col s12 m6">
        <img src="{{$produto->imagem}}" alt="{{$produto->nome}}" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h4>{{$produto->nome}}</h4>
        <h4>R$ {{number_format($produto->preco,2,',','.')}}</h4>
        <p>{{$produto->descricao}}</p>
        <p>Postado por :{{ $produto->user->firstName }}<br>
            Categoria : {{ $produto->categoria->nome }}
        </p>
        <form action="{{ route('site.addcarrinho', ['id' => $produto->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="number" name="qnt" value="1">
            <input type="hidden" name="price" value="{{ $produto->preco }}">
            <input type="hidden" name="name" value="{{ $produto->nome }}">
            <input type="hidden" name="img" value="{{ $produto->imagem }}">
            <button type="submit" class="btn orange btn-large">Adicionar ao Carrinho</button>
        </form> 
    </div>
</div>
@endsection
