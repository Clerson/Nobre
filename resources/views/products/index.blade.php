<h1>Lista de Produtos</h1>

@foreach ($products as $product)
    <p>{{ $product->name}}</p>
@endforeach