@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Saída de Produto</span>
                    <a href="/products">
                        Produtos
                    </a>
                </div>
                <div class="card-body">

                    <form method="POST" action="/products/{{ $product->id }}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                    <div class="row">
                        <div class="col">
                            <label>Nome:</label>
                            <input name="name" class="form-control" value="{{$product->name}}">
                        </div>
                        <div class="col">
                            <label>Controle:</label>
                            <input name="typecontrol" class="form-control" value="{{$product->typecontrol}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Descrição:</label>
                            <textarea name="description" class="form-control">
                                {{$product->description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Estoque:</label>
                            <input type="number" name="instock" class="form-control" value="{{$product->instock}}" readonly>
                        </div>
                        <div class="col">
                            <label>Estoque Mínimo:</label>
                            <input type="number" name="minimumstock" class="form-control" value="{{$product->minimumstock}}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success">Editar</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
