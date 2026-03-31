@foreach ($professores as $professor)
    <hr>
    <h3>Nome: {{ $professor->nome }}</h3>
    <h3>Telefone: {{ $professor->telefone }}</h3>
    <hr>
    
@endforeach