<form action="{{ $action }}" method="post">
    @csrf

    @if ($update)
    @method('put')
    @endif
    <div class="mb-3">
        <label class="form-label" for="nome">Nome:</label>
        <input 
            class="form-control"
            type="text" 
            id="nome" 
            name="nome" 
            @isset($nome) value="{{ $nome }}" @endisset>
    </div>
    <button type="submit" class="btn btn-dark">Adicionar</button>
</form>
<a class="btn btn-dark mt-3" href="{{ route('series.index') }}">Voltar</a>
