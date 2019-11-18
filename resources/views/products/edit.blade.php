<form method="POST" action="/products/{{ $product->id }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <span>Nome:</span>
    <input name="name" value=" {{ $product->name }}">
    <span>Descrição:</span>
    <textarea name="description">{{ $product->description }}</textarea>
    <span>Controle:</span>
    <input name="typecontrol" value=" {{ $product->typecontrol }}">
    <span>Estoque:</span>
    <input name="instock" value=" {{ $product->instock }}">
    <span>Estoque Mínimo:</span>
    <input name="minimumstock" value=" {{ $product->minimumstock }}">
    <button type="submit">Editar</button>
</form>