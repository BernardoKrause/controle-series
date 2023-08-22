<x-layout title="Nova Série">
    
    <form action="{{ route('series.store') }}" method="post">
    @csrf

    <div class="row mb-3">
        <div class="col-8">
            <label class="form-label" for="nome">Nome:</label>
            <input 
            autofocus
            class="form-control"
            type="text" 
            id="nome" 
            name="nome" 
            value="{{ old('nome') }}">
        </div>
        <div class="col-2">
            <label class="form-label" for="seasonsQty">N° de temporadas:</label>
            <input 
            class="form-control"
            type="text" 
            id="seasonsQty" 
            name="seasonsQty" 
            value="{{ old('seasonsQty') }}">
        </div>
        <div class="col-2">
            <label class="form-label" for="episodesPerSeason">Eps/Temporada:</label>
            <input 
            class="form-control"
            type="text" 
            id="episodesPerSeason" 
            name="episodesPerSeason" 
            value="{{ old('episodesPerSeason') }}">
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Adicionar</button>
</form>
<a class="btn btn-dark mt-3" href="{{ route('series.index') }}">Voltar</a>

</x-layout>