<x-layout title="{{ __('messages.app_name') }}">
    <a class="btn btn-dark mb-3" href="{{ route('series.create') }}">Adicionar</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('seasons.index', $serie->id) }}">
                {{ $serie->nome }}
            </a>
            <div class="d-flex gap-1">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    <!--<script>
        //Acessar variável no frontend com o blade
        const series = {{ Js::from($series) }};
    </script>-->
</x-layout>