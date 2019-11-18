@extends('layouts.app')

<style>
.center {
    display: flex;
    justify-content: center;
}
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estoque da Paróquia Santa Teresinha - Araras/SP</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col center">
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Produtos</h5>
                                    <p class="card-text">Lista de produtos existente no estoque da Paróquia Santa Teresinha - Araras/SP</p>
                                    <a href="{{ url('products') }}" class="btn btn-success btn-block">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
