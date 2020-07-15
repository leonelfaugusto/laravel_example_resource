<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<form method="POST" action="/alunos">
    @csrf
    <label for="name">Nome:</label>
    <input name="name" type="text" id="name" /><br>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="curso">Curso:</label>
    <input name="curso" type="text" id="curso" /><br>
    @error('curso')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" />
</form>