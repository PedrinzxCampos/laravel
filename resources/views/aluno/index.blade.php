<form action="{{ route('aluno.adicionar') }}" method="post">
    @csrf
    <label for="name">Nome</label>
    <input type="text" id="name" name="nome" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Salvar</button>
</form>