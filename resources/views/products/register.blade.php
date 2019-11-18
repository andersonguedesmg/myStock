<form method="POST" action="/products">
    {{ csrf_field() }}
    <span>Nome:</span>
    <input name="name">
    <span>Descrição:</span>
    <textarea name="description"></textarea>
    <span>Controle:</span>
    <input name="typecontrol">
    <span>Estoque:</span>
    <input name="instock">
    <span>Estoque Mínimo:</span>
    <input name="minimumstock">
    <button type="submit">Cadastrar</button>
</form>