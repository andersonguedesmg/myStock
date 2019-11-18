@extends('layouts.app')

@section('content')

<style>
.table th, .table td {
    vertical-align: middle;
}

.material-icons {
    font-size: 20px;
}

.material-icons:hover {
    color: black;
}

a {
    color: white;
}

a:hover {
    color: black;
}

.link-new {
    color: #3490dc;
}

.link-new:hover {
    color: #1d68a7;
}

.title {
    font-size: 20px;
    display: flex;
    justify-content: center;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Paróquia Santa Teresinha - Araras/SP</span>
                    <a href="products/create" class="link-new text-decoration-none ml-auto">
                        Novo Produto
                    </a>
                </div>
                <div class="card-body">

                    <span class="title">Produtos</span><br>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Controle</th>
                                <th scope="col">Estoque</th>
                                <th scope="col">Est. Mínimo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ( $products as $product )
                                <a href="/products/{{ $product->id }}"></a>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->typecontrol }}</td>
                                <td>{{ $product->instock }}</td>
                                <td>{{ $product->minimumstock }}</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <a href="/products/{{ $product->id }}/edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </button>
                                </td>
                                <td>
                                    <form method="POST" action="/products/{{ $product->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>                           
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection