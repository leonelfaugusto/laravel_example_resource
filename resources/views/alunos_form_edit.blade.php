<form method="POST" action="/alunos/{{ $aluno->id }}">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input name="name" type="text" id="name" value="{{ $aluno->name }}" /><br>
    <label for="curso">Curso:</label>
    <input name="curso" type="text" id="curso" value="{{ $aluno->curso }}" /><br>
    <input type="submit" />
</form>