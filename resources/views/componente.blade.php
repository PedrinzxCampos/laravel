@foreach ($componentes as $componente)
    <hr>
    <h3>Curso: {{ $componente->componente }}</h3>
    <h3>Horario: {{ $componente->horario }}</h3>
    <hr>
@endforeach