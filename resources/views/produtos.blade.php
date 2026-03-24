 <h1>Produtos em estoque</h1>
 <table border="10">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Preço</th>
    </tr>
@foreach ($produtos as $produto )
    <tr>
    <td>Id: {{ $produto['id']}}</td>
    <td> {{ $produto['nome']}}</td>
    <td>Preço: {{ $produto['preco']}}</td>
    </tr>
    
@endforeach
</table>