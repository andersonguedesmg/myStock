<h1>
    <ul>
        @foreach ( $products as $product )
        <li>
            <a href="/products/{{ $product->id }}"></a>
            {{ $product->name }}
        </li>
        <a href="/products/{{ $product->id }}/edit">Editar</a>
        <form method="POST" action="/products/{{ $product->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit">Deletar</button>
        </form>
        @endforeach
    </ul>
</h1>
<a href="products/create">Cadastrar</a>
    