@extends('site.layout')
@section('title', 'Carinho')
@section('content')
    <div class="row container">
        @if ($mensagem=Session::get('sucesso'))
            <div class="card-panel green lighten-4 green-text text-darken-4">
                {{ $mensagem }}
            </div>

        @endif
        <h4>Seu carinho possui :{{ $itens->count() }} </h4>
        <table class="striped">
        <thead>
          <tr>
              <th></th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody>
        @foreach($itens as $item)
          <tr>
            <th><img src="{{ $item->attributes->image }}" alt="{{ $item->name }}" class="circle" style="width: 70px; height: 70px;"></th>
            <td>{{$item->name}}</td>
            <td>R$ {{number_format($item->price,2,',','.')}}</td>
            <td><input class="white center"style="width: 40px;" type="number" name="quantity" value="{{$item->quantity}}" min="1"></td>
            <td>
                 <button class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                 <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
    </div class="row container center">
         <div class="col s12 center-align">
            <button class="btn-large waves-effect waves-light blue">Continuar Comprando<i class="material-icons right">arrow_back</i></button>
            <button class="btn-large waves-effect waves-light orange">Limpar Carrinho<i class="material-icons right">clear</i></button>
            <button class="btn-large waves-effect waves-light orange">Finalizar Pedido<i class="material-icons right">check</i></button>
          </div>
    </div>

@endsection
