
Apagar aluno {{ $aluno->name }}
<form method="POST" action="/alunos/{{ $aluno->id }}">
    @csrf
    @method('DELETE')
    <input type="submit" />
</form>