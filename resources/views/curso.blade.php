@foreach ($cursos as $curso)
    <hr>
    <h3>Curso: {{ $curso->curso }}</h3>
    <h3>Horario: {{ $curso->horario }}</h3>
    <hr>
@endforeach