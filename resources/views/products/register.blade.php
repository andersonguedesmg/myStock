@extends('layouts.app')

@section('content')
<style>

.title {
    font-size: 20px;
    display: flex;
    justify-content: center;
}

.link-new {
    color: #3490dc;
}

.link-new:hover {
    color: #1d68a7;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Paróquia Santa Teresinha - Araras/SP</span>
                    <a href="/products" class="link-new">
                        Produtos
                    </a>
                </div>
                <div class="card-body">

                    <span class="title">Cadastro de Produto</span><br>

                    <form method="POST" action="/products">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col">
                                <label>Nome:</label>
                                <input name="name" class="form-control">
                            </div>
                            <div class="col">
                                <label>Controle:</label>
                                <input name="typecontrol" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Descrição:</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Estoque:</label>
                                <input type="number" name="instock" class="form-control">
                            </div>
                            <div class="col">
                                <label>Estoque Mínimo:</label>
                                <input type="number" name="minimumstock" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
